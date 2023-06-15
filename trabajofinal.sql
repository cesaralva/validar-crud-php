-- Crear la base de datos
CREATE DATABASE biblioteca;

-- Seleccionar la base de datos
USE biblioteca;

CREATE TABLE Categoria (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    Nombre_categoria_libros VARCHAR(255)
);
INSERT INTO Categoria (Nombre_categoria_libros) VALUES
    ('Ciencia Ficción'),
    ('Romance'),
    ('Misterio'),
    ('Fantasía');


-- Crear la tabla Libros
CREATE TABLE Libros (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Nombre_del_libro VARCHAR(255),
    Autor VARCHAR(255)
);



INSERT INTO Libros (Nombre_del_libro, Autor)
VALUES
    ('Cien años de soledad', 'Gabriel García Márquez'),
    ('Orgullo y prejuicio', 'Jane Austen'),
    ('El viejo y el mar', 'Ernest Hemingway'),
    ('Harry Potter y la piedra filosofal', 'J.K. Rowling');



-- Crear la tabla Préstamos
CREATE TABLE Prestamos (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    ID_del_libro INT,
    Nombre_de_la_persona VARCHAR(255),
    Fecha_de_prestamo DATE,
    Fecha_de_devolucion DATE,
    Estado VARCHAR(255),
    FOREIGN KEY (ID_del_libro) REFERENCES Libros(ID)
);

-- Crear la base de datos
CREATE DATABASE usuariosdb;

-- Seleccionar la base de datos
USE usuariosdb;

-- Crear la tabla de usuarios
CREATE TABLE usuarios (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(255),
    email VARCHAR(255),
    contrasena VARCHAR(255)
);
