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
	<form class="formulario" action="eviar.php" method="POST">
    	<h1 class="registrartehuno">Contacto</h1>
    	<small></small>
     <div class="contenedor">
     
     <div class="input-contenedor">
         <i class="fas fa-user icon"></i>
         <input type="text" name="nombre" placeholder="Nombre" required>     
     </div>
         
     <div class="input-contenedor">
         <i class="fas fa-envelope icon"></i>
         <input type="email" name="correo" placeholder="Correo Electronico" required>
     </div>

     <div class="input-contenedor">
         <textarea name="mensaje" placeholder="Escriba el mensaje" required></textarea>    
     </div>
         <input type="submit" name="registrar" value="Enviar" class="button">
         <p>El programador se comunicara con usted, una vez que haya enviado el formulario.</p>
         <p>Se enviara a aleexfr2003@gmail.com</p>
     </div>
    </form>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="script.js">
	</script>
</body>
</html>