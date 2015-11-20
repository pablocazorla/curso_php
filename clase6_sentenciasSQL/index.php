<!doctype HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Clase 6: sentencias SQL</title>		
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="../common/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="../common/css/bootstrap-theme.min.css">
	<link type="text/css" rel="stylesheet" href="../common/css/style.css">

</head>
<body>
	<div class="container">
		<h1>SQL sentencias</h1>
<pre class="prettyprint">
/* Crear base de datos */

create database curso_php

-------------------------------------------
/* Usar base de datos */

use curso_php

----------------------------
/* Crear tabla */

create table articulos (
id int not null auto_increment primary key,
titulo varchar (255),
detalle text,
fecha date
)

create table comentarios (
id int not null auto_increment primary key,
nombre varchar (200),
email varchar (200),
telefono varchar (30),
comentario text,
id_articulo int
)

create table amigos (
id int not null auto_increment primary key,
nombre varchar (200),
telefono varchar (30),
correo varchar (200),
fecha date,
hora time
)

----------------------------------
/* Para ver el contenido de un campo de una tabla */
select titulo from articulos

/* Para ver el contenido de toda la tabla, uso asterisco */
select * from articulos

/* Para ver el contenido de varios campo de una tabla */
select titulo,detalle from articulos

---------------------------------
/* Para contar los registros de una tabla, el asterisco significa para todos los campos */
select count(*) from articulos

/* Para contar los registros y darle un nombre al resultado de una tabla */
select count(nombre) as cantidad from articulos

---------------------------------
/* Insertar un registro en la tabla */

/* Primero necesito saber cómo es la tabla */
describe articulos

/* Luego inserto */
insert into amigos
/* Esto puede hacerse o no, si van llenos todos los campos */
(id,nombre,telefono,correo,fecha,hora)
values
(null,'Pablo Cazorla','261-5581771','pcazorla@kurv.co',now(),now())

/* Puedo insertar metiendo solo los campos que quiero: */
insert into amigos
(nombre)
values
('Claudio García')

------------------------------------
/* Filtrar datos */
select * from amigos where nombre = 'Pablo Cazorla'
select * from amigos where id < 3 and id > 1
select * from amigos where id <> 2

----------------------------
/* Borrar registros */
delete from amigos where id = 5

---------------------------
/* Ordenar registros */
select * from amigos order by id desc
select * from amigos order by id asc

select * from amigos order by nombre /* alfabeticamente*/

-----------------------------------
/* Modificar un registro */
update amigos set 
nombre='Pedro Andrade',
telefono='011-45612654'
where id = 4 /* Ojo, que hay que filtrar que registro/s
 cambio */

update amigos set 
correo='pedro@yahoo.com'
where nombre = 'Pedro Andrade' /* Ojo, que hay que filtrar que registro/s
 cambio */

 ----------------------------------
 /* Tablas interrelacionadas */
 /* Ej: articulos y comentarios */
 select * from comentarios where id_articulo = 2

 ----------------------------------
 /* Tablas referenciadas entre sí */
 /* as refiere a un 'alias' que le ponemos a la tabla */

/* Modo 1, mas eficiente */
select * from articulos as ar
join
comentarios as co
on
ar.id = co.id_articulo

/* Modo 2, más usado */
select * from articulos,comentarios
where articulos.id = comentarios.id_articulo
</pre>					
	</div>
<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js"></script>
</body>
</html>