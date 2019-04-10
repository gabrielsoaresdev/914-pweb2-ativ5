CREATE DATABASE atividade52;
USE atividade52;

CREATE TABLE IF NOT EXISTS mensagens (
    nick varchar(25),
    texto varchar(100),
    id int primary key auto_increment not null
);