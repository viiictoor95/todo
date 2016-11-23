<?php

	include('config.inc.php');

	if (!empty($_POST)) {

		if (!empty($_POST['email']) && !empty($_POST['password'])) {
		

	$email=$_POST['email'];
	$password=$_POST['password'];

	//comprueba BD

	$db=conecta($dbhost,$dbuser,$dbpassw,$dbname);
	$sql="SELECT * FROM users";
	$res=$db->query($sql);
	while ($row=$res->fetch_array()) {
		if ($email==$row['email'] && $password==$row['passwd']) {

			header('Location: menu.php');

		}



	}
}

}

?>



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="steelsheet" type="text/css" href="public/css/boostrap.min.css">
<style type="text/css">
	
#caja1{

	position: absolute;
	left: 280px;
	top: 150px;
	border-radius: 5px;
	border-width: 5px;
	border: solid;



}




</style>


</head>
<body>

<div id="caja1">

	<form method="POST" action="<?=$_SERVER['PHP_SELF'];?>">

		<p><label for="nom">
				Usuari: <input type="text" name="email">
		</label></p>
			<p><label for="nom">
				Contrasenya: <input type="password" name="password">
			</label></p>
		<p>
		<input type="submit" value="entra">
		</p>

	</form>

	</div>
</body>
</html>