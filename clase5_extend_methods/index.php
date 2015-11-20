<!doctype HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Clase 5: extender métodos</title>		
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="../common/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="../common/css/bootstrap-theme.min.css">
	<link type="text/css" rel="stylesheet" href="../common/css/style.css">
</head>
<body>
	<div class="container">
		<h1>Pagina</h1>
		
		<?php
			require_once('classes/pagina.php');

			$su = new Suma(2,7,'titular');

			$su->operar();

			$su->render();

		?>
				
	</div>	
</body>
</html>