<?php
include("conexion.php"); 
session_start();
	if (isset($_SESSION['id_usuario'])) {
		header("Location: Inicio.php");
	}


	if (isset($_POST["ingresar"])) {
		$usuario = mysqli_real_escape_string($conexion,$_POST["user"]);
		$password  = mysqli_real_escape_string($conexion,$_POST["pass"]);
		$password_encriptada = sha1($password);
		$sql = "SELECT idusuarios FROM usuarios WHERE usuario = '$usuario' AND password= '$password_encriptada' ";
		$resultadp = $conexion->query($sql);
		$rows = $resultadp->num_rows;
		if ($rows > 0) {
			$row = $resultadp->fetch_assoc();
			$_SESSION['id_usuario'] = $row["idusuarios"];
			header("Location: Inicio.php");
		}else{
			echo "<script>
				alert('Usuario o password incorrectos ');
				window.location = 'Index.php';
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
	<div id="content">
		<header>
			   	<h1>Venta de aplicaciones.</h1>
			   	<small>Para pc, web y moviles (android).</small>
	    </header>
	    <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST" class="formulario">    
		    <h1 class="registrartehuno">Iniciar sesión</h1>
		     <div class="contenedor">
		         
		         <div class="input-contenedor">
		         <i class="fas fa-user icon"></i>
		         <input type="text" name="user" placeholder="Usuario" required>
		         
		         </div>
		         
		         <div class="input-contenedor">
		        <i class="fas fa-key icon"></i>
		         <input type="password" name="pass" placeholder="Contraseña" required>
		         
		         </div>
		         <input type="submit" name="ingresar" value="Entrar" class="button">
		         <p>¿No tienes una cuenta? <a class="link" href="Registrarte.php">Registrate </a></p>
		     </div>
    	</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="script.js">
	</script>
</body>
</html>