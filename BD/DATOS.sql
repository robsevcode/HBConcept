USE HBCONCEPT;

select * from cuentausuario;
select * from libreta;
select * from tarjeta_bancaria;
select * from Carrito;
select * from factura;
select * from contacto;
select * from solicitudPresupuesto;
select * from trabajoMadera;

INSERT INTO cuentausuario values('Aldo', 'Enrique', 'Gallegos', 'Morales', 'Aldo@gmail.com', 12345678, 'Playas', 'Pacifico', 09, '6641982246', 'Tom');
INSERT INTO cuentausuario values('Leslie', null, 'Gutierrez', 'Barajas', 'Leslie@gmail.com', 12345678, 'Bugambilias', 'Arcos', 12, '6646290090', 'Aldo');

INSERT INTO libreta values(01,'Calavera','Nogal','Cuadriculada','Azul','280.00','Leslie@gmail.com');
INSERT INTO libreta values(02,'Campbell','Cherry','Cuadriculada','Gris','280.00','Aldo@gmail.com');
INSERT INTO libreta values(03,'Piña','Cherry','Cuadriculada','Amarillo','280.00','Aldo@gmail.com');

INSERT INTO Carrito values(01,01,'Aldo@gmail.com');
INSERT INTO Carrito values(02,03,'Leslie@gmail.com');

INSERT INTO tarjeta_bancaria values(01,'Cuenta Paypal','Alejandra Brughera Perez','1234567891234567','2018-09-12','292', 'Alejandra@gmail.com');

set @usuario="Leslie@gmail.com";
set @contra="12345678";
SELECT * FROM cuentausuario where Correo=@usuario AND Password_usuario =@contra;

set @usuario="Aldo@gmail.com";
set @contra="12345678";
SELECT * FROM cuentausuario where Correo=@usuario AND Password_usuario =@contra;

DROP PROCEDURE IF EXISTS VISTAS;
DELIMITER *
CREATE PROCEDURE VISTAS(in id_Usuario VARCHAR(45))
BEGIN
	SELECT carrito.id_Carrito , carrito.id_Libreta , carrito.id_Usuario
	from carrito
	join libreta
	on libreta.id_Libreta = carrito.id_Libreta
	join cuentausuario
	on cuentausuario.Correo = carrito.id_Usuario

	where cuentausuario.Correo = id_Usuario;

END
*

DROP PROCEDURE IF EXISTS VERLIBRETA;
DELIMITER *
CREATE PROCEDURE VERLIBRETA(in id_Libreta int)
BEGIN
	SELECT Libreta.Material, Libreta.Color, Libreta.Cortado, Libreta.Estilo_Hojas
	from Libreta
	where Libreta.id_Libreta = id_Libreta;

END
*

CALL VISTAS('Aldo@gmail.com');
CALL VERLIBRETA(1);