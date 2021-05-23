CREATE DATABASE IF NOT EXISTS banque_php CHARACTER SET 'utf8';

CREATE USER banque_php @localhost IDENTIFIED BY 'aaa';

GRANT ALL PRIVILEGES ON banque_php TO banquePHP @localhost;

FLUSH PRIVILEGES;



CREATE TABLE client
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    c_log VARCHAR(20) NOT NULL,
    c_password VARCHAR(30) NOT NULL
    
) ENGINE = INNODB;

INSERT INTO client (id, nom, prenom, c_log, c_password)
VALUES ("09121906","hopper","grace","hopper","cobol"),
("10121815","lovelace","ada","lovelace","firstprogram"),
("09111914","lamarr","hedy","lamarr","fhss");


CREATE TABLE compte
(
    id_compte INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    numero_compte VARCHAR(12) NOT NULL,
    date_ouv DATE NOT NULL,
    id_client INT,
    FOREIGN KEY (id_client) REFERENCES client (id)
) ENGINE = INNODB;

INSERT INTO compte (id_compte, numero_compte, date_ouv, id_client)
VALUES ("01","01234578901","19261209","09121906"),
("02","01234578902","18251210","10121815"),
("03","01234578903","19341109","09111914");
​
CREATE TABLE operation
(
    id_numero_operation INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type_de_transaction VARCHAR(20) NOT NULL,
    montant FLOAT(12,2),
    date_operation DATE NOT NULL,
    solde_compte FLOAT(12,2),
    id_compte INT(10),
    FOREIGN KEY (id_compte) REFERENCES compte(id_compte)
) ENGINE = INNODB;

INSERT INTO operation (id_numero_operation,type_de_transaction,montant,date_operation,solde_compte, id_compte)
VALUES ("9876543","CHQ",25,"19261211",542.65,"01"),
("9876540","CHQ",42,"18261001",-12.20,"02"),
("9876542","CHQ",9,"19341210",22.65,"03");
