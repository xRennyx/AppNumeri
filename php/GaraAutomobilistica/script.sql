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
