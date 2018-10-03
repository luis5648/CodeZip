create database web;
use web


create table users(

  idUduario int primary key not null auto_increment,
  name varchar(25),
  password varchar(25)

);

insert into users values(1,'usuario1','12345');
