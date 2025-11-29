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
