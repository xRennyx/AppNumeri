<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

// Recupero tutte le gare per il select
$gare = $db->query("SELECT * FROM gara ORDER BY data_gara DESC");

// Variabile risultati
$risultati = [];
$gara_selezionata = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id_gara'])) {
    $id_gara = $_POST['id_gara'];
    $gara_selezionata = $db->query("SELECT nome_gara FROM gara WHERE id_gara = $id_gara")->fetch(PDO::FETCH_ASSOC)['nome_gara'];

    // Recupero risultati ordinati per posizione
    $stmt = $db->prepare("
        SELECT r.posizione, r.tempo_gara, r.giro_veloce, p.nome, p.cognome, p.nome_scuderia
        FROM risultato r
        JOIN Piloti p ON r.numero = p.numero
        WHERE r.id_gara = ?
        ORDER BY r.posizione ASC
    ");
    $stmt->execute([$id_gara]);
    $risultati = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Trovo il tempo più veloce in gara
    $stmt2 = $db->prepare("
        SELECT MIN(tempo_gara) as tempo_veloce
        FROM risultato
        WHERE id_gara = ?
    ");
    $stmt2->execute([$id_gara]);
    $tempo_veloce = $stmt2->fetch(PDO::FETCH_ASSOC)['tempo_veloce'];
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Risultati Gara</title>
    <link rel="stylesheet" href="./public/css/risultati.css">
</head>
<body>
<div class="container">
    <h1>Risultati Gara</h1>

    <form method="POST">
        <label>Seleziona Gara</label>
        <select name="id_gara" required>
            <option value="">-- Scegli una gara --</option>
            <?php
            while($g = $gare->fetch(PDO::FETCH_ASSOC)){
                $selected = ($g['id_gara'] ?? '') == ($_POST['id_gara'] ?? '') ? 'selected' : '';
                echo "<option value='{$g['id_gara']}' $selected>{$g['nome_gara']}</option>";
            }
            ?>
        </select>
        <button type="submit" class="btn">Mostra Risultati</button>
    </form>

    <?php if($risultati): ?>
        <h2>Gara: <?= htmlspecialchars($gara_selezionata) ?></h2>
        <p>Tempo più veloce in gara: <?= $tempo_veloce ?? 'N/A' ?></p>

        <table>
            <thead>
            <tr>
                <th>Posizione</th>
                <th>Pilota</th>
                <th>Scuderia</th>
                <th>Tempo Gara</th>
                <th>Giro Veloce</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach($risultati as $r): ?>
                <tr>
                    <td><?= $r['posizione'] ?></td>
                    <td><?= $r['nome'] . ' ' . $r['cognome'] ?></td>
                    <td><?= $r['nome_scuderia'] ?></td>
                    <td><?= $r['tempo_gara'] ?></td>
                    <td><?= $r['giro_veloce'] ? 'Sì' : 'No' ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php elseif($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <div class="messaggio errore">Non ci sono risultati per questa gara.</div>
    <?php endif; ?>

    <br>
    <a href="index.php">Torna alla home</a>
</div>
</body>
</html>
