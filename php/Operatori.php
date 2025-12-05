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
