<?php

return [
    'dsn'=>"mysql:host=192.168.60.144;dbname=francesco_renesto_studenti;charset=utf8",
    'username'=>"francesco_renesto",
    'password'=>"spremente.proseguivo.",
    'options' => [ PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]
];
