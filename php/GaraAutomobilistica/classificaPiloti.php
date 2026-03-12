<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

// Funzione per calcolare punti in base alla posizione
function punti($posizione){
    switch($posizione){
        case 1: return 25;
        case 2: return 18;
        case 3: return 15;
        case 4: return 12;
        case 5: return 10;
        case 6: return 8;
        case 7: return 6;
        case 8: return 4;
        case 9: return 2;
        case 10: return 1;
        default: return 0;
    }
}

// Recupero classifica piloti
$query = $db->query("
    SELECT p.numero, p.nome, p.cognome, p.nome_scuderia, SUM(
        CASE 
            WHEN r.posizione=1 THEN 25
            WHEN r.posizione=2 THEN 18
            WHEN r.posizione=3 THEN 15
            WHEN r.posizione=4 THEN 12
            WHEN r.posizione=5 THEN 10
            WHEN r.posizione=6 THEN 8
            WHEN r.posizione=7 THEN 6
            WHEN r.posizione=8 THEN 4
            WHEN r.posizione=9 THEN 2
            WHEN r.posizione=10 THEN 1
            ELSE 0
        END
    ) AS punti
    FROM Piloti p
    LEFT JOIN risultato r ON p.numero = r.numero
    GROUP BY p.numero
    ORDER BY punti DESC
");
$piloti = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Classifica Piloti</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<div class="container">
    <h1>Classifica Piloti</h1>
    <table>
        <thead>
        <tr>
            <th>Posizione</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Scuderia</th>
            <th>Punti</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $posizione = 1;
        foreach($piloti as $p){
            echo "<tr>
                        <td>{$posizione}</td>
                        <td>{$p['nome']}</td>
                        <td>{$p['cognome']}</td>
                        <td>{$p['nome_scuderia']}</td>
                        <td>{$p['punti']}</td>
                      </tr>";
            $posizione++;
        }
        ?>
        </tbody>
    </table>
    <br>
    <a href="index.php">Torna alla home</a>
</div>
</body>
</html>
