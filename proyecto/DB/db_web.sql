
create database web;
use web

create table cursos(
  idCurso int primary key not null auto_increment,

  nombreLenguaje varchar(25)

);

create table alumnos(

  idAlumno int primary key not null auto_increment,
  nombreAlumno varchar(25),
  passAlumno varchar(25),
  nivel int,
  cursosSiguiendo int,
  foreign key (cursosSiguiendo) references cursos(idCurso)
);



create table tutores(
  idTutor int primary key not null auto_increment,
  nombreTutor varchar(25),
  apellidoPaterno varchar(25),
  apellidoMaterno varchar(25),
  codigoUdg double,
  especialidad int


);

create table problemas(
  idProblema int primary key not null auto_increment,
  nombreProblema varchar(25),
  lenguaje varchar(25),
  enunciado text
);


create table problemasSoluc(
  idSolucion int primary key not null auto_increment,
  idProblema int,
  solucion text,
  correccion text,
  idAlumno int,
  idTutor int,

  foreign key (idProblema) references problemas(idProblema),
  foreign key (idAlumno) references alumnos(idAlumno),
  foreign key  (idTutor) references tutores(idTutor)

);

insert into users values(1,'usuario1','12345');
