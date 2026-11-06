<?php
require 'conexion.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $stmt = $conexion->prepare("DELETE FROM mensajes WHERE id = ?");
    $stmt->bind_param("i", $id);
  if  ($stmt->execute()){
            echo "<script>
            alert('Mensaje borrado');
            window.location.href = 'admin.php';
        </script>";
        exit;
  }
}

echo "<script>
    alert('No se pudo eliminar el mensaje');
    window.location.href = 'admin.php';
</script>";
exit;
?>

