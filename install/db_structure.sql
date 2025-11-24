CREATE DATABASE IF NOT EXISTS techstorage;

USE techstorage;

CREATE TABLE produtos (
  id int(11) NOT NULL AUTO_INCREMENT,
  nome varchar(250) NOT NULL,
  codigobarras varchar(50) DEFAULT NULL,
  qtdestoque varchar(100) DEFAULT NULL,
  custoreposicao double DEFAULT NULL,
  descricao text,
  PRIMARY KEY (id),
  UNIQUE KEY codigobarras (codigobarras)
);