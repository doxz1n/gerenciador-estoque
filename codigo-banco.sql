create database Estoque;

use Estoque;

create table tbProdutos(
    id int NOT NULL AUTO_INCREMENT,
    nome varchar(100),
    descricao varchar(1000),
    quantidade int,
    PRIMARY KEY (`id`)
);
