<?php
require 'conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$mensaje = $_POST['mensaje'];

$actualizar = $conexion->query("
    UPDATE mensajes 
    SET Nombre='$nombre', Correo='$correo', Mensaje='$mensaje'
    WHERE id=$id
");

if($actualizar){
    header("Location: admin.php?actualizado=1");
} else {
    echo "Error al actualizar el mensaje.";
}
?>
