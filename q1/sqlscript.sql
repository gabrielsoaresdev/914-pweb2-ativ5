CREATE DATABASE atividade51;
USE atividade51;

CREATE TABLE usuario (
    email varchar(100) unique key,
    senha varchar(100),
    nome varchar(100) unique key,
    id int primary key auto_increment not null;
);