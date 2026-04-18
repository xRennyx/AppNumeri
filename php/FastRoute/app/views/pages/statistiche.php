<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

$tot = '';

if($_GET){
    $giorni = $_GET['giorni'];

    $stmt = $db->prepare("
        SELECT COUNT(*) as tot 
        FROM Plico 
        WHERE data_ritiro >= NOW() - INTERVAL ? DAY
    ");
    $stmt->execute([$giorni]);
    $tot = $stmt->fetch()['tot'];
}
?>

<form>
    Giorni: <input name="giorni">
    <button>Calcola</button>
</form>

Totale: <?= $tot ?>
