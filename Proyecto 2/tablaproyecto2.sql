create database clientes1yclientes2;
use clientes1yclientes2;

create table Usuarios(Identificacion int,Nombres varchar (50),Sexo char (2),Direccion varchar (100),Correo varchar (100),Fecha_Nac date,Movil int,Edad char (2),primary key(Identificacion));

describe Usuarios;

select * from Usuarios;