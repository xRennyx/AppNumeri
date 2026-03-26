<?php

if($_SERVER["REQUEST_METHOD"] != "POST"){
    echo "Non puoi accedere a questa pagina";
    exit();
}

// Dati dal form
$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";
$area = $_POST["area"] ?? "";
$hash = password_hash($_POST["password"] ?? "", PASSWORD_DEFAULT);
$hobby = $_POST["hobby"] ?? [];
$sesso = $_POST["sesso"] ?? "";
$eta = $_POST["eta"] ?? "";
$cibi = $_POST["cibi"] ?? [];
$citta = $_POST["citta"] ?? "";

// ARRAY ASSOCIATIVO (LO TENIAMO)
$dati = [
    "nome" => $nome,
    "email" => $email,
    "password" => $hash,
    "hobby" => implode(", ", $hobby),
    "sesso" => $sesso,
    "eta" => $eta,
    "cibi" => implode(", ", $cibi),
    "citta" => $citta,
    "area" => $area
];

// Stringa da salvare
$str = implode("|", $dati) . "\n";

// Salva file
file_put_contents("dati.txt", $str, FILE_APPEND);

// Legge file
$righe = file("dati.txt");

?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Dati</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<table>
    <!-- intestazione -->
    <tr>
        <?php foreach ($dati as $key => $value): ?>
            <th><?= $key ?></th>
        <?php endforeach; ?>
    </tr>

    <!-- righe -->
    <?php foreach ($righe as $riga): ?>
        <tr>
            <?php
            $colonne = explode("|", $riga);

            foreach ($colonne as $colonna): ?>
                <td><?= $colonna ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>

</table>

</body>
</html>
