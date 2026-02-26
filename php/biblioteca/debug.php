<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

// Prendo tutti gli utenti in un colpo solo
$utenti = $db->query(
        "SELECT * FROM utenti ORDER BY numero_tessera ASC"
)->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Biblioteca</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>

<div class="container">

    <h1>Utenti Registrati</h1>

    <!-- Se esistono utenti nella variabile $utenti -->
    <?php if ($utenti): ?>
        <div class="stats">

            <!-- Card: numero totale utenti -->
            <div class="card">
                <div class="numero"><?= count($utenti) ?></div>
                <div class="label">Utenti Totali</div>
            </div>

            <!-- Card: ultima tessera registrata -->
            <div class="card">
                <div class="numero">
                    <!-- end($utenti) prende l’ultimo elemento dell’array -->
                    #<?= str_pad(end($utenti)['numero_tessera'], 4, '0', STR_PAD_LEFT) ?>
                </div>
                <div class="label">Ultima tessera</div>
            </div>

        </div>

        <!-- Tabella utenti -->
        <table>

            <!-- Intestazione colonne -->
            <tr>
                <th>Tessera</th>
                <th>Nome</th>
                <th>Cognome</th>
                <th>Data</th>
            </tr>

            <!-- Ciclo che stampa ogni utente -->
            <?php foreach ($utenti as $u): ?>
                <tr>
                    <td>#<?= str_pad($u['numero_tessera'], 4, '0', STR_PAD_LEFT) ?></td>

                    <!-- htmlspecialchars evita problemi di sicurezza (XSS) -->
                    <td><?= htmlspecialchars($u['nome']) ?></td>
                    <td><?= htmlspecialchars($u['cognome']) ?></td>

                    <!-- Formattazione data in formato leggibile -->
                    <td><?= date('d/m/Y', strtotime($u['data_iscrizione'])) ?></td>
                </tr>
            <?php endforeach; ?>

        </table>

    <?php else: ?>
        <!-- Messaggio se non ci sono utenti -->
        <div class="no-data">
            <p>Nessun utente registrato</p>
            <a href="registrazione.php" class="btn">Registra il primo</a>
        </div>
    <?php endif; ?>

    <!-- Link per tornare alla home -->
    <a href="index.php" class="back">Torna alla home</a>

</div>

<!-- Script JavaScript (debug o funzioni extra) -->
<script src="./public/javascript/debug.js"></script>

</body>
</html>