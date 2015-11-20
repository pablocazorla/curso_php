<!doctype HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Clase 3: Integrate objects</title>		
	<!-- CSS -->
	<link type="text/css" rel="stylesheet" href="../common/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="../common/css/bootstrap-theme.min.css">
	<link type="text/css" rel="stylesheet" href="../common/css/style.css">
</head>
<body>	
		
		<?php
			require_once('classes/pagina.php');
			$pag = new pagina('CABECERA', 'PIE');
			$pag->setLine('Un nuevo párrafo.');
			$pag->setLine('Otro.');
			$pag->setLine('Otro más.');
			$pag->setLine('Otro más.');
			$pag->setLine('Otro más.');
			$pag->setLine('Otro más.');
			$pag->setLine('Otro más.');
			$pag->setLine('Otro más.');
			$pag->setLine('Otro más.');
			$pag->setLine('Otro más.');
		?>
		<div class="container"><?php $pag->render(); ?></div>
	
</body>
</html>