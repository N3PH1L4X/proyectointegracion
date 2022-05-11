CREATE DATABASE IF NOT EXISTS bddcesfam;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE productos (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombreProducto VARCHAR(50) NOT NULL,
    fabricaProducto VARCHAR(50) NOT NULL,
    descripcionProducto VARCHAR(250) NOT NULL,
    cantidadProducto INT NOT NULL,
    gramajeProducto VARCHAR(50) NOT NULL
);

INSERT INTO `users` (`username`, `password`) VALUES ('prueba','$2y$10$rQuCO0dCs7Dz6PtbU162r.S8qWh2VHHshX4LRBYYAmEd/lUMyXPFi')
INSERT INTO `productos` (`idProducto`, `nombProducto`, `fabricProducto`, `descripProducto`, `cantidProducto`, `gramajeProducto`) VALUES (NULL, 'Paracetamol', 'FabricaFina', 'medicina pa la guata', '24', '500gr')
