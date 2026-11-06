<?php
require 'conexion.php';

if (!isset($_GET['id'])) {
    header("Location: admin.php"); /* Verifica si llego el id que seleccioné */
    exit;
}

$id = (int) $_GET['id']; /* Convierte el id a entero  */

$stmt = $conexion->prepare("SELECT id, Nombre, Correo, Mensaje FROM mensajes WHERE id = ?"); /* Se prepara la consulta, es la plantilla */
$stmt->bind_param("i", $id); /* Llena el "hueco" que es el id*/
$stmt->execute();   /* ejecuta la consulta */
$datos = $stmt->get_result()->fetch_assoc(); /* se guarda la consulta y lo convierte en arreglo con fetch */

if (!$datos) {
    echo "Mensaje no encontrado.";
    exit;   /* Si el id no existe muestra este mensaje */
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Mensaje</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="./Css/estilos.css">

</head>
  <header>
    <h1>Zona Administración</h1>
    <p>Mensajes Recibidos</p>
  </header>
    <nav>
    <a href="index.php" title="Volver al portafolio">  <i class="bi bi-house"></i></a>
    <a href="admin.php" title="Volver a editar"> <i class="bi bi-arrow-clockwise"></i></a>
  </nav>
  
<body>
      <main class="main-admin">
    <section class="seccion-admin">
      <div class="tarjeta tarjeta-form">
        <h2>Editar Mensaje</h2>
        <form action="editar_mensaje.php" method="POST">
           <!-- Manda al archivo de editar mensaje -->

          <input type="hidden" name="id" value="<?php echo $datos['id']; ?>"> <!-- El value es para rellenar ese espacio con la informcaion de la base de datos -->

          <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo $datos['Nombre']; ?>">
          </div>

          <div class="campo">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" value="<?php echo $datos['Correo']; ?>">
          </div>

          <div class="campo">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="6"><?php echo $datos['Mensaje']; ?></textarea>
          </div>

          <button type="submit">Actualizar Mensaje</button>
        </form>
        
      </div>
    </section>
  </main>
   <footer>
    <p>© 2026 Mi Portafolio web</p>
    <p>Práctica de Programación todos los derechos reservados</p>
  </footer>
    
</body>
</html>