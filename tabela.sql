create database qpweb2;

use qpweb2;

create table usuarios(	
nome varchar(100), 
usuario varchar(50), 
telefone varchar(50), 
senha varchar(50),
constraint usuarioPK primary key(usuario),
constraint userU unique (usuario),
constraint telU unique (telefone)
);