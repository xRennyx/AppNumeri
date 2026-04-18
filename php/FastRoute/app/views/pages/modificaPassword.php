<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

session_start();

$msg = '';
$tipo = '';

if(!isset($_SESSION['user'])){
    die("Devi fare login prima");
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['cambia'])){
        $pass = $_POST['password'];

        // controllo password
        if(!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/", $pass)){
            $msg = "Password non valida";
            $tipo = "errore";
        } else {

            $hash = password_hash($pass, PASSWORD_DEFAULT);

            $stmt = $db->prepare("UPDATE personale SET password=? WHERE id=?");

            if($stmt->execute([$hash, $_SESSION['user']])){
                $msg = "Password aggiornata";
                $tipo = "successo";
            } else {
                $msg = "Errore aggiornamento";
                $tipo = "errore";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cambia Password</title>
</head>
<body>

<h1>Modifica Password</h1>

<?php if($msg): ?>
    <p><b><?= $msg ?></b></p>
<?php endif; ?>

<form method="POST">
    Nuova password <input type="password" name="password" required><br><br>
    <button name="cambia">Cambia Password</button>
</form>

<br>
<a href="login.php">Torna al login</a>

</body>
</html>
