<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Zona Administración</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="./Css/estilos.css">
</head>
  

<body>
  <header>
    <h1>Zona Administración</h1>
    <p>Mensajes Recibidos</p>
  </header>

  <nav>
    <a href="index.php" title="Volver al portafolio"><i class="bi bi-house"></i></a>
  </nav>

  <main class="main-admin">
    <section class="seccion-admin">
      <div class="tarjeta">
        <h2>Mensajes Recibidos</h2>

        <div class="tabla-contenedor">
          <table class="tabla">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Mensaje</th>
                <th>Fecha</th>
                <th>Opciones</th>

              </tr>
            </thead>
            <tbody>
              <?php
              require 'consulta_mensajes.php'; /* Aqui se manda a llamar el archivo consulta_mensajes.php para que se ejecute la consulta y se muestren los mensajes en la tabla */
              $rsMensajes = consultaMensajes(); /* Aqui se manda a llamar la funcion consultaMensajes() que esta en el archivo consulta_mensajes.php para que se ejecute la consulta y se muestren los mensajes en la tabla */
              
              while($arrMensaje= mysqli_fetch_array($rsMensajes)){
          

                  echo "<tr>
                <td>".$arrMensaje['Nombre']."</td>
                <td>".$arrMensaje['Correo']."</td>
                <td>".$arrMensaje['Mensaje']. "</td>
                <td>".$arrMensaje['timeStaps']."</td>
                <td> 
                  <a href='editar.php' class='icono-editar' title='Editar'><i class='bi bi-pencil-square'></i></a>
                  <a href='#' class='icono-borrar' title='Borrar'><i class='bi bi-trash'></i></a>
                </td>
                   </tr>";
                  }

              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <p>© 2026 Mi Portafolio web</p>
    <p>Práctica de Programación todos los derechos reservados</p>
  </footer>
</body>
</html>
