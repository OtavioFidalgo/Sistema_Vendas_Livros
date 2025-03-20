create database SistemaLivraria;

use SistemaLivraria;

create table cadastrar(
	codigo int not null auto_increment primary key,
    nome varchar(50) not null,
    sobrenome varchar(50) not null,
    email varchar(150) not null,
    dataNascimento varchar(30) not null,
    telefone varchar(20) not null,
    endreco varchar(100) not null,
    senha varchar(25) not null
)engine = InnoDB;

create table livros(
    codigo int not null auto_increment primary key,
    titulo varchar(50) not null,
    categoria varchar(20) not null,
    preco int not null
)engine = InnoDB;
