<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

$msg = '';

if($_POST){
    $codice = $_POST['codice'];
    $mat = $_POST['matricola'];

    $stmt = $db->prepare("UPDATE Plico SET data_spedizione=NOW(), matricola_corriere=? WHERE codice=?");

    if($stmt->execute([$mat, $codice])){
        $msg = "Spedito";
    } else {
        $msg = "Errore";
    }
}

$plichi = $db->query("SELECT * FROM Plico")->fetchAll(PDO::FETCH_ASSOC);
$corrieri = $db->query("SELECT * FROM Corriere")->fetchAll(PDO::FETCH_ASSOC);
?>

<form method="POST">
    Plico:
    <select name="codice">
        <?php foreach($plichi as $p) echo "<option>{$p['codice']}</option>"; ?>
    </select>

    Corriere:
    <select name="matricola">
        <?php foreach($corrieri as $c) echo "<option value='{$c['matricola']}'>{$c['nome']}</option>"; ?>
    </select>

    <button>Spedisci</button>
</form>

<?= $msg ?>
