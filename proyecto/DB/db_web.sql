
create database web;
use web;

create table cursos(
  idCurso int primary key not null auto_increment,

  nombreLenguaje varchar(25)

);

create table alumnos(

  idAlumno int primary key not null auto_increment,
  nombreAlumno varchar(25),
  apellidosAlumno varchar(25),
  nombreUsuario varchar(25),
  passAlumno varchar(25),
  emailAlumno varchar(60),
  nivel int,
  cursosSiguiendo int,
  foreign key (cursosSiguiendo) references cursos(idCurso)
);



create table tutores(
  idTutor int primary key not null auto_increment,
  nombreTutor varchar(25),
  apellidoPaterno varchar(25),
  apellidoMaterno varchar(25),
  passTutor varchar(25),
  nombreUsuario varchar(25),
  especialidad int,

  foreign key (especialidad) references cursos(idCurso)
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

insert into cursos values (1,'Java');
insert into cursos values (2,'Python');
insert into cursos values (3,'C, C++');

insert into alumnos values (1,'Luis','ap1','user1','12345','123@123.com',1,1);
