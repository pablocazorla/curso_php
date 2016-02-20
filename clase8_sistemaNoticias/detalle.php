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
			margin: 10px 0;
			background-color: #FFF;
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
		<a href="index.php">Volver a la lista.</a>
		<?php
			if (isset($_GET['id'])) {
				$i = $_GET["id"];
			}else{
				$i = '1';
			}
			require_once('classes/conexion.php');

			$conexion = new Conexion();
			$sql = 'select * from noticias where id = ' . $i;
			$detail = $conexion->get($sql);

			

			

				$text = '<div class="noticia">';

				$text .= '<h2>'.$detail[0]['titulo'] . '</h2>';
				$text .= '<p class="small">'.$detail[0]['fecha'].', '. $detail[0]['hora'].'</p>';
				$text .= '<p>'.$detail[0]['detalle'].'</p>';



				$sql = 'select * from comentarios where id_noticia = ' . $detail[0]['id'];
				$comments = $conexion->get($sql);
				$com_length = count($comments);
				$text .= '<div class="comentarios">';
					$text .= '<h4>'.$com_length. ' comentarios</h4>';
				for($j=0;$j<$com_length;$j++){
					$text .= '<div class="comm">';
					$text .= '<p><a href="mailto:'.$comments[$j]['correo'].'">'.$comments[$j]['nombre'].'</a> dice:<span class="small pull-right">'.$comments[$j]['fecha'].'</span></p>';
					$text .= '<p>'.$comments[$j]['mensaje'].'</p>';
					$text .= '</div>';
				}


				$text .= '<hr><h4>Comentar</h4><form action="post_comentario.php" method="post">';

				$text .= '<input type="hidden" name="idnoticia-comment" value="'.$i.'"/>';

				$text .= '<p><label>Nombre</label><br><input type="text" name="name-comment" value=""/></p>';

				$text .= '<p><label>Email</label><br><input type="email" name="email-comment" value=""/></p>';

				$text .= '<p><label>Mensaje</label><br><textarea name="message-comment"></textarea></p>';

				$text .= '<p><input type="submit" name="submit-comment" value="Enviar"/></p>';

				$text .= '</form>';

				$text .= '</div>';


				$text .= '</div>';
				echo $text;
		

		?>
				
	</div>	
</body>
</html>