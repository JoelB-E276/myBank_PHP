CREATE DATABASE IF NOT EXISTS banque_php CHARACTER SET 'utf8';

CREATE USER banque_php @localhost IDENTIFIED BY 'aaa';

GRANT ALL PRIVILEGES ON banque_php TO banquePHP @localhost;



CREATE TABLE client
(
    id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nom VARCHAR(100) NOT NULL,
    prenom VARCHAR(100) NOT NULL,
    c_email VARCHAR(255) NOT NULL,
    c_password VARCHAR(255) NOT NULL
    
) ENGINE = INNODB;

INSERT INTO client (id, nom, prenom, c_email, c_password)
VALUES ("09121906","Hopper","Grace","hopper@maboitemail.fr","$2y$10$HxbqWYc5sEOB2gpuAJdmLeI/WA.JaHFfD7MaTpZDbSLGGy.MnNw8a"),/*cobol*/
("10121815","Lovelace","Ada","lovelace@gmail.com","$2y$10$wlVB/tSgOT2hTkDinrONley5fX8mpYropomzRomebgJ6gHNzzcnJu"),/*firstprogram*/
("09111914","Lamarr","Hedy","lamarr@yahoo.fr","$2y$10$kNiGsdkyjgJJfv7sCVsqeuZaFycZtr4kc34ZlcRJL3y4kuV9Qmcm."),/*fhss*/
("05262021","Dujardin","Jean","az@gmail.com","$2y$10$VaYSfAQi71EXZLdooTS.NO9nXGvl6FSW1pvDSJSR.o3aWShnLlBfi");/*qs*/


CREATE TABLE compte
(
    id_compte INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    numero_compte VARCHAR(12) NOT NULL,
    type_compte VARCHAR (45),
    date_ouv DATE NOT NULL,
    solde_compte FLOAT(12,2),
    id_client INT,
    FOREIGN KEY (id_client) REFERENCES client (id)
) ENGINE = INNODB;

INSERT INTO compte (id_compte, numero_compte, type_compte, date_ouv, solde_compte, id_client)
VALUES  ("01","01234578901","Compte courant","19261209",-12.20,"09121906"),
        ("02","01234578902","Livret A","18251210",160,"09121906"),
        ("03","01234578903","PEL","19341108",355,"09121906"),
        ("04","01234578904","Compte courant","19341111",15122.65,"05262021");
CREATE TABLE operation
(
    id_numero_operation INT(10) PRIMARY KEY NOT NULL AUTO_INCREMENT,
    type_de_transaction VARCHAR(20) NOT NULL,
    montant FLOAT(12,2),
    date_operation DATE NOT NULL,
    id_compte INT(10),
    FOREIGN KEY (id_compte) REFERENCES compte(id_compte)
) ENGINE = INNODB;

INSERT INTO operation (id_numero_operation,type_de_transaction,montant,date_operation, id_compte)
VALUES ("9876543","debit",25,"19261211","01"),
("9876540","debit",42,"18261001","01"),
("9876542","debit",9,"19341210","01"),
("9876544","debit",999.99,"19341210","02");

