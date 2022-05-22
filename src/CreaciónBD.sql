CREATE DATABASE ElRinconEnchilado;
USE ElRinconEnchilado;

/* Tablas */

CREATE TABLE Consumidor (
	id INT AUTO_INCREMENT PRIMARY KEY ,
    nombre VARCHAR (35),
    apPaterno VARCHAR (35),
    apMaterno VARCHAR (35),
    email VARCHAR (50),
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
    idTrabajador INT,
	cantidad INT,
    descripcion VARCHAR (100),
    fecha DATE, 
    estatus varchar (25)
);

 

CREATE TABLE Venta
(
	id INT AUTO_INCREMENT PRIMARY KEY,
    idTrabajador INT,
    idConsumidor INT,
    nombreProducto VARCHAR(50),
    cantidad INT, 
    precioUnitario INT,
	fecha DATE,
    total INT
    
);

CREATE TABLE HistorialVenta
(
	idVenta INT, 
    idTrabajador INT,
    fechaVenta DATE,
    total INT

);


/* LLaves foráneas */
ALTER TABLE Venta 
ADD CONSTRAINT fk_idTrabajador_Venta FOREIGN KEY (idTrabajador) 
REFERENCES Trabajador(id);

ALTER TABLE Venta 
ADD CONSTRAINT fk_idConsumidor_Venta FOREIGN KEY (idConsumidor) 
REFERENCES Consumidor(id);

ALTER TABLE HistorialVenta
ADD CONSTRAINT fk_idTrabajador_HistorialVenta FOREIGN KEY (idTrabajador) 
REFERENCES Trabajador(id);

ALTER TABLE HistorialVenta
ADD CONSTRAINT fk_idVenta_HistorialVenta FOREIGN KEY (idVenta) 
REFERENCES Venta(id);

ALTER TABLE Pedido
ADD CONSTRAINT fk_idConsumidor_Pedido FOREIGN KEY (idConsumidor)
REFERENCES Consumidor(id);

ALTER TABLE Pedido
ADD CONSTRAINT fk_idTrabajador_Pedido FOREIGN KEY (idTrabajador)
REFERENCES Trabajador(id);


