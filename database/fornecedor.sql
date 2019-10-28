CREATE DATABASE GRAPHIC_MASTER;
USE GRAPHIC_MASTER;

CREATE TABLE FORNECEDOR (
	ID_FORNECEDOR int(11) NOT NULL AUTO_INCREMENT,
	NOME_FORNECEDOR varchar(64) CHARACTER SET utf8 NOT NULL,
	CNPJ char(14) CHARACTER SET utf8 NOT NULL UNIQUE,
	PRIMARY KEY (ID_FORNECEDOR)
);

INSERT INTO FORNECEDOR(ID_FORNECEDOR, NOME_FORNECEDOR, CNPJ) VALUES 
(1, 'CHAMEX', '05455247000116'),
(2, 'BIC', '05726275000120'),
(3, 'FABER CASTELL', '59596908000152'),
(4, 'TILIBRA', '44990901000143'),
(5, 'XEROX', '02773629004006');