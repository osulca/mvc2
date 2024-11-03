<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="username" placeholder="Ingrese Username"><br>
	<input type="password" name="password" placeholder="Ingrese Contraseña"><br>
	<input type="text" name="nombres" placeholder="Ingrese Nombres"><br>
	<input type="text" name="apellidos" placeholder="Ingrese Apellidos"><br>
	<select name="tipo">
		<option value="estudiante">Estudiante</option>
		<option value="profesor">Profesor</option>
	</select><br>
	<input type="submit" value="guardar">
</form>
<?php

	if(!empty($_POST)){
		$username = $_POST["username"];
		$password = $_POST["password"];
		$nombres = $_POST["nombres"];
		$apellidos = $_POST["apellidos"];
		$tipo = $_POST["tipo"];
 	
		require_once("controladores/UsuarioController.php");
		$uc = new UsuarioController();
		echo $uc->guardar($username, $password, $nombres, $apellidos, $tipo, 1);
	}