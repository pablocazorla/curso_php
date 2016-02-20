<!doctype HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Clase 8: sistema de Noticias</title>		
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="../common/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="../common/css/bootstrap-theme.min.css">
	<link type="text/css" rel="stylesheet" href="../common/css/style.css">
	<style type="text/css">
		body{
			background-color: #EEE;
		}
		.noticia{
			border: 1px solid #DDD;
			padding: 0 15px 10px;
			margin-bottom: 10px;
			background-color: #FFF;
			-webkit-transition:box-shadow .2s;
			-ms-transition:box-shadow .2s;
			transition:box-shadow .2s;
		}
		.noticia:hover{
			box-shadow: 0 2px 6px rgba(0,0,0,.2);
		}
		.small{
			color: #999;
		}
		.comentarios{
			border-top: 1px solid #DDD;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Noticias</h1>
		
		<?php
			require_once('classes/conexion.php');

			$conexion = new Conexion();

			$sql = 'select id,titulo,fecha from noticias';
			$articles = $conexion->get($sql);

			// $articles es un array. Lo recorro y voy renderizando

			for($i=0;$i<count($articles);$i++){

				$text = '<div class="noticia">';

				$text .= '<h3><a href="detalle.php?id='.$articles[$i]['id'].'">'.$articles[$i]['titulo'] . '</a></h3>';
				$text .= '<p class="small">'.$articles[$i]['fecha'].'</p>';

				$text .= '</div>';
				echo $text;
			}
		?>
				
	</div>	
</body>
</html>