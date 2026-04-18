<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

$msg = '';

if($_POST){
    $codice = $_POST['codice'];

    $stmt = $db->prepare("UPDATE Plico SET data_ritiro=NOW() WHERE codice=?");

    if($stmt->execute([$codice])){
        $msg = "Ritirato";

        // punti fedeltà
        $db->query("
            UPDATE Cliente_Mittente c
            JOIN Incarica i ON c.cf = i.cf_cliente
            JOIN Plico p ON p.matricola_corriere = i.matricola_corriere
            SET c.punti_fedelta = c.punti_fedelta + 1
            WHERE p.codice = '$codice'
        ");
    } else {
        $msg = "Errore";
    }
}

$plichi = $db->query("SELECT * FROM Plico")->fetchAll(PDO::FETCH_ASSOC);
?>

<form method="POST">
    <select name="codice">
        <?php foreach($plichi as $p) echo "<option>{$p['codice']}</option>"; ?>
    </select>

    <button>Ritira</button>
</form>

<?= $msg ?>
