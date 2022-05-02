CREATE DATABASE IF NOT EXISTS bddcesfam;

CREATE TABLE users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE productos (
    idProducto INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nombProducto VARCHAR(50) NOT NULL,
    fabricProducto VARCHAR(50) NOT NULL,
    descripProducto VARCHAR(255) NOT NULL,
    cantidProducto INT NOT NULL,
    gramajeProducto VARCHAR(50) NOT NULL
);

INSERT INTO `productos` (`idProducto`, `nombProducto`, `fabricProducto`, `descripProducto`, `cantidProducto`, `gramajeProducto`) VALUES (NULL, 'Paracetamol', 'FabricaFina', 'medicina pa la guata', '24', '500gr')
