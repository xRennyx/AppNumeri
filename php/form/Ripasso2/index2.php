<?php
$citta=[
    "Roma",
    "Milano",
    "Torino"
];
$cibi=[
    "Pizza",
    "Sushi",
    "Kebab"
];
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
<form method="POST" action="elabora2.php">
    <label>Nome</label>
    <input type="text" name="nome">
    <label>Cognome</label>
    <input type="text" name="cognome">
    <label>Email</label>
    <input type="email" name="email">
    <label>Password</label>
    <input type="password" name="password">
    <label>Età</label>
    <input type="number" name="eta">
    <label>Sesso</label>
    <input type="radio" name="sesso" value="Maschio">Maschio
    <input type="radio" name="sesso" value="Femmina">Femmina
    <label>Squadra preferita</label>
    <input type="checkbox" name="squadra[]" value="Inter">Inter
    <input type="checkbox" name="squadra[]" value="Milan">Milan
    <input type="checkbox" name="squadra[]" value="Juventus">Juventus
    <label>Città</label>
    <select name="citta">
    <?php foreach($citta as $value): ?>
    <option value="<?=$value?>"> <?=$value?> </option>
    <?php endforeach; ?>
        </select>
    <label>Cibi</label>
    <select name="cibi[]" multiple>
    <?php foreach($cibi as $value): ?>
        <option value="<?=$value?>"> <?=$value?> </option>
    <?php endforeach; ?>
    </select>
    <button type="submit">Invia</button>
</form>
</body>
</html>
