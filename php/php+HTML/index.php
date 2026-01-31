<?php
$db = new PDO("mysql:host=192.168.60.144;dbname=francesco_renesto_studenti;charset=utf8",
    "francesco_renesto",
    "spremente.proseguivo.",
    [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, //1. Tuple restituiti come oggetti
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, //2. Gestisce le eccezioni
    ]); //3 stringhe e 1 array assocciativo

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