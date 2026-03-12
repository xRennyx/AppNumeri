<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

// Calcolo punti per ogni scuderia
$query = $db->query("
    SELECT c.nome_scuderia, SUM(
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
    FROM Case_Automobilistiche c
    LEFT JOIN Piloti p ON c.nome_scuderia = p.nome_scuderia
    LEFT JOIN risultato r ON p.numero = r.numero
    GROUP BY c.nome_scuderia
    ORDER BY punti DESC
");
$squadre = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Classifica Scuderie</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<div class="container">
    <h1>Classifica Scuderie</h1>
    <table>
        <thead>
        <tr>
            <th>Posizione</th>
            <th>Scuderia</th>
            <th>Punti</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $posizione = 1;
        foreach($squadre as $s){
            echo "<tr>
                        <td>{$posizione}</td>
                        <td>{$s['nome_scuderia']}</td>
                        <td>{$s['punti']}</td>
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
