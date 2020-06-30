<?php
//include("conexion.php"); 
//registrar usuario
if (isset($_POST["registrar"])) {
	$nombre = mysqli_real_escape_string($conexion,$_POST["nombre"]);
	$correo = mysqli_real_escape_string($conexion,$_POST["correo"]);
	$usuario = mysqli_real_escape_string($conexion,$_POST["user"]);
	$password = mysqli_real_escape_string($conexion,$_POST["pass"]);
	$password_encriptada = sha1($password);
	$sqluser = "SELECT idusuarios FROM usuarios WHERE usuario = '$usuario'";
	$resultadouser = $conexion->query($sqluser);
	$filas = $resultadouser->num_rows;
	if ($filas > 0) {
		echo "<script>
		alert('El usuario ya existe');
		window.location = 'Registrarte.php';
		</script>";
	}else{
		$sqlusuario = "INSERT INTO usuarios(Nombre, Correo, Usuario, Password)VALUES ('$nombre','$correo', '$usuario', '$password_encriptada')";
		$resultadousuario = $conexion->query($sqlusuario);
		if ($resultadousuario > 0) {
			echo "<script>
			alert('Registro exitoso');
			window.location = 'Registrarte.php';
			</script>";
		}else{
			echo "<script>
			alert('No pudiste registrarte ');
			window.location = 'Registrarte.php';
			</script>";
		}
	}
}
?>
<!DOCTYPE>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	<meta name="viweport" content="width=device-width, initial-scale=1">
	<title>Venta de aplicaciones web, moviles (android) y para pc.</title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/8600d7597d.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="Estilos.css">
</head>
<body>
	<nav id="navbar">
		<div class="Myicon"><i class="fas fa-bars" aria-hidden="true"></i></div>
		<ul class="listas">
			<li><a href="sobremi.php">Sobre mi</a></li>
			<li><a href="contacto.php">Contacto</a></li>
			<li><a href="Registrarte.php">Registrarte</a></li>
			<li><a href="Index.php">Iniciar sesión</a></li>
		</ul>
	</nav>
	<form class="formulario" action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
    	<h1 class="registrartehuno">Registrate</h1>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="nombre" placeholder="Nombre completo" required>     
     </div>
         
     <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="email" name="correo" placeholder="Correo Electronico" required>
     </div>

     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="user" placeholder="Usuario" required>    
     </div>

     <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name="pass" placeholder="Contraseña" required>
     </div>

         <input type="submit" name="registrar" value="Registrarse" class="button">
         <p>¿Ya tienes una cuenta? <a class="link" href="Iniciarsesion.php">Iniciar Sesion</a></p>
     </div>
    </form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="script.js">
	</script>
</body>
</html>