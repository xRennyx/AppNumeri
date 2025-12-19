<?php 
//Funzione di callback è una funzione passata per argomento
// ad un'altra funzione può essere utilizzata in un secondo momento o al verificarsi di un evento
function esegui($callback){
    $callback();
}
function saluta(){
    echo 'ciaociao';
}
esegui('saluta');
echo '<br>';
function applica($callback, $val)
{
    return $callback($val);
}
function doppio($x)
{
    return $x*2;
}
echo applica('doppio', 5);
echo '<br>';

//callback con funzione anonima
echo applica(function($x)
{
    $x++;
    return $x*2;
},5);
echo '<br>';

//Arrow function - funzioni anonime compatte

$doppio2= fn($x) =>$x*2;
echo $doppio2(4);
echo'<hr>';//linea
echo applica(fn($x) =>$x*2, 5); //Lamda solo quando ho 1 espressione
