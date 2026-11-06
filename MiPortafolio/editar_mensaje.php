<?php
require 'conexion.php';

$id      = (int) $_POST['id'];
$nombre  = $_POST['nombre'];        /*  */
$correo  = $_POST['email'];         
$mensaje = $_POST['mensaje'];

$stmt = $conexion->prepare("UPDATE mensajes SET Nombre = ?, Correo = ?, Mensaje = ? WHERE id = ?");
$stmt->bind_param("sssi", $nombre, $correo, $mensaje, $id);

if ($stmt->execute()) {
   echo"<script>
        alert('Mensaje actualizado correctamente.');
        window.location.href = 'index.php';
        </script>";
} else {
    echo "<script>
        alert('Error al actualizar el mensaje.');
        window.location.href = 'index.php';
        </script>";
}
exit;
?>