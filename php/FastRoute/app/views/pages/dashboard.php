<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';

$db = dbConf::getDB($config);

$stmt = $db->query("SELECT * FROM Plico");
$plichi = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<h2>Tutti i plichi</h2>

<table border="1">
    <tr>
        <th>Codice</th>
        <th>Spedizione</th>
        <th>Ritiro</th>
    </tr>

    <?php foreach ($plichi as $p): ?>
        <tr>
            <td><?= htmlspecialchars($p['codice']) ?></td>
            <td><?= htmlspecialchars($p['data_spedizione']) ?></td>
            <td><?= htmlspecialchars($p['data_ritiro']) ?></td>
        </tr>
    <?php endforeach; ?>

</table>