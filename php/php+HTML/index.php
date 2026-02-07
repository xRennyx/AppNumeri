<?php
require 'DatabaseCon.php';
$dbconfig= require 'configuration/DBconfiguration.php'; //configurazioni dell'applicativo su un file a parte
$db = DatabaseCon::getDB($dbconfig);

$query= 'INSERT INTO studenti(nome, cognome, media, data_iscrizione) VALUES(:nome, :cognome, :media, NOW())';
try{
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome', 'Lucy', PDO::PARAM_STR);
    $stmt->bindValue(':cognome', 'Taylor', PDO::PARAM_STR);
    $stmt->bindValue(':media', 2, PDO::PARAM_INT);
    $stmt->execute();
}catch (PDOException $e){
    echo "A DB error occurred. Please try again later.";
}
$query ='UPDATE studenti 
        SET media = :media 
        WHERE nome = :nome';

try {
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome', 'Antonio', PDO::PARAM_STR);
    $stmt->bindValue(':media', 9, PDO::PARAM_INT);
    $stmt->execute();

    if($stmt->rowCount() > 0){
        echo "No rows were updated.";
    }else {
        echo "Upadate successful.";
    }
    echo '<br>';
    $stmt->closeCursor();
} catch (PDOException $e) {
    echo "A DB error occurred. Please try again later.";
}
$query='DELETE FROM studenti WHERE nome = :nome';
try {
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome', 'Lucy', PDO::PARAM_STR);
    $stmt->execute();
    echo '<br>';
    $stmt->closeCursor();
} catch (PDOException $e) {
    echo "A DB error occurred. Please try again later.";
}

$query='SELECT * FROM studenti';
try{
    $stmt = $db->prepare($query);
    $stmt->execute();
    while($user = $stmt->fetch()){
        echo "nome: ".$user->nome."<br>";
        echo "cognome: ".$user->cognome."<br>";
        echo "media: ".$user->media."<br>";
        echo "data_iscrizione: ".$user->data_iscrizione."<br>";
        echo "<hr>";
    }
    $stmt->closeCursor();
}catch (PDOException $e)
{
    echo "A DB error occurred. Plaese try again later.";
}
$query = "SELECT media, cognome FROM studenti WHERE nome = :nome";

try {
    $stmt = $db->prepare($query);
    $stmt->bindValue(':nome', 'Antonio', PDO::PARAM_STR); //Costante statica di php perchè ::
    $stmt->execute();

    while ($user = $stmt->fetch()) {
        echo "cognome: " . $user->cognome . "<br>";
        echo "media: " . $user->media . "<br>";
        echo "<hr>";
    }

    $stmt->closeCursor();
} catch (PDOException $e) {
    echo "A DB error occurred. Please try again later.";
}
?>
