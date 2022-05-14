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

CREATE TABLE `markers` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
  `lat` FLOAT( 10, 6 ) NOT NULL ,
  `lng` FLOAT( 10, 6 ) NOT NULL ,
);

INSERT INTO `users` (`username`, `password`) VALUES ('prueba','$2y$10$rQuCO0dCs7Dz6PtbU162r.S8qWh2VHHshX4LRBYYAmEd/lUMyXPFi')

INSERT INTO `productos` (`idProducto`, `nombProducto`, `fabricProducto`, `descripProducto`, `cantidProducto`, `gramajeProducto`) VALUES (NULL, 'Paracetamol', 'FabricaFina', 'medicina pa la guata', '24', '500gr')

INSERT INTO `markers` (`id`, `lat`, `lng`) VALUES ('1', '-33.67984928437336', '-71.22028250553147');
INSERT INTO `markers` (`id`, `lat`, `lng`) VALUES ('2', '-33.68838511508215', '-71.21443897176266');
INSERT INTO `markers` (`id`, `lat`, `lng`) VALUES ('3', '-33.68685842765098', '-71.21933835377865');