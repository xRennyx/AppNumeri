<?php
// Definizione della classe dbConf
// Questa classe serve per gestire la connessione al database
class dbConf
{
    // Variabile statica privata che conterrà l'oggetto PDO
    // "static" significa che appartiene alla classe e non agli oggetti
    // "PDO" indica il tipo di dato (connessione al database)
    private static PDO $db;
    // Metodo pubblico statico per ottenere la connessione al database
    // Riceve un array $config (quello del file di configurazione)
    // Restituisce un oggetto di tipo PDO
    public static function getDB(array $config): PDO
    {
        // Creazione della nuova connessione PDO
        // Usa i dati contenuti nell'array $config:
        // - dsn → tipo e nome database
        // - username → utente database
        // - password → password database
        // - options → opzioni avanzate (errori, fetch mode, ecc.)
        self::$db = new PDO(
            $config['dsn'],
            $config['username'],
            $config['password'],
            $config['options']
        );
        // Restituisce la connessione creata
        return self::$db;
    }
}
