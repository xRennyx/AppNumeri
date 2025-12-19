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
