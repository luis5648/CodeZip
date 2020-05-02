
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
  emailAlumno varchar(60)
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
  enunciado text,
  autor int,

  foreign key (autor) references tutores(idTutor)

);

create table soluciones(

  idSolucion int primary key not null auto_increment,
  idProblema int,
  idAlumno int,
  solucion text,


  foreign key (idProblema) references problemas(idProblema),
  foreign key (idAlumno) references alumnos(idAlumno)


);

insert into cursos values (1,'Java');
insert into cursos values (2,'Python');
insert into cursos values (3,'C, C++');

insert into alumnos values (1,'Luis','Román','user1','12345','luis.rmarin@alumnos.udg.mx');

-- inserts de tutores:

INSERT INTO web.tutores (nombreTutor, apellidoPaterno, apellidoMaterno, passTutor, nombreUsuario, especialidad) VALUES ('Mirsha', 'Espinoza', 'Ortiz', '123456', 'Mish', 1);
INSERT INTO web.tutores (nombreTutor, apellidoPaterno, apellidoMaterno, passTutor, nombreUsuario, especialidad) VALUES ('Luis', 'Roman', 'Marin', '123456', 'luis1103', 3);

INSERT INTO web.tutores (nombreTutor, apellidoPaterno, apellidoMaterno, passTutor, nombreUsuario, especialidad) VALUES ('Jose Luis', 'Del toro', 'Gomez', '123456', 'JL1451', 2);


INSERT INTO web.problemas (nombreProblema, lenguaje, enunciado, autor) VALUES ('triangulo_1', 2, 'Implementar un programa que calcule el área de un triángulo usando variables int nombradas "a", "b" y "h". No es necesario solicitar datos al usuario, pero es aceptable igual. ',2);


INSERT INTO web.problemas (nombreProblema, lenguaje, enunciado, autor) VALUES ('circulo_1', 2, 'Implementar un programa que calcule el área de un círculo usando variables float nombradas "a", "r" y "pi" ',2);

INSERT INTO web.problemas (nombreProblema, lenguaje, enunciado, autor) VALUES ('triangulo_2', 2, 'Implementar un programa que calcule el área de un triángulo usando variables int nombradas "areaTriangulo", "base" y "altura". No es necesario solicitar datos al usuario, pero es aceptable.',2);

INSERT INTO web.problemas (nombreProblema, lenguaje, enunciado,autor) VALUES ('circuloj_1', 1, 'Pedir el radio de un círculo y calcular su área. A=PI*r^2.',2);

INSERT INTO web.problemas (nombreProblema, lenguaje, enunciado,autor) VALUES ('circuloj_2', 1, 'Pedir el radio de una circunferencia y calcular su longitud.',2);

INSERT INTO web.problemas (nombreProblema, lenguaje, enunciado, autor) VALUES ('validacionj_1', 1, 'Pedir dos números y decir si son iguales o no.',2);


  
