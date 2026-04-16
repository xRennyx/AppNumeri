create database if not exists francesco_renesto_fastroute
use database francesco_renesto_fastroute

CREATE TABLE Cliente_Mittente (
    cf VARCHAR(16) PRIMARY KEY,
    nome VARCHAR(50),
    cognome VARCHAR(50),
    punti_fedelta INT
);

CREATE TABLE Corriere (
    matricola INT PRIMARY KEY,
    nome VARCHAR(50),
    cognome VARCHAR(50)
);


CREATE TABLE Destinatario (
    cf VARCHAR(16) PRIMARY KEY,
    nome VARCHAR(50),
    cognome VARCHAR(50)
);

CREATE TABLE Cliente (
    cf VARCHAR(16) PRIMARY KEY,
    punti_fedelta INT,
    FOREIGN KEY (cf) REFERENCES Destinatario(cf)
);

CREATE TABLE No_Cliente (
    cf VARCHAR(16) PRIMARY KEY,
    FOREIGN KEY (cf) REFERENCES Destinatario(cf)
);

CREATE TABLE Plico (
    codice INT PRIMARY KEY,
    data_spedizione DATE,
    matricola_corriere INT UNIQUE, 
    cf_destinatario VARCHAR(16) UNIQUE,
    data_ritiro DATE,
    
    FOREIGN KEY (matricola_corriere) REFERENCES Corriere(matricola),
    FOREIGN KEY (cf_destinatario) REFERENCES Destinatario(cf)
);

CREATE TABLE Incarica (
    cf_cliente VARCHAR(16),
    matricola_corriere INT,
    data_accettazione DATE,
    
    PRIMARY KEY (cf_cliente, matricola_corriere, data_accettazione),
    
    FOREIGN KEY (cf_cliente) REFERENCES Cliente_Mittente(cf),
    FOREIGN KEY (matricola_corriere) REFERENCES Corriere(matricola)
);
