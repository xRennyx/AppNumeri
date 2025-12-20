<?php

$testo='Ciao mondo';

echo preg_match('#mondo#', $testo) ? 'Pattern trovato' : 'Pattern non trovato';//# #-> delineatori necessari per verificare sennò non funziona
echo '<br>';
echo preg_match('#^mondo#', $testo) ? 'Pattern trovato' : 'Pattern non trovato all inizio';//^ controlla se è all'inizio
echo '<br>';
echo preg_match('#mondo$#', 'ciao a tutto il mondo') ? 'Pattern trovato' : 'Pattern non trovato alla fine'; //$ controlla se è alla fine
echo '<br>';
echo preg_match('#[0-9]#', 'ciao 4 mondo') ? 'Pattern trovato' : 'Pattern non trovato';//[intervallo di numeri] da trovare 555 ritorna true perchè il 5 è compremo nell'intervallo quindi aLmeno un numero
echo '<br>';
echo preg_match('#[a-zA-Z]#', 'CIAO 4 MONDO') ? 'Pattern trovato' : 'Pattern non trovato';//[intervallo di lettetre] stesso principio dei numeri
echo '<br>';
echo preg_match('#[^0-9]#', '555') ? 'true' : 'false';//^ nella [] vuol dire negato qua cerca la mancanza di numeri->lettere = a scrivere [a-z], se mettessi [0-4] true successo nel non trovare nessun numero da 0 a 4
echo '<br>';
echo preg_match('#R[aeiou]+vigo[0-9]*#', 'Rouvigo22', $matches) ? 'true' : 'false';
echo '<br>';
var_dump($matches);// ha catturato tutta la stringa
/*Parentesi quadrata trova 1 carattere metto R+oaei+vigo dà false
-> ? 0 [elemento] o 1[elemento]
-> * 0,1 o tutti gli elementi del [] affinchè appartengono all'insieme
-> + 1 o tutti gli elementi del [] affinchè appartengono all'insieme*/
echo '<br>';
echo preg_match('#R[aeiou]#', 'Rouvigo', $matches) ? 'true' : 'false';
echo '<br>';
var_dump($matches);//Solo Ro con * Rou. Si ferma alla corrispondenza.#R[aeiou]vigo# lui cerca v dopo 1 vocale se non la trova rompe la sequenza e non stampa niente nel var_dump
echo '<br>';
echo preg_match('#ciao#i', 'CIAO') ? 'true' : 'false';//i dopo # ignora se è maiuscolo o minuscolo
$tel='0123456789';
echo '<br>';
echo preg_match('#[0-9]{8,12}#', $tel, $matches) ? 'true' : 'false'; //vuole 8 caratteri se di più $matches si ferma ad 8 trova la sequenza {min, max} se min è vero torna true
echo '<br>';
var_dump($matches);
echo '<br>';
echo preg_match('#verde|rosso|blu#', 'verde', $matches) ? 'true' : 'false'; //vuole 8 caratteri se di più $matches si ferma ad 8 trova la sequenza {min, max} se min è vero torna true
echo '<br>';
var_dump($matches);
