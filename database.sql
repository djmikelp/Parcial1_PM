create database academico;
create table identificador
(
  ci varchar(10) primary key,
  nombrecompleto varchar(50),
  fechanac date,
  lugarresi varchar(10)
);
create table usuario
  (
    clave varchar(15),
    ci varchar (10),
    color varchar(10),
    foto varchar(50)
  );
/*
* FOREIGN KEY (ci) REFERENCES identificador (ci)
*/
create table notas
  (
    ci varchar (10),
    materia varchar(10),
    nota int
  );

insert into identificador values('6840841','Miguel Angel Pozo Morales','1989-01-16','lp');
insert into identificador values('7547891','Pepito Flores Flini','1990-05-02','co');
insert into identificador values('9874566','Juancito Pinto Belini','2000-12-24','sz');

insert into usuario values('123456', '6840841', '#a3c323','foto1.jpg');
insert into usuario values('1234567', '7547891', '#58d19e','foto2.jpg');
insert into usuario values('12345678', '9874566', '#3811f4','foto3.jpg');

insert into notas values('6840841','inf-111',80);
insert into notas values('6840841','inf-112',90);
insert into notas values('6840841','inf-113',60);

insert into notas values('7547891','inf-111',80);
insert into notas values('7547891','inf-112',50);
insert into notas values('7547891','inf-113',30);

insert into notas values('9874566','inf-111',5);
insert into notas values('9874566','inf-112',90);
insert into notas values('9874566','inf-113',100);
