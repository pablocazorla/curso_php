<?php 
	require_once('classes/conexion.php');

	$con = new Conexion();

	$not = 'titulo varchar(200),detalle text,fecha date,hora time';
	$con->createTable('noticias',$not);

	$comm = 'nombre varchar(200),correo varchar(50),mensaje text,fecha date,hora time,id_noticia int';
	$con->createTable('comentarios',$comm);


	// Set noticias
	$con->set("
		insert into noticias values (null,'Lorem ipsum dolor','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas fringilla vehicula nibh, et fermentum diam tristique sed. Etiam malesuada sodales leo vitae condimentum. Nulla elementum malesuada sapien. Vivamus suscipit dui quis lacus accumsan, non auctor metus lobortis. Sed lacinia elit vel tortor rutrum mattis. Fusce ligula orci, lacinia nec sodales interdum, tincidunt in enim. Maecenas condimentum lacus risus, at rhoncus enim euismod a.',now(),now())");
	$con->set("
		insert into noticias values (null,'Fusce elementum sed','Fusce elementum sed elit sit amet consequat. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam mi purus, interdum et semper ut, fringilla in nunc. Ut nec mi ut nisl commodo viverra. Vestibulum semper laoreet sem, tincidunt elementum tortor auctor sed. Suspendisse volutpat ex dolor, sed vestibulum est placerat ut. Sed pulvinar mi eget egestas scelerisque. Vivamus nulla ex, placerat nec nibh ac, auctor sollicitudin justo. Quisque rutrum turpis a posuere mattis. Proin malesuada commodo blandit. Pellentesque nibh ligula, mattis tempus dui id, pulvinar efficitur dui. Proin pulvinar porttitor luctus. Aliquam erat volutpat.',now(),now())");
	$con->set("
		insert into noticias values (null,'Nulla lobortis erat','Nulla lobortis erat quis magna viverra, nec consequat nisl elementum. Ut nec suscipit libero. Vivamus eget vulputate tellus. Curabitur sodales fringilla quam, in euismod neque euismod vitae. In lacinia lectus purus, in porta ante luctus vitae. Vestibulum fermentum mi erat. Suspendisse commodo magna efficitur lorem vulputate scelerisque. Quisque sit amet sollicitudin ante, a varius turpis. Aliquam dolor nunc, ullamcorper sit amet lacus vitae, lobortis faucibus urna. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum venenatis metus eget tortor tempor, id condimentum nisl tristique. Sed eget metus lacinia, placerat odio quis, maximus sem. In lacinia lacinia risus at blandit.',now(),now())");
	$con->set("
		insert into noticias values (null,'In tortor neque','In tortor neque, porttitor eu pretium sed, viverra at purus. Vestibulum sagittis laoreet odio a porttitor. Nam ligula justo, fringilla eget turpis id, sollicitudin fringilla magna. Integer suscipit, tellus sit amet euismod cursus, ex enim gravida eros, sit amet rhoncus lorem lacus in risus. Donec tristique lorem id nisi condimentum suscipit. Nam vitae fringilla diam, ut mattis mi. Sed consectetur mattis nisi, bibendum elementum erat tempus eget.',now(),now())");
	$con->set("
		insert into noticias values (null,'Nunc eget interdum nisl','Nunc eget interdum nisl. Cras ut felis vitae est blandit sagittis non ut erat. Etiam aliquam justo sit amet velit egestas, ut condimentum nibh bibendum. Aliquam venenatis laoreet nisi id faucibus. Vivamus quis rhoncus arcu. Sed eget rutrum sem, nec elementum ante. Cras ut ultrices enim. Praesent ac pretium neque. Duis vitae orci ante. Nullam efficitur scelerisque nibh, eget finibus odio convallis nec. Nulla eget neque in nisi efficitur mattis. Nullam feugiat, orci ut dignissim pellentesque, purus risus scelerisque nibh, at eleifend ante orci ultrices lacus. Duis imperdiet lorem sit amet nunc mollis convallis. Etiam porta fermentum magna ut sollicitudin. Vivamus sed lacus quis leo dapibus maximus. Nam sed neque leo.',now(),now())");

//Set comentarios

$con->set("insert into comentarios values
	(null,'Pedro Vargas','pedro@gmail.com','lorem sit amet nunc mollis convallis',now(),now(),1)");

$con->set("insert into comentarios values
	(null,'Mariano Moreno','mariano@gmail.com','Nam sed neque leo',now(),now(),1)");

$con->set("insert into comentarios values
	(null,'Jose San Martín','jose@gmail.com','Vivamus sed lacus quis leo dapibus maximus',now(),now(),2)");

$con->set("insert into comentarios values
	(null,'Manuel Belgrano','manuel@gmail.com','Aliquam venenatis laoreet nisi id faucibus',now(),now(),2)");

$con->set("insert into comentarios values
	(null,'Roberto Sanchez','sanchez@gmail.com','tellus sit amet euismod cursus',now(),now(),3)");

$con->set("insert into comentarios values
	(null,'Claudio Garcia','claudio@gmail.com','Praesent ac pretium neque',now(),now(),5)");












?>