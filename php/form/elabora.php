<?php
$nome=$_POST ["nome"] ?? "";//Prende il contenuto della casella testale controlla se c'è qualcosa dentro se non c'è lascia vuoto, _POST variabile superglobal (array assocciativo)
//Contiene i dati che sono stati inseriti nel form col metodo POST legge i dati attraverso i nomi dei tag (name="nome")
$cognome=$_POST ["cognome"] ?? "";
$email=$_POST ["email"] ?? "";
$password=$_POST ["password"] ?? "";
$eta=$_POST ["eta"] ?? "";
$sesso=$_POST ["sesso"] ?? "";
$corsi=$_POST ["corsi"] ?? [];
$citta=$_POST ["citta"] ?? "";
$lingua=$_POST ["lingua"] ?? [];
$area=$_POST ["area"] ?? "";

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Nome: <?= $nome ?></p>
<p>Cognome: <?= $cognome ?></p>
<p>Email: <?= $email ?></p>
<p>Password: <?= $password ?></p>
<p>Età: <?= $eta ?></p><br>
<p>Sesso: <?= $sesso ?></p><br>
<p>Corsi: <?= implode(',', $corsi) ?></p><br>
<p>Città: <?= $citta ?></p><br>
<p>Lingua: <?= implode(',', $lingua) ?></p><br>
<p>Testo: <?= $area ?></p><br>
</body>
</html>