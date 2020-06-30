<?php
$destino = "aleexfr2003@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre . "\nCorreo: " . correo . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("Location:contacto.php");
?>