<?php
include("conexion.php");
session_start();
if (!isset($_SESSION['id_usuario'])) {
	header("Location: Index.php");
}
$iduser =  $_SESSION['id_usuario'];

$sql = "SELECT idusuarios, Nombre FROM usuarios WHERE idusuarios = '$iduser'";
$resultado = $conexion->query($sql);
$row = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible"content="IE=edge">
	<meta name="viweport" content="width=device-width, initial-scale=1">
	<title>Inicio del administrador</title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/8600d7597d.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="Estilos.css">
</head>
<body>
	<nav id="navbar">
		<div class="Myicon"><i class="fas fa-bars" aria-hidden="true"></i></div>
		<ul class="listas">
			<li>
				<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<span class="user-info">
											<?php echo utf8_decode($row['Nombre']);?>
								</span>

								<i class="ace-icon fa fa-caret-down"></i>
							</a>
				<a href="salir.php"><i class="ace-icon fa fa-power-off"></i>Salir</a>
			</li>
		</ul>
	</nav>
	<div id="content">
			<header>
			   	<h1>En venta</h1>
			   	<small></small>
	       </header>
			<section id="principal" >
				<h2>
					<ul class="listas">
						<li><a href="">Moviles</a></li>
						<li><a href="">Web</a></li>
						<li><a href="">Escritorio</a></li>
						<li><a href="">Ordenar especifico:</a></li>
					</ul>
				</h2>
			</section>
			<section id="secundario">
				<h2></h2>
				<p></p>
			</section >	
			<aside>
				<h2></h2>
				<p></p>
			</aside>
			<footer>
				<p align="center">Copyright Programación (c) 2020</p>
			</footer>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="script.js">
	</script>
</body>
</html>