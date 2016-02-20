<?php 
	require_once('classes/conexion.php');

	$con = new Conexion();

	$usr = 'nombre varchar(150),user varchar(80),pass varchar(80)';
	$con->createTable('usuarios',$usr);
?>