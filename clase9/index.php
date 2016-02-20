<!doctype HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Clase 9</title>		
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
		
		<div class="row">
			<div class="col-xs-6">
				<h2>Registración</h2>
				<form action="registrar.php" method="post">
					<p>
						<label>Nombre</label><br>
						<input type="text" value="" name="name-reg"/>
					</p>
					<p>
						<label>Usuario</label><br>
						<input type="text" value="" name="user-reg"/>
					</p>
					<p>
						<label>Password</label><br>
						<input type="password" value="" name="pass-reg"/>
					</p>
					<p>
						<input type="submit" value="Registrar"/>
					</p>					
				</form>
			</div>
			<div class="col-xs-6">
				<h2>Login</h2>
				<form action="login.php" method="post">					
					<p>
						<label>Usuario</label><br>
						<input type="text" value="" name="user-log"/>
					</p>
					<p>
						<label>Password</label><br>
						<input type="password" value="" name="pass-log"/>
					</p>
					<p>
						<input type="submit" value="Login"/>
					</p>
					<?php 
						if(isset($_GET['log'])){
							if($_GET['log'] == 'error'){
					?>
					<p style="color:red">
						El usuario no existe
					</p>
					<?php 
							}
						}
					?>
									
				</form>
			</div>
		</div>

		
				
	</div>	
</body>
</html>