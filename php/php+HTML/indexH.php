<?php
#server side, questa parte viene eseguita dal server
$var='Buongiorno';
$array=['Informatica', 'TPSIT', 'Sistemi', 'GPOI'];
$var2=5;
$var3='Giusto';
$var4='Sbagliato';
$var5=0;
$msg='Questo è un messaggio per Javascript';
$studenti=[
        [   'nome'=>'Ciro',
            'cognome'=>'Immobile',
            'media'=>8,
            'classe'=>'Lazio'
        ],
        [   'nome'=>'Pio',
            'cognome'=>'Esposito',
            'media'=>10,
            'classe'=>'Inter'

        ],
        [   'nome'=>'Luis',
            'cognome'=>'Openda',
            'media'=>5,
            'classe'=>'Juventus'

        ]
]#studenti array che contiene array assocciativi
?>
<!-- server side non esiste nel browser passa solo HTML php non visualizzabile -->
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="mystyle.css" rel="stylesheet">
    <title>Documento</title>
</head>
<body>
<p>Ciao</p>
<p><?php echo $var ?></p>
<p><?= $var ?></p> <!-- forma compatta, il server sostituisce $var col suo valore al browser -->
<?php foreach ($array as $item):?> <!-- ?= solo valore variabile istruzioni ?php -->
<hr>
<p><?= $item ?></p>
<?php endforeach; ?>
<?php if($var2==5):?>
<h1><?=$var3 ?></h1>
<?php else: ?>
    <h1><?=$var4 ?></h1>
<?php endif; ?>
<button id="mybutton">Premi</button>
<script> message=<?= json_encode($msg) ?></script>
<script src="interaction.js"></script>
<table>
    <thead>
    <tr>
        <?php foreach (array_keys($studenti[0]) as $chiave): ?>
            <th><?= ucfirst($chiave) ?></th>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($studenti as $studente): ?>
        <tr>
            <?php foreach ($studente as $campo): ?>
                <td><?= $campo ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</table>
<?php while($var5<5):?>
<a><?= $var5++ ?></a>
<?php endwhile; ?>
<footer>&copy; 2007-2026 Francis S.r.l | Privacy and reserver</footer>
</body>
</html>
