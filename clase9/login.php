<?php
	session_start();
	// Debe ir primero que cualquier cosa


	require_once('classes/conexion.php');

	$conexion = new Conexion();

	// Buscamos primero el usuario

	$sql = 'select user from usuarios where user = "'.$_POST['user-log'].'"';
	

	$exist = $conexion->get($sql);
	if( count($exist) <= 0){
		header('Location: index.php?log=error');
	}

//	header('Location: logged.php');


?>