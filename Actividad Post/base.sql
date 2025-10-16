create table usuarios(
    id int primary key auto_increment,
    nombre varchar(100) not null,
    email varchar(100) not null,
    telefono varchar(15) not null,
    producto varchar(100) not null
);