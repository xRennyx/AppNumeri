<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

// Variabili per messaggi
$msg = '';
$tipo = '';

// Funzione generica per inserire dati usando prepared statements
function inserisci($db, $sql, $params, &$msg, &$tipo, $successo_msg){
    $stmt = $db->prepare($sql);
    if($stmt->execute($params)){
        $msg = $successo_msg;
        $tipo = 'successo';
    } else {
        $msg = "Errore: " . implode(' - ', $stmt->errorInfo());
        $tipo = 'errore';
    }
}

// Controllo quale form è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // CASE AUTOMOBILISTICHE
    if(isset($_POST['ins_casa'])){
        $nome = trim($_POST['nome_scuderia']);
        $colore = trim($_POST['colore']);
        $livrea = trim($_POST['livrea']);
        if($nome && $colore && $livrea){
            $sql = "INSERT INTO Case_Automobilistiche(nome_scuderia, colore, livrea) VALUES (?, ?, ?)";
            inserisci($db, $sql, [$nome, $colore, $livrea], $msg, $tipo, "Casa inserita con successo");
        } else {
            $msg = "Compila tutti i campi";
            $tipo = "errore";
        }
    }

    // PILOTI
    if(isset($_POST['ins_pilota'])){
        $nome = trim($_POST['nome']);
        $cognome = trim($_POST['cognome']);
        $nazionalita = trim($_POST['nazionalita']);
        $numero = trim($_POST['numero']);
        $scuderia = $_POST['nome_scuderia'];
        if($nome && $cognome && $nazionalita && $numero && $scuderia){
            $sql = "INSERT INTO Piloti(nome, cognome, nazionalita, numero, nome_scuderia) VALUES (?, ?, ?, ?, ?)";
            inserisci($db, $sql, [$nome, $cognome, $nazionalita, $numero, $scuderia], $msg, $tipo, "Pilota inserito con successo");
        } else {
            $msg = "Compila tutti i campi";
            $tipo = "errore";
        }
    }

    // GARA
    if(isset($_POST['ins_gara'])){
        $nome = trim($_POST['nome_gara']);
        $circuito = trim($_POST['circuito']);
        $data = $_POST['data'];
        if($nome && $data){
            $sql = "INSERT INTO gara(nome_gara, circuito, data_gara) VALUES (?, ?, ?)";
            inserisci($db, $sql, [$nome, $circuito, $data], $msg, $tipo, "Gara inserita con successo");
        } else {
            $msg = "Compila tutti i campi";
            $tipo = "errore";
        }
    }

    // RISULTATO
    if(isset($_POST['ins_risultato'])){
        $numero = $_POST['numero'];
        $id_gara = $_POST['id_gara'];
        $posizione = $_POST['posizione'];
        $tempo = $_POST['tempo'];
        $giro = $_POST['giro_veloce'];
        if($numero && $id_gara && $posizione){
            $sql = "INSERT INTO risultato(numero, id_gara, posizione, tempo_gara, giro_veloce) VALUES (?, ?, ?, ?, ?)";
            inserisci($db, $sql, [$numero, $id_gara, $posizione, $tempo, $giro], $msg, $tipo, "Risultato inserito con successo");
        } else {
            $msg = "Compila tutti i campi obbligatori";
            $tipo = "errore";
        }
    }
}

// Query per riempire i select
$case = $db->query("SELECT * FROM Case_Automobilistiche");
$piloti = $db->query("SELECT * FROM Piloti");
$gare = $db->query("SELECT * FROM gara");
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Registrazione Campionato</title>
    <link rel="stylesheet" href="./public/css/style2.css">
</head>
<body>
<div class="container">

    <h1>Gestione Campionato Automobilistico</h1>

    <?php if($msg): ?>
        <div class="messaggio <?= $tipo ?>"><?= $msg ?></div>
    <?php endif; ?>

    <!-- FORM CASE -->
    <form method="POST">
        <h2>Inserisci Casa Automobilistica</h2>
        <label>Nome Scuderia *</label>
        <input type="text" name="nome_scuderia" required>
        <label>Colore *</label>
        <input type="text" name="colore" required>
        <label>Livrea *</label>
        <input type="text" name="livrea" required>
        <button type="submit" name="ins_casa" class="btn">Inserisci</button>
        <button type="reset" class="btn-secondario">Reset</button>
    </form>

    <!-- FORM PILOTI -->
    <form method="POST">
        <h2>Inserisci Pilota</h2>
        <label>Nome *</label>
        <input type="text" name="nome" required>
        <label>Cognome *</label>
        <input type="text" name="cognome" required>
        <label>Nazionalità *</label>
        <input type="text" name="nazionalita" required>
        <label>Numero *</label>
        <input type="number" name="numero" required>
        <label>Scuderia *</label>
        <select name="nome_scuderia">
            <?php
            $case2 = $db->query("SELECT * FROM Case_Automobilistiche");
            while($c = $case2->fetch(PDO::FETCH_ASSOC)){
                echo "<option value='{$c['nome_scuderia']}'>{$c['nome_scuderia']}</option>";
            }
            ?>
        </select>
        <button type="submit" name="ins_pilota" class="btn">Inserisci</button>
        <button type="reset" class="btn-secondario">Reset</button>
    </form>

    <!-- FORM GARA -->
    <form method="POST">
        <h2>Inserisci Gara</h2>
        <label>Nome Gara *</label>
        <input type="text" name="nome_gara" required>
        <label>Circuito</label>
        <input type="text" name="circuito">
        <label>Data *</label>
        <input type="date" name="data" required>
        <button type="submit" name="ins_gara" class="btn">Inserisci</button>
        <button type="reset" class="btn-secondario">Reset</button>
    </form>

    <!-- FORM RISULTATO -->
    <form method="POST">
        <h2>Inserisci Risultato Gara</h2>
        <label>Pilota *</label>
        <select name="numero">
            <?php
            $piloti2 = $db->query("SELECT * FROM Piloti");
            while($p = $piloti2->fetch(PDO::FETCH_ASSOC)){
                echo "<option value='{$p['numero']}'>{$p['nome']} {$p['cognome']}</option>";
            }
            ?>
        </select>
        <label>Gara *</label>
        <select name="id_gara">
            <?php
            $gare2 = $db->query("SELECT * FROM gara");
            while($g = $gare2->fetch(PDO::FETCH_ASSOC)){
                echo "<option value='{$g['id_gara']}'>{$g['nome_gara']}</option>";
            }
            ?>
        </select>
        <label>Posizione *</label>
        <input type="number" name="posizione" required>
        <label>Tempo Gara</label>
        <input type="time" name="tempo">
        <label>Giro Veloce (1=si)</label>
        <input type="number" name="giro_veloce">
        <button type="submit" name="ins_risultato" class="btn">Inserisci</button>
        <button type="reset" class="btn-secondario">Reset</button>
    </form>

    <br>
    <a href="index.php">Torna alla home</a>
</div>
</body>
</html>