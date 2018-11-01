
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
  lenguaje int,
  enunciado text,

  foreign key (lenguaje) references cursos(idCurso)
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
insert into cursos values (2,'C');
insert into cursos values (3,'C++');





insert  into tutores values (1,'josé','ap1','ap2','123','nick','2');
insert into alumnos values (1,'Luis','ap1','user1','12345','123@123.com',1,1);

-- problemas por defecto:

-- c:

insert into problemas  values ('3','triangulo_2','2','Implementar un programa que calcule el área de un triángulo usando variables int nombradas
"areaTriangulo", "base" y "altura". No es necesario solicitar datos al usuario, pero es aceptable.');

insert into problemas values ('2','circulo_1','2','Implementar un programa que calcule el área de un círculo usando variables float nombradas
"a", "r" y "pi" ');

insert into problemas values ('1','triangulo_1','2','Implementar un programa que calcule el área de un triángulo usando variables int nombradas
"a", "b" y "h". No es necesario solicitar datos al usuario, pero es aceptable igual. ');

-- java:

insert into problemas values ('4','circuloj_1','1','Pedir el radio de un círculo y calcular su área. A=PI*r^2.');
insert into problemas values ('5','circuloj_2','1','Pedir el radio de una circunferencia y calcular su longitud.');
insert into problemas values ('6','validacionj_1','1','Pedir dos números y decir si son iguales o no.');