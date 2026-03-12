<?php
// index.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Campionato Automobilistico</title>
    <link rel="stylesheet" href="./public/css/style.css">
</head>

<body>

<header>
    <h1>Gestione Campionato Automobilistico</h1>
</header>

<div class="container">
    <!-- Inserimento e registrazione -->
    <div class="card">
        <h2>Inserimento Dati</h2>
        <a href="registrazione.php">Apri Registrazione</a>
    </div>

    <!-- Classifiche -->
    <div class="card">
        <h2>Classifiche</h2>
        <a href="classificaPiloti.php">Classifica Piloti</a>
        <a href="classificaSqaudre.php">Classifica Squadre</a>
    </div>

    <!-- Risultati gare -->
    <div class="card">
        <h2>Risultati Gare</h2>
        <a href="RisultatiGara.php">Visualizza Risultati</a>
    </div>
</div>

</body>
</html>