<?php
$nCorsi=$_POST ["Ncorsi"];
$corsi=['Sistemi e reti',
'Robotica',
'Contabilità',
'Meccatronica',
'Chimica',
'Statistica',
'Matematica',
'Informatica',
'Marketing',
'Economia Politica'];
$professori=[];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selezione Corsi</title>
</head>
<body>
<form method="POST" action="riepilogo.php">
<?php
for ($i = 0; $i < $nCorsi; $i++) {
    echo '<div style="
        width:1600px;
        height:80px;
        background-color:white;
        border:2px solid black;
        margin:10px;
        display:inline-block;
        box-sizing:border-box;
    "> <select name="dropdown" style="width:300px; height:40px;">
            <option value="">Seleziona...</option>
            <option value="1">Opzione 1</option>
            <option value="2">Opzione 2</option>
            <option value="3">Opzione 3</option>
        </select>

        <!-- Listbox multipla a destra -->
         <select name="listbox" multiple style="width:400px; height:60px;">
            <?php foreach ($corsi as $id => $nome): ?>
                <option value="<?php echo $id; ?>">
                    <?php echo $nome; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </div>';
}?>
    <button type="submit">Invia</button>
</form>
</body>
</html>