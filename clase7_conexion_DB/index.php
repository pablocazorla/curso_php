<!doctype HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Clase 7: Conexion a DB</title>		
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="../common/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="../common/css/bootstrap-theme.min.css">
	<link type="text/css" rel="stylesheet" href="../common/css/style.css">
</head>
<body>
	<div class="container">
		<h1>Artículos</h1>
		
		<?php
			require_once('classes/conexion.php');

			$conexion = new Conexion();

			$articles = $conexion->getTable('articulos');

			// $articles es un array. Lo recorro y voy renderizando

			for($i=0;$i<count($articles);$i++){
				$text = '<h3>'.$articles[$i]['titulo'] . '</h3>';
				$text .= '<p class="small">'.$articles[$i]['fecha'].'</p>';
				$text .= '<p>'.$articles[$i]['detalle'].'</p>';
				$text .= '<hr>';
				echo $text;
			}

		?>
				
	</div>	
</body>
</html>