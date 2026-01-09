create database if not exists ripasso;
use ripasso_sql;

CREATE TABLE produttori (
    id_produttore INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    paese VARCHAR(50),
    sito_web VARCHAR(255)
);

CREATE TABLE standard_wifi (
    id_standard INT PRIMARY KEY AUTO_INCREMENT,
    nome_standard VARCHAR(50) NOT NULL,         
    anno_introduzione INT,
    bande_supportate VARCHAR(100) NOT NULL,     
    velocita_massima_mbps INT NOT NULL,          
    obsoleto BOOLEAN DEFAULT FALSE
);

CREATE TABLE access_point (
    id_access_point INT AUTO_INCREMENT PRIMARY KEY,
    modello VARCHAR(100) NOT NULL,
    id_produttore INT NOT NULL,
    id_standard INT NOT NULL,
    porte_ethernet INT,
    anno_produzione INT,

    FOREIGN KEY (id_produttore)
        REFERENCES produttori(id_produttore),

    FOREIGN KEY (id_standard)
        REFERENCES standard_wifi(id_standard)
);


INSERT INTO produttori (nome, paese, sito_web) VALUES
('Cisco', 'USA', 'https://www.cisco.com'),
('TP-Link', 'Cina', 'https://www.tp-link.com'),
('Netgear', 'USA', 'https://www.netgear.com'),
('D-Link', 'Taiwan', 'https://www.dlink.com'),
('Linksys', 'USA', 'https://www.linksys.com');

INSERT INTO standard_wifi (nome_standard, bande_supportate, velocita_massima_mbps, anno_introduzione) VALUES
('802.11b', '2.4 GHz', 11, 1999),
('802.11a', '5 GHz', 54, 1999),
('802.11g', '2.4 GHz', 54, 2003),
('802.11n', '2.4 / 5 GHz', 600, 2009),
('802.11ac', '5 GHz', 3466, 2013),
('802.11ax (Wi-Fi 6)', '2.4 / 5 GHz', 9600, 2019);

INSERT INTO access_point (modello, id_produttore, id_standard, porte_ethernet, anno_produzione) VALUES
('Aironet 1100', 1, 1, 1, 2001),
('Aironet 1200', 1, 2, 1, 2002),
('WRT54G', 5, 3, 4, 2004),
('DAP-1150', 4, 3, 1, 2005),
('TL-WR841N', 2, 4, 4, 2011),
('DAP-1360', 4, 4, 1, 2010),
('Nighthawk R7000', 3, 5, 4, 2015),
('Archer C7', 2, 5, 4, 2016),
('Archer AX50', 2, 6, 4, 2021),
('Netgear AX12', 3, 6, 5, 2022);

SELECT * from access_point
where anno_produzione>2020 

SELECT modello from access_point
where porte_ethernet>3



