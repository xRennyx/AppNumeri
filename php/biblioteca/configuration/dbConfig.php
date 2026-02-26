<?php
// Questo file restituisce un array di configurazione
// Serve per salvare i dati di connessione al database in un file separato
// È buona pratica tenerlo separato per motivi di sicurezza e organizzazione
return [
    // DSN (Data Source Name)
    // Specifica:
    // - tipo di database (mysql)
    // - host (localhost = server locale)
    // - nome del database (francesco_renesto_biblioteca)
    // - charset (utf8mb4 = supporta tutti i caratteri, anche emoji)
    'dsn' => 'mysql:host=localhost;dbname=francesco_renesto_biblioteca;charset=utf8mb4',
    // Username per accedere al database
    'username' => 'root', //(francesco_renesto)
    // Password dell'utente del database
    'password' => "", //(spremente.proseguivo.)
    // Opzioni avanzate di configurazione per PDO
    'options' => [
        // Imposta la modalità di recupero dei dati
        // FETCH_OBJ significa che le righe del database
        // verranno restituite come oggetti (es: $utente->nome)
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        // Imposta la gestione degli errori
        // ERRMODE_EXCEPTION fa sì che gli errori SQL
        // vengano lanciati come eccezioni (try/catch)
        // È la modalità consigliata perché più sicura e controllabile
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];
