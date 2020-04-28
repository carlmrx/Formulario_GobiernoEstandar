create database preguntas;
use preguntas;
create table reporte(
    id int auto_increment,
    nombre varchar(60),
    apellido varchar(60),
    curp varchar(18),
    rfc varchar(20),
    folio varchar(20),
    estacion_servicio char(2) default 'no',
    correo varchar(30),
    telefono bigint,
    texto text,
    Fecha TIMESTAMP default CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
)