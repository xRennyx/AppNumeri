<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

$stato = '';

if($_GET){
    $codice = $_GET['codice'];

    $stmt = $db->prepare("SELECT * FROM Plico WHERE codice=?");
    $stmt->execute([$codice]);
    $p = $stmt->fetch(PDO::FETCH_ASSOC);

    if(!$p['data_spedizione']) $stato = "In partenza";
    elseif(!$p['data_ritiro']) $stato = "In transito";
    else $stato = "Ritirato";
}
?>

<form>
    Codice: <input name="codice">
    <button>Controlla</button>
</form>

<?= $stato ?>
