<?php
require './configuration/dbConf.php';
$config = require './configuration/dbConfig.php';
$db = dbConf::getDB($config);

$msg = '';

function esegui($db, $sql, $params, &$msg){
    try {
        $stmt = $db->prepare($sql);
        $stmt->execute($params);
        $msg = "Operazione riuscita";
    } catch (PDOException $e) {
        if ($e->getCode() == 23000) {
            $msg = "️ Associazione già esistente";
        } else {
            $msg = "Errore: " . $e->getMessage();
        }
    }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $cf = $_POST['cf_cliente'] ?? null;
    $mat = $_POST['matricola'] ?? null;

    if ($cf && $mat) {

        $check = "SELECT COUNT(*) FROM Incarica 
                  WHERE cf_cliente = ? AND matricola = ?";

        $stmt = $db->prepare($check);
        $stmt->execute([$cf, $mat]);

        if ($stmt->fetchColumn() == 0) {

            $sql = "INSERT INTO Incarica (cf_cliente, matricola, data_accettazione)
                    VALUES (?, ?, NOW())";

            esegui($db, $sql, [$cf, $mat], $msg);

        } else {
            $msg = "Questo cliente è già assegnato a questo corriere";
        }
    } else {
        $msg = "Dati mancanti";
    }
}

$clienti = $db->query("SELECT * FROM Cliente_Mittente")
    ->fetchAll(PDO::FETCH_ASSOC);

$corrieri = $db->query("SELECT * FROM Corriere")
    ->fetchAll(PDO::FETCH_ASSOC);
?>

<form method="POST">
    Cliente:
    <select name="cf_cliente">
        <?php foreach ($clienti as $c): ?>
            <option value="<?= htmlspecialchars($c['cf']) ?>">
                <?= htmlspecialchars($c['nome']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    Corriere:
    <select name="matricola">
        <?php foreach ($corrieri as $c): ?>
            <option value="<?= htmlspecialchars($c['matricola']) ?>">
                <?= htmlspecialchars($c['nome']) ?>
            </option>
        <?php endforeach; ?>
    </select>

    <button type="submit">Accetta Plico</button>
</form>

<p><?= $msg ?></p>