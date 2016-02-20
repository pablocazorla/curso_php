<?php
	require_once('classes/conexion.php');

	$conexion = new Conexion();

	$sql = 'insert into comentarios values
	(null,"'.$_POST['name-comment'].'","'.$_POST['email-comment'].'","'.$_POST['message-comment'].'",now(),now(),'.$_POST['idnoticia-comment'].')';

	$newComment = $conexion->get($sql);

	header('Location: detalle.php?id='.$_POST['idnoticia-comment']);















?>