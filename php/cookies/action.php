<?php
if(isset($_POST['nome'])) // se ho definito nome crea cookie
{
    setcookie(
            'user', //nome coookie
            $_POST['nome'],
            [
                'expires'=>time()+36000, //dura dall'ora attuale + 36000 secondi
                'path'=>'/', //Tutto il dominio
                'secure'=>false, //vai anche in http con true solo https
                'httponly'=>true, // cookies Leggibili solo dagli header http
                'samesite'=>'Lax'
            ]
    );
    $user=$_POST['nome'];
} else{
    $user=$_COOKIE['nome'];
}
//if(isset($_COOKIE['nome']))
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
<p>Ciao <?=$user ?>Questa è la pagina action</p>
<a href="show.php">Vai a Pagina Show</a>
</body>
</html>
