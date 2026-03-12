create database if not exists francesco_renesto_gara

use francesco_renesto_gara

create table Case_Automobilistiche(
nome_scuderia varchar(50) primary KEY not null,
colore varchar(50),
livrea varchar(50)
);

create table Piloti(
numero int auto_increment primary key,
nome  varchar(50),
cognome varchar(50),
nazionalita varchar(50),
nome_scuderia varchar(50),
foreign key (nome_scuderia) references Case_Automobilistiche (nome_scuderia)
);

CREATE TABLE gara (
    id_gara INT AUTO_INCREMENT PRIMARY KEY,
    nome_gara VARCHAR(100) NOT NULL,
    circuito VARCHAR(100),
    data_gara DATE NOT NULL
);

CREATE TABLE risultato (
    id_risultato INT AUTO_INCREMENT PRIMARY KEY,
    numero INT NOT NULL,
    id_gara INT NOT NULL,
    posizione INT NOT NULL,
    tempo_gara TIME,
    giro_veloce BOOLEAN DEFAULT FALSE,

    FOREIGN KEY (numero) REFERENCES Piloti(numero),
    FOREIGN KEY (id_gara) REFERENCES gara(id_gara)
);
