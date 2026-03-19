<?php
$nome = $_POST['nome'];
$cognome = $_POST['cognome'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$sesso = $_POST['sesso'];
$corsi=$_POST['corsi'] ?? [];
if (!is_array($corsi)) {
    $corsi = [$corsi];
}
$citta=$_POST['citta'];
$lingua=$_POST['lingua'];
$messaggio=$_POST['area'];

$nuovo_utente = [
    "nome" => $_POST['nome'] ?? '',
    "cognome" => $_POST['cognome'] ?? '',
    "email" => $_POST['email'] ?? '',
    "password" => $_POST['password'] ?? '',
    "sesso" => $_POST['sesso'] ?? '',
    "corsi" => $_POST['corsi'] ?? [],
    "citta" => $_POST['citta'] ?? '',
    "lingue" => $_POST['lingua'] ?? [],
    "messaggio" => $_POST['area'] ?? ''
];
$utenti[] = $nuovo_utente;
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista Utenti</title>
</head>
<body>
<h1>Utenti Registrati</h1>

<table border="1">
    <!-- intestazione -->
    <tr>
        <?php foreach ($utenti[0] as $key => $value): ?>
            <th><?= htmlspecialchars($key) ?></th>
        <?php endforeach; ?>
    </tr>

    <!-- dati utenti -->
    <?php foreach ($utenti as $utente): ?>
        <tr>
            <?php foreach ($utente as $valore): ?>
                <td>
                    <?php
                    if (is_array($valore)) {
                        echo htmlspecialchars(implode(", ", $valore));
                    } else {
                        echo htmlspecialchars($valore);
                    }
                    ?>
                </td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
