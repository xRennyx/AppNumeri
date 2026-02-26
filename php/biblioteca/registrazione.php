<?php
// Importo la classe per la connessione al database
require './configuration/dbConf.php';

// Carico il file di configurazione (dsn, username, password, opzioni)
$config = require './configuration/dbConfig.php';

// Creo la connessione al database tramite il metodo statico getDB()
$db = dbConf::getDB($config);

// Variabili per messaggio di feedback (successo o errore)
$msg = '';
$tipo = '';

// Controllo se il form è stato inviato (metodo POST)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recupero i dati dal form
    // trim() serve per eliminare eventuali spazi prima e dopo il testo
    $nome = trim($_POST['nome']);
    $cognome = trim($_POST['cognome']);
    $password = $_POST['password'];
    $data = $_POST['data_iscrizione'];

    // Controllo che tutti i campi siano compilati
    if (!$nome || !$cognome || !$password || !$data) {

        // Se manca qualcosa mostro errore
        $msg = "Compila tutti i campi";
        $tipo = "errore";

    } else {

        // Ottengo il numero tessera più alto presente nel database
        // fetchColumn() restituisce direttamente il valore della prima colonna
        $numero = $db->query("SELECT MAX(numero_tessera) FROM utenti")
                ->fetchColumn();

        // Se esiste già un numero, incremento di 1
        // Se non esiste (tabella vuota), parto da 1
        $numero = $numero ? $numero + 1 : 1;

        // Creo l'hash della password per sicurezza
        // PASSWORD_DEFAULT usa l'algoritmo più sicuro disponibile
        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Preparo la query di inserimento (prepared statement)
        // I ? sono segnaposto per evitare SQL injection
        $stmt = $db->prepare(
                "INSERT INTO utenti 
            (numero_tessera, nome, cognome, data_iscrizione, password_hash) 
            VALUES (?, ?, ?, ?, ?)"
        );

        // Eseguo la query passando i valori nell'ordine corretto
        if ($stmt->execute([$numero, $nome, $cognome, $data, $hash])) {

            // Se l'inserimento va a buon fine
            $msg = "Utente registrato correttamente";
            $tipo = "successo";

        } else {

            // Se qualcosa va storto
            $msg = "Errore registrazione";
            $tipo = "errore";
        }
    }
}
?>

<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <!-- Titolo della pagina -->
    <title>Registrazione</title>

    <!-- Collegamento al file CSS -->
    <link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
<div class="container">

    <!-- Titolo principale -->
    <h1>Registrazione Utente</h1>

    <!-- Mostra il messaggio solo se esiste -->
    <?php if ($msg): ?>
        <!-- Classe dinamica: successo o errore -->
        <div class="messaggio <?= $tipo ?>">
            <?= $msg ?>
        </div>
    <?php endif; ?>

    <!-- Form inviato con metodo POST -->
    <form method="post">

        <!-- Campo Nome -->
        <label>Nome *</label>
        <input type="text" name="nome" required>

        <!-- Campo Cognome -->
        <label>Cognome *</label>
        <input type="text" name="cognome" required>

        <!-- Campo Data -->
        <label>Data Iscrizione *</label>
        <input type="date" name="data_iscrizione" required>

        <!-- Campo Password -->
        <label>Password *</label>
        <input type="password" name="password" required>

        <br><br>

        <!-- Pulsante invio -->
        <button type="submit" class="btn">Registra</button>

        <!-- Pulsante reset -->
        <button type="reset" class="btn-secondario">Reset</button>

    </form>

    <br>

    <!-- Link per tornare alla home -->
    <a href="index.php">Torna alla home</a>

</div>
</body>
</html>