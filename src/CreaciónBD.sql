DROP DATABASE elrinconenchilado;

CREATE DATABASE ElRinconEnchilado;
USE ElRinconEnchilado;

/* Tablas */

CREATE TABLE Consumidor (
	id INT AUTO_INCREMENT PRIMARY KEY ,
    nombre VARCHAR (35),
    apPaterno VARCHAR (35),
    email VARCHAR (50),
    domicilio VARCHAR(100),
    pass VARCHAR (25)
);

CREATE TABLE Trabajador(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(30),
    apPaterno VARCHAR(30),
    apMaterno VARCHAR(30),
    email VARCHAR(50),
    rol VARCHAR (30), 
    pass VARCHAR (25)
);

CREATE TABLE Pedido(
	id INT AUTO_INCREMENT PRIMARY KEY,
    idConsumidor INT,
    idTrabajador INT, /*quién entrega la orden*/
    fecha DATE, 
    estatus varchar (25),
    total DOUBLE(5,2)
);

CREATE TABLE Producto
(
	idProducto INT AUTO_INCREMENT PRIMARY KEY, 
    nombreProducto VARCHAR(50),
    descripcion VARCHAR(50),
    disponibilidad BOOLEAN,
    precio DOUBLE(5,2)
);
ALTER TABLE Producto ADD categoria INT AFTER descripcion;
productoALTER TABLE Producto ADD imagen VARCHAR(100) AFTER nombreProducto;


CREATE TABLE Categoria (/* 1 = Desayunos, 2 = Comidas, 3 = Bebidas, 4 = Postres*/
	id INT PRIMARY KEY, 
    nombre VARCHAR(10)
);

CREATE TABLE PedidoProducto (
	idPedido INT,
    idProducto INT,
    cantidad INT
);



/*CREATE TABLE Venta
(
	id INT AUTO_INCREMENT PRIMARY KEY,
    idTrabajador INT,
    idConsumidor INT,
    nombreProducto VARCHAR(50),
    cantidad INT, 
    precioUnitario INT,
	fecha DATE,
    total INT
    
);*/

/*Llaves primarias*/
ALTER TABLE PedidoProducto
ADD CONSTRAINT pk_pedido_producto PRIMARY KEY (idPedido, idProducto);



/* LLaves foráneas */
/*ALTER TABLE Venta 
ADD CONSTRAINT fk_idTrabajador_Venta FOREIGN KEY (idTrabajador) 
REFERENCES Trabajador(id);

ALTER TABLE Venta 
ADD CONSTRAINT fk_idConsumidor_Venta FOREIGN KEY (idConsumidor) 
REFERENCES Consumidor(id);*/

ALTER TABLE Producto
ADD CONSTRAINT fk_producto_categoria FOREIGN KEY (categoria)
REFERENCES Categoria(id);

ALTER TABLE Pedido
ADD CONSTRAINT fk_idConsumidor_Pedido FOREIGN KEY (idConsumidor)
REFERENCES Consumidor(id);

ALTER TABLE Pedido
ADD CONSTRAINT fk_idTrabajador_Pedido FOREIGN KEY (idTrabajador)
REFERENCES Trabajador(id);


