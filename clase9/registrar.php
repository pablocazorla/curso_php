<?php
	require_once('classes/conexion.php');

	$conexion = new Conexion();

	$sql = 'insert into usuarios values
	(null,"'.$_POST['name-reg'].'","'.$_POST['user-reg'].'","'.$_POST['pass-reg'].'")';

	$newComment = $conexion->get($sql);

	header('Location: index.php');


?>