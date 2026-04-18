<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

$msg = '';

if($_POST){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $messaggio = $_POST['messaggio'];

    $stmt = $db->prepare("
        INSERT INTO contatti(nome, email, messaggio)
        VALUES (?, ?, ?)
    ");

    if($stmt->execute([$nome, $email, $messaggio])){
        $msg = "Messaggio inviato";
    } else {
        $msg = "Errore";
    }
}
?>

<form method="POST">
    Nome <input name="nome"><br>
    Email <input name="email"><br>
    Messaggio <textarea name="messaggio"></textarea><br>
    <button>Invia</button>
</form>

<?= $msg ?>
