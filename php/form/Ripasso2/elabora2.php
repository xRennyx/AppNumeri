<?php
if($_SERVER["REQUEST_METHOD"]!=="POST")
{
    echo "Errore";
    exit();
}
    $nome=$_POST["nome"] ?? "";
    $cognome=$_POST["cognome"] ?? "";
    $email=$_POST["email"] ?? "";
    $password=password_hash($_POST["password"] ?? "", PASSWORD_DEFAULT);
    $eta=$_POST["eta"] ?? "";
    $sesso=$_POST["sesso"] ?? "";
    $squadra=$_POST["squadra"] ?? [];
    $citta=$_POST["citta"] ?? "";
    $cibo=$_POST["cibi"] ?? [];
    $dati=[
        "nome"=>$nome,
        "cognome"=>$cognome,
        "email"=>$email,
        "password"=>$password,
        "eta"=>$eta,
        "sesso"=>$sesso,
        "squadra"=>implode(",",$squadra),
        "citta"=>$citta,
        "cibi"=>implode(",",$cibo)
];
$str=implode("|", $dati)."\n";
file_put_contents("dati.txt",$str, FILE_APPEND);

$righe=file("dati.txt");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<table>
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
