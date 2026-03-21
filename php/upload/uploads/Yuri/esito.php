<?php
if ($_SERVER["REQUEST_METHOD"]==='GET')
{
    $nome = trim($_POST['nome']);
    $cognome = trim($_POST['cognome']);
    $password = $_POST['password'];
    $data = $_POST['data_iscrizione'];
    echo $nome;
    echo '<br>';
    echo $cognome;
    echo '<br>';
    echo $password;
    echo '<br>';
    echo $data;
    echo '<br>';
}
