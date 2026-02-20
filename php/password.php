<?php
$pwd='123456789';
$hash=password_hash($pwd, PASSWORD_DEFAULT);//1.Variabile 2.Algoritmo
echo $hash; //2y algoritmo, 10 numero iterazioni essi sono parametri di configurazione
echo "<br>";
echo strlen($hash);
echo "<br>";
if(password_verify($pwd, $hash)){
    echo 'Passoword correct';
}
else{
    echo 'Wrong password';
}
