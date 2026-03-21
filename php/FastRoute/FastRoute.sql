create database if not exists francesco_renesto_fastroute

use database francesco_renesto_fastroute

create table corrieri
(
	matricola varchar(50) primary key,
	nome varchar(50),
	cognome varchar(50)
);

create table destinatari
(
	id_destinatario int PRIMARY key auto_increment,
	nome varchar(50),
	cognome varchar(50)
);

create table plichi
(
	codice int primary key auto_increment,
	matricola_corriere varchar(50),
	id_destinatario int,
	foreign key (matricola_corriere) references corrieri(matricola),
	foreign key (id_destinatario) references destinatari(id_destinatario)
);