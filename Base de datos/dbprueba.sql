create table persona
(
	idpersona serial primary key,
	documento varchar(10),
	nombre varchar(30),
	apellido varchar(30),
	direccion varchar(50),
	celular varchar(10)
)