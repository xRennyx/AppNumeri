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
