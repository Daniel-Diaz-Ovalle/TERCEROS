drop database terceros;
create database terceros;
use terceros;


create table sede(
id_sede int (11) not null auto_increment,
nombre_sede varchar(100) not null, 
direccion varchar(250) not null,
telefono BIGINT(50) not null,
estado enum('Activo','Inactivo') not null,
primary key (id_sede)
);





create table persona_natural(
identificacion int (11) not null ,
tipo_id varchar(50) not null, 
nombre varchar(100) not null,
telefono BIGINT (50) not null, 
direccion varchar(250) not null,
correo varchar(100) not null,
estado enum('Activo','Inactivo') not null,
id_sede int(11),
primary key (identificacion),
foreign key (id_sede) references sede(id_sede)
);

create table persona_juridica(
nit int (11) not null, 
razon_social varchar(100) not null,
telefono BIGINT (50) not null, 
direccion varchar(250) not null,
correo varchar(100) not null,
estado enum('Activo','Inactivo') not null,
id_sede int(11),
primary key (nit),
foreign key (id_sede) references sede(id_sede)
);