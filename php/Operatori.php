<?php //dice al server che quello che viene dopo è php

echo 'Operatore Ternario: ';
$x=5;
$risultato=$x>6? 'ok' : 'no ok';
echo''.$risultato;
echo '<br>';
$nome='5F';
echo 'Operatore Coalenscing: '; //va a vederer se una variabile c'è ti dà il risultato sennò se null quello scritto dopo ??
$risultato=$nome ?? 'default';
echo $risultato;
echo '<br>';
echo 'Operatore Spaceship: '; //Confronta quello a sinistra più grande=1 sennò -1 uguali=0
$y=7;
echo $y<=>$x;
echo '<br>';
$stringa='ciao';
$stringa2='CIAO';
$stringa3='ciao mondo';
echo strlen($stringa); //Grandezza stringa
echo '<br>';
echo strrev($stringa); //Inverte stringa
echo '<br>';
echo strtolower($stringa2); //Mette in minuscolo
echo '<br>';
echo strtoupper($stringa); //Mette maiuscolo
echo '<br>';
echo ucfirst($stringa); //Mette grande la prima
echo '<br>';
echo ucwords($stringa3);//mette grande la prima di ogni parola
echo '<br>';
echo trim($stringa3, "o"); //rimuove carattere
$stringa = "  ciao mondo  ";
echo ltrim($stringa); // Rimuove spazi iniziali: "ciao mondo  "
echo rtrim($stringa); // Rimuove spazi finali: "  ciao mondo"
$stringa = "ciao mondo php";
$array = explode(" ", $stringa); // Dividerà per lo spazio
print_r($array); // Array ( [0] => ciao [1] => mondo [2] => php )
$array = ["ciao", "mondo", "php"];
$stringa = implode(" ", $array); // Unisce con uno spazio
echo $stringa; // ciao mondo php
$stringa = "Ciao mondo!";
$stringa = str_replace("mondo", "PHP", $stringa); // Cambia "mondo" con "PHP"
echo $stringa; // Ciao PHP!
$stringa = "Ciao mondo!";
$parte = substr($stringa, 5, 5); // Estrae 5 caratteri a partire dall'indice 5
echo $parte; // mondo
$stringa = "Ciao mondo PHP";
echo strpos($stringa, "mondo"); // Restituisce 5 (posizione della prima occorrenza)
echo strrpos($stringa, "o"); // Restituisce 12 (posizione dell'ultima occorrenza)
$stringa = "Ciao Mondo PHP";
echo strstr($stringa, "Mondo"); // Mondo PHP
echo stristr($stringa, "mondo"); // Mondo PHP (ignora maiuscole/minuscole)
$numero = 123.456;
$stringa = sprintf("Il numero è %.2f", $numero); // Formatta a 2 decimali
echo $stringa; // Il numero è 123.46
$numero = 1234567.891;
echo number_format($numero, 2, '.', ','); // 1,234,567.89
$stringa = "O'Reilly";
echo addslashes($stringa); // O\'Reilly
$stringa = "O\'Reilly";
echo stripslashes($stringa); // O'Reilly


$numero = -5;
echo "abs($numero) = " . abs($numero) . "<br>"; // 5
// ceil() - Arrotonda un numero per eccesso
$numero = 4.3;
echo "ceil($numero) = " . ceil($numero) . "<br>"; // 5
// floor() - Arrotonda un numero per difetto
$numero = 4.7;
echo "floor($numero) = " . floor($numero) . "<br>"; // 4
// round() - Arrotonda un numero al valore più vicino
$numero = 4.5;
echo "round($numero) = " . round($numero) . "<br>"; // 5
// mt_rand() - Genera un numero casuale (migliore della funzione rand())
echo "mt_rand() = " . mt_rand() . "<br>"; // Numero casuale
// rand() - Genera un numero casuale
echo "rand() = " . rand() . "<br>"; // Numero casuale
// min() - Restituisce il valore minimo tra i numeri passati
echo "min(10, 20, 30) = " . min(10, 20, 30) . "<br>"; // 10
// max() - Restituisce il valore massimo tra i numeri passati
echo "max(10, 20, 30) = " . max(10, 20, 30) . "<br>"; // 30
// sqrt() - Calcola la radice quadrata di un numero
$numero = 16;
echo "sqrt($numero) = " . sqrt($numero) . "<br>"; // 4
// pow() - Calcola la potenza di un numero
$base = 2;
$esponente = 3;
echo "pow($base, $esponente) = " . pow($base, $esponente) . "<br>"; // 8
// intdiv() - Esegui una divisione intera (senza decimali)
$dividendo = 7;
$divisore = 2;
echo "intdiv($dividendo, $divisore) = " . intdiv($dividendo, $divisore) . "<br>"; // 3
// number_format() - Formattta un numero con migliaia separate e decimali
$numero = 1234567.891;
echo "number_format($numero, 2) = " . number_format($numero, 2, ".", ",") . "<br>"; // 1,234,567.89
// is_numeric() - Verifica se una variabile è numerica
$variabile = "123";
echo "is_numeric($variabile) = " . (is_numeric($variabile) ? 'true' : 'false') . "<br>"; // true
// is_int() - Verifica se una variabile è un intero
$variabile = 123;
echo "is_int($variabile) = " . (is_int($variabile) ? 'true' : 'false') . "<br>"; // true
// is_float() - Verifica se una variabile è un float
$variabile = 123.45;
echo "is_float($variabile) = " . (is_float($variabile) ? 'true' : 'false') . "<br>"; // true
// intval() - Converte un valore in intero
$variabile = "123.45";
echo "intval($variabile) = " . intval($variabile) . "<br>"; // 123
// floatval() - Converte un valore in float
$variabile = "123";
echo "floatval($variabile) = " . floatval($variabile) . "<br>"; // 123.0
// pi() - Restituisce il valore di pi greco
echo "pi() = " . pi() . "<br>"; // 3.1415926535898
// log() - Calcola il logaritmo naturale (base e)
$numero = 10;
echo "log($numero) = " . log($numero) . "<br>"; // 2.302585092994
// exp() - Calcola il valore di e elevato a una potenza
$esponente = 2;
echo "exp($esponente) = " . exp($esponente) . "<br>";
