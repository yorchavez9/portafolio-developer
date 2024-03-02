/* create database sis_portafolio; */

create table usuarios(
    id_usuario int(11) not null primary key auto_increment,
    nombre varchar(100) not null,
    apellidos varchar(150) not null,
    correo varchar(100) not null,
    contrasena varchar(255) not null,
    fecha timestamp not null default current_timestamp
);


create table redes_sociales(
    id_redes_sociale int(11) not null primary key auto_increment,
    facebook varchar(255) not null,
    pinterest varchar(255) not null,
    twitter varchar(255) not null,
    youtube varchar(255) not null,
    tiktok varchar(255) not null,
    linkedin varchar(255) not null
);

create table redes_contactos(
    id_redes_contacto int(11) not null primary key auto_increment,
    telefono varchar(20) not null,
    correo varchar(255) not null,
    whatsapp varchar(255) not null,
    github varchar(255) not null,
    direccion varchar(255) not null
);
create table experiencia_educacion(
    id_exp_edu int(11) not null primary key auto_increment,
    tipo varchar(255) not null,
    titulo varchar(255) not null,
    lugar varchar(255) not null,
    descripcion text not null,
    fecha varchar(255) not null
);

create table contactos(
    id_contacto int(11) not null primary key auto_increment,
    nombre varchar(255) not null,
    correo varchar(255) not null,
    mensaje text not null,
    fecha timestamp not null default current_timestamp
);

create table proyectos(
    id_proyecto int(11) not null primary key auto_increment,
    titulo varchar(255) not null,
    cliente varchar(255) not null,
    lenguajes varchar(255) not null,
    preview varchar(255) not null,
    descripcion text not null,
    imagen varchar(255) not null
);



create table perfil(
    id_perfil int(11) not null primary key auto_increment,
    cv varchar(255) not null,
    foto varchar(255) not null
);