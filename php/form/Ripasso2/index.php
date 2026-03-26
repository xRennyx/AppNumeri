<?php

$citta=[
    'Milano',
    'Roma',
    'Napoli',
    'Lendinara'
];

$cibi=[
    'Pizza',
    'Pollo',
    'MECK',
    'Riso'
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
<form method="post" action="elabora.php">
    <label>Nome:</label>
    <input type="text" name="nome" required><br><br>
    <label>E-mail:</label>
    <input type="email" name="email" required><br><br>
    <label>Password:</label>
    <input type="password" name="password" required><br><br>
    <label>Eta:</label>
    <input type="number" name="eta" min="1" required><br><br>
    <label>Sesso:</label>
    <input type="radio" name="sesso" value="m">m
    <input type="radio" name="sesso" value="f">f<br><br>
    <label>Hobby:</label>
    <input type="checkbox" name="hobby[]" value="calcio">Calcio
    <input type="checkbox" name="hobby[]" value="golf">Golf
    <input type="checkbox" name="hobby[]" value="tennis">Tennis<br><br>
    <label>Citta:</label>
    <select name="citta">
        <?php foreach($citta as $value): ?>
            <option value="<?= $value ?>"><?= $value?></option>
        <?php endforeach; ?>
    </select><br><br>
    <label>Cibi:</label>
    <select name="cibi[]"  size="2" multiple>
        <?php foreach($cibi as $value): ?>
            <option value="<?=$value?>"><?=$value?></option>
        <?php endforeach;?>
    </select><br><br>
    <label>Parlaci di Tommaso...</label>
    <textarea name="area" rows="2"></textarea><br><br>
    <button type="submit">Invia</button>
</form>
</body>
</html>
