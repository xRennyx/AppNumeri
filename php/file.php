<?php
echo getcwd(); //Mostra la directory dello script
echo "<br>";
echo DIRECTORY_SEPARATOR; //Mostra il separatore di directory che usa il nsotro sistema

echo "<br>";

$path = getcwd();
echo is_file($path.DIRECTORY_SEPARATOR."provaFile.txt") ? "true" : "false"; //true se il file è presente nel path corrente
echo "<br>";
echo is_dir($path.DIRECTORY_SEPARATOR."prova") ? "true" : "false"; //true se esiste la cartella nel path corrente
echo "<br>";

$items = scandir($path.DIRECTORY_SEPARATOR."prova"); //Guarda i file all'interno della cartella prova
echo "<h1> File nella mia directory </h1>";
echo "<ul>";
foreach ($items as $item){
    if($item != "." && $item != ".."){
        echo "<li>".$item. "</li>";
    }
}
echo "</ul>";

$file = fopen("prova.txt", "w"); //Se il file non esiste lo crea. Sovrascrive il file
fwrite($file, "Ciao a tutti");
fclose($file);

$file2 = fopen("prova.txt", "a"); //Aggiunge alla fine del file, non sovrascrive
fwrite($file2, "Ciao a tutti 2");
fclose($file2);

<?php

// Nome del file
$filename = "dati.txt";

/* =========================
   fopen + fwrite + fclose
   ========================= */

// Apriamo il file in modalità scrittura ("w")
$file = fopen($filename, "w");

// Scriviamo una stringa nel file
fwrite($file, "Mario,Rossi,25\n");
fwrite($file, "Luigi,Bianchi,30\n");

// Chiudiamo il file
fclose($file);


/* =========================
   fopen + fgets + fclose
   ========================= */

// Apriamo il file in modalità lettura ("r")
$file = fopen($filename, "r");

// Leggiamo riga per riga
while (($line = fgets($file)) !== false) {

    // Rimuove spazi e a capo
    $line = trim($line);

    // explode: da stringa ad array
    $dati = explode(",", $line);

    echo "Nome: $dati[0], Cognome: $dati[1], Età: $dati[2]<br>";
}

// Chiudiamo il file
fclose($file);


/* =========================
   implode + file_put_contents
   ========================= */

// Creiamo un array
$persona = ["Anna", "Verdi", 28];

// implode: da array a stringa
$stringa = implode(",", $persona);

// Scriviamo nel file (aggiunge senza cancellare)
file_put_contents($filename, $stringa . "\n", FILE_APPEND);


/* =========================
   file_get_contents + explode
   ========================= */

// Leggiamo tutto il file in una volta
$contenuto = file_get_contents($filename);

// Separiamo le righe
$righe = explode("\n", trim($contenuto));

echo "<br><strong>Contenuto completo:</strong><br>";

foreach ($righe as $riga) {
    echo $riga . "<br>";
}

?>
