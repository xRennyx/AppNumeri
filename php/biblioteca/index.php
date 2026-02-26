<?php
date_default_timezone_set('Europe/Rome');

// Data e ora in formato leggibile
$dataOra = date("d/m/Y H:i");
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./public/css/style.css">
    <title>Biblioteca</title>
</head>
<body>
<div class="container">
    <h1>Biblioteca Comunale</h1>
    <p class="sottotitolo">Sistema di gestione utenti</p>
    <div class="datetime">
        <p><?= $dataOra ?></p>
    </div>
    <a href="registrazione.php" class="btn">Registra un nuovo utente</a>
    <div class="debug">
        <a href="debug.php">Visualizza utenti</a>
    </div>
</div>
<script src="public/javascript/script.js"></script>
</body>
</html>
