<!doctype HTML>
<html>
<head>
	<title>PHP Clase 1</title>
	<link rel="stylesheet" href="../css/bootstrap.css">
	<link rel="stylesheet" href="../css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<header class="navbar navbar-static-top bs-docs-nav main-header">
  <div class="container">   
      <div class="brand">Curso PHP </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="http://expo.getbootstrap.com">Expo</a></li>
        <li><a href="http://blog.getbootstrap.com">Blog</a></li>
      </ul>
  </div>
</header>
<article class="main-article container">
<h2>Clases</h2>
<?php
	require_once('class/person.php');

	$persona = new person();

	$persona->init('Pablo Cazorla');



	echo $persona->listarNombres();









?>
</article>
</body>
</html>