SET FOREIGN_KEY_CHECKS = 0;
DROP DATABASE IF EXISTS HBCONCEPT;
CREATE DATABASE IF NOT EXISTS HBCONCEPT;
USE HBCONCEPT;

CREATE TABLE IF NOT EXISTS cuentausuario(
    Nombre_1 VARCHAR(45) NOT NULL,
    Nombre_2 VARCHAR(45) NULL,
    Apellido_paterno VARCHAR(45) NOT NULL,
    Apellido_materno VARCHAR(45) NOT NULL,
    Correo VARCHAR(45) NOT NULL PRIMARY KEY,
    Password_usuario VARCHAR(8)  NOT NULL,
    Fraccionamiento VARCHAR(45) NOT NULL,
    Colonia VARCHAR(45) NOT NULL,
    N_casa INT NOT NULL,
    Telefono VARCHAR(10) NOT NULL,
	Pregunta VARCHAR(45) NOT NULL
);

CREATE TABLE IF NOT EXISTS libreta(
	id_Libreta INT AUTO_INCREMENT PRIMARY KEY,
	Cortado VARCHAR(45) NOT NULL,
	Material VARCHAR(45) NOT NULL,
	Estilo_Hojas VARCHAR(45) NOT NULL,
	Color VARCHAR (45) NOT NULL,
	Precio INT NOT NULL,
	id_Usuario VARCHAR(45),
	FOREIGN KEY (id_Usuario) REFERENCES cuentausuario (Correo)
);

CREATE TABLE IF NOT EXISTS tarjeta_bancaria(
    id_Tarjeta INT AUTO_INCREMENT PRIMARY KEY,
	Tipo_Cuenta VARCHAR(45) NOT NULL,
	Nombre_Titular VARCHAR(45) NOT NULL,
    Numero_tarjeta VARCHAR(16) NOT NULL,
    Fecha_Vencimiento VARCHAR(45) NOT NULL,
    CVV VARCHAR(3) NOT NULL,
    id_Usuario VARCHAR(45),
    FOREIGN KEY (id_Usuario) REFERENCES cuentausuario (Correo)
);

CREATE TABLE IF NOT EXISTS carrito(
    id_Carrito INT AUTO_INCREMENT PRIMARY KEY,
	id_Libreta INT,
	id_Usuario VARCHAR(45),
	FOREIGN KEY (id_Libreta) REFERENCES libreta (id_Libreta),
    FOREIGN KEY (id_Usuario) REFERENCES cuentausuario (Correo)
);

CREATE TABLE IF NOT EXISTS solicitarCortado(
    id_Trabajo INT AUTO_INCREMENT PRIMARY KEY,
	Nombre_Completo VARCHAR(45) NOT NULL,
	Correo_Electronico VARCHAR(45) NOT NULL,
	Telefono VARCHAR(45) NOT NULL,
	Nombre_Producto VARCHAR(45) NOT NULL,
	Descripcion_Propuesta VARCHAR(45) NOT NULL
);

CREATE TABLE IF NOT EXISTS solicitudPresupuesto(
    id_Pedidos INT AUTO_INCREMENT PRIMARY KEY,
	Nombre_Completo VARCHAR(45) NOT NULL,
	Correo_Electronico VARCHAR(45) NOT NULL,
	Telefono VARCHAR(45) NOT NULL,
	Material VARCHAR(45) NOT NULL,
	Estilo_Hojas VARCHAR(45) NOT NULL,
	Color VARCHAR(45) NOT NULL,
	Cantidad VARCHAR(45) NOT NULL
);

CREATE TABLE IF NOT EXISTS trabajoMadera(
    id_Trabajo INT AUTO_INCREMENT PRIMARY KEY,
	Nombre_Completo VARCHAR(45) NOT NULL,
	Correo_Electronico VARCHAR(45) NOT NULL,
	Telefono VARCHAR(45) NOT NULL,
	Nombre_Producto VARCHAR(45) NOT NULL,
	Descripcion_Propuesta VARCHAR(45) NOT NULL
);

CREATE TABLE IF NOT EXISTS contacto(
    id_Contactar INT AUTO_INCREMENT PRIMARY KEY,
	Nombre_Completo VARCHAR(45) NOT NULL,
	Correo_Electronico VARCHAR(45) NOT NULL,
	Objetivo VARCHAR(45) NOT NULL,
	Mensaje VARCHAR(45) NOT NULL
);

CREATE TABLE IF NOT EXISTS factura(
    id_Factura INT AUTO_INCREMENT PRIMARY KEY,
    Fecha_transaccion VARCHAR(45),
    id_Usuario VARCHAR(45),
	id_Carrito INT,
	FOREIGN KEY(id_Usuario) REFERENCES cuentausuario (Correo),
	FOREIGN KEY(id_Carrito) REFERENCES carrito (id_Carrito),
	Estado VARCHAR(1)
);