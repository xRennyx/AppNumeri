<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

session_start();

$msg = '';
$tipo = '';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

    if(isset($_POST['login'])){
        $email = trim($_POST['email']);
        $password = $_POST['password'];

        if($email && $password){
            $stmt = $db->prepare("SELECT * FROM personale WHERE email=?");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if($user && password_verify($password, $user['password'])){
                $_SESSION['user'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                $msg = "Login effettuato";
                $tipo = "successo";
            } else {
                $msg = "Credenziali errate";
                $tipo = "errore";
            }
        } else {
            $msg = "Compila tutti i campi";
            $tipo = "errore";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h1>Login Personale</h1>

<?php if($msg): ?>
    <p><b><?= $msg ?></b></p>
<?php endif; ?>

<form method="POST">
    Email <input type="email" name="email" required><br>
    Password <input type="password" name="password" required><br><br>

    <button name="login">Login</button>
</form>

<br>

<!-- Pulsante modifica password -->
<form action="modificaPassword.php">
    <button>Modifica Password</button>
</form>

</body>
</html>

