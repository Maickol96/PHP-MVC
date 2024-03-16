CREATE DATABASE notas_master;
       use notas_master;

CREATE TABLE Usuarios
(
    id        int(255) auto_increment not null,
    nombre    varchar(100) not null,
    apellidos varchar(100) not null,
    email     varchar(255) not null,
    password  varchar(255) not null,
    fecha     date         not null,
    CONSTRAINT pk_usuarios PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDb;

CREATE TABLE notas
(
    id          int(255) auto_increment not null,
    usuario_di  int(255)     not null,
    titulo      varchar(255) not null,
    descripcion MEDIUMTEXT,
    fecha       date         not null,
    CONSTRAINT pk_entradas PRIMARY KEY (id),
    CONSTRAINT fk_entradas_usuario FOREIGN KEY (usuario_di) REFERENCES Usuarios (id)
)ENGINE=InnoDb;

SELECT * FROM Usuarios;
INSERT INTO Usuarios VALUES(null,'Maickol', 'Velasco', 'maickol@velasco.com', '1234', CURDATE());
INSERT INTO Usuarios VALUES(null,'Dario', 'Tellez', 'dario@tellez.com', '1234', CURDATE());
INSERT INTO Usuarios VALUES(null,'Nury', 'Perez', 'nury@perez.com', '1234', CURDATE());

SELECT * FROM notas;
INSERT INTO notas VALUES (null, 1 ,'Nota 1', 'pruebas numero 1', CURDATE());
INSERT INTO notas VALUES (null, 1 ,'Nota 2', 'pruebas numero 2', CURDATE());
INSERT INTO notas VALUES (null, 1 ,'Nota 2', 'pruebas numero 2', CURDATE());
