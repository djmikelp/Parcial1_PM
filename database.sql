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
    FOREIGN KEY (ci) REFERENCES academico (ci)
  );
insert into identificador values('6840841','Miguel Angel Pozo Morales','1989-01-16','23');
