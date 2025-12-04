<?php //dice al server che quello che viene dopo è php

echo 'Hello World';
echo'<br>';
echo 'buongiorno a tutti';
echo '<br>';
$var=10;
echo 'Il valore della variabibile è '.$var;
echo '<br>';
var_dump($var);
echo '<br>';
$var2=2.50;
echo 'Il valore della variabibile è '.$var2;
echo '<br>';
var_dump($var2);
echo '<br>';
$var='AGY';
echo 'Il valore della variabibile è '.$var;
echo '<br>';
var_dump($var);
echo '<br>';
echo M_PI;
echo '<br>';
echo PHP_INT_MAX;
echo '<br>';
echo PHP_INT_MIN;
echo '<br>';
//echo phpinfo();
if($var2>5)
    echo 'confronto effettuato';
else echo 'ciao';
echo '<br>';
$vet1=[];
$vett=[10,20,30];
echo $vett[0];
$n=count($vett);
echo '<br>';
echo 'Dimensione vettore: '.$n;
echo '<br>';
echo 'Elementi vettore: <br>';
for($i=0; $i<$n; $i++)
    echo ' '.$vett[$i];
echo '<br>';
print_r($vett);
echo '<br>';
var_dump($vett);
echo '<br>';
$vett2=[10,20,30,'a','b'];
var_dump($vett2);
echo '<br>';
array_push($vett2, 60);
echo implode(' ',$vett2);
$vett2[]=70;
echo '<br>';
echo implode(' ',$vett2);
echo '<br>';
array_pop($vett2);//Cancello alla fine
echo implode(' ',$vett2);
echo '<br>';
array_shift($vett2); //Cancello all'inizio
echo implode(' ',$vett2);
echo '<br>';
if(in_array(20, $vett2))
    echo 'il numero esiste';
else echo 'non esiste';
echo '<br>';
sort($vett2);
echo implode(' ',$vett2);
echo '<br>';
$studente=[
    'nome'=>'Marco',
    'eta'=>18
];
echo $studente['nome'];
echo '<br>';
$studente['cognome']='Bianchi';
foreach ($studente as $chiave =>$valore){
    echo "$chiave: $valore <br>"; // nome array assocciativo, chiave=attributo, valore= il valore di quel attributo
}
echo 'Vettore associativo annidato';
echo '<br>';
$studenti=[
    'studente1'=>[
        'nome'=>'Gigi',
        'voto'=>7
    ],
    'studente2'=>[
        'nome'=>'Lotario',
        'voto'=>6
    ]
];
echo $studenti['studente2']['nome'];
echo ': ';
echo $studenti['studente2']['voto'];
echo '<br>';
$config=[
    'database'=>'mio_db',
    'utente'=>'admid',
    'password'=>'12345'
];
if(array_key_exists('nome',$studente))//(campo/chiave che cerco, dove la cerco)
    echo 'Chiave trovata';
else echo 'Chiave non trovata';
echo '<br>';
$chiavi=array_keys($studente);
var_dump($chiavi);
echo '<br>';
$valori=array_values($studente);
var_dump($valori);
echo '<br>';
echo $valori[1];
echo '<br>';
if(array_key_exists('eta', $studente))
    echo $studente['eta'];
else echo 'Eta non presente';
echo '<br>';
$var1=5;
$var2='5';
if($var1==$var2)//converte il '5' in 5(int)
    echo 'Sono uguali';
else echo 'Sono diverse';
echo '<br>';
if($var1===$var2)//NON converte il '5' in 5(int)
    echo 'Sono uguali';
else echo 'Sono diverse';
echo '<br>';
$var3='ciao';
$var4=0;
if($var4==$var3)
    echo 'Sono uguali';
else echo 'Sono diverse';
echo '<br>';
if(isset($a))//restituisce false se la variabile non esiste o è null
    echo 'Esiste';
else echo 'Non esiste';
echo '<br>';
$var5=null;
is_null(null);//vero
if(is_null($var5))
    echo 'var5 è null';
else echo 'non è null';
echo '<br>';
if(isset($var5))
    echo 'Esiste';
else echo 'Non esiste';
echo '<br>';
if(empty($var5))//ritorna vero se è zero
    echo 'var5 è vuota';
else echo 'non è vuota';
echo '<br>';
// array_keys()
// Ritorna tutte le chiavi dell'array
$chiavi = array_keys($studente);
echo "Chiavi array studente: ";
print_r($chiavi);
echo "<br>";

// array_values()
// Ritorna tutti i valori dell'array
$valori = array_values($studente);
echo "Valori array studente: ";
print_r($valori);
echo "<br>";

// array_key_exists()
// Controlla se una chiave esiste nell'array
if(array_key_exists('nome', $studente))
    echo "La chiave 'nome' esiste<br>";
else
    echo "La chiave 'nome' NON esiste<br>";

// isset()
// Controlla se una variabile esiste e non è null
if(isset($studente['eta']))
    echo "Variabile esiste (isset)<br>";
else
    echo "Variabile NON esiste (isset)<br>";

// in_array()
// Controlla se un valore è presente nell'array
if(in_array(20, $vett2))
    echo "20 è presente in vett2<br>";
else
    echo "20 NON è presente in vett2<br>";

// array_search()
// Restituisce la chiave/indice del valore cercato
$pos = array_search(20, $vett2);
echo "20 si trova alla posizione: $pos<br>";

// unset()
// Elimina un elemento dell'array
unset($vett2[2]);
echo "vett2 dopo unset: " . implode(' ', $vett2) . "<br>";

// array_merge()
// Unisce due array
$unito = array_merge($vett, $vett2);
echo "Array unito: " . implode(' ', $unito) . "<br>";

// asort()
// Ordina l'array mantenendo le chiavi
asort($vett2);
echo "vett2 ordinato (asort): " . implode(' ', $vett2) . "<br>";

// arsort()
// Ordina al contrario mantenendo le chiavi
arsort($vett2);
echo "vett2 ordinato inverso (arsort): " . implode(' ', $vett2) . "<br>";

// ksort()
// Ordina un array in base alle chiavi crescenti
ksort($studente);
echo "studente ordinato per chiavi (ksort): ";
print_r($studente);
echo "<br>";

// krsort()
// Ordina un array in base alle chiavi decrescenti
krsort($studente);
echo "studente ordinato per chiavi inverse (krsort): ";
print_r($studente);
echo "<br>";

// array_map()
// Applica una funzione a tutti gli elementi dell'array
$moltiplicato = array_map(function($n){ return $n*2; }, $vett);
echo "vett moltiplicato x2 (array_map): ";
print_r($moltiplicato);
echo "<br>";

// array_filter()
// Filtra gli elementi (tiene solo quelli > 15)
$filtrato = array_filter($vett2, function($n){ return $n > 15; });
echo "vett2 filtrato (>15): ";
print_r($filtrato);
echo "<br>";

// array_walk()
// Esegue una funzione su ogni elemento
array_walk($vett, function($valore, $chiave){
    echo "Elemento $chiave vale $valore<br>";
});

// array_slice()
// Estrae una parte dell'array SENZA modificarlo
$parte = array_slice($vett, 1, 2);
echo "Parte di vett (slice 1,2): ";
print_r($parte);
echo "<br>";

// array_splice()
// Rimuove una parte dell’array e può sostituirla
$vett_copia = $vett;
array_splice($vett_copia, 1, 1, ['X','Y']);
echo "vett dopo splice (1 elemento sostituito con X,Y): ";
print_r($vett_copia);
echo "<br>";
