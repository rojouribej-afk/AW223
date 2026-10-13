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
    <a href="index.html" title="Volver al portafolio"><i class="bi bi-house"></i></a>
  </nav>

  <main class="main-admin">
    <section class="seccion-admin">
      <div class="tarjeta">
        <h2>Mensajes Recibidos</h2>

        <div class="tabla-contenedor">
          <table class="tabla">
            <thead>
              <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Mensaje</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>Ana</td>
                <td>ana@example.com</td>
                <td>Hola, me interesa tu portafolio.</td>
                <td class="opciones">
                  <a href="editar.php" class="icono-editar" title="Editar"><i class="bi bi-pencil-square"></i></a>
                  <a href="#" class="icono-borrar" title="Borrar"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>José</td>
                <td>jose@example.com</td>
                <td>Quisiera más información sobre tus proyectos.</td>
                <td class="opciones">
                  <a href="editar.php" class="icono-editar" title="Editar"><i class="bi bi-pencil-square"></i></a>
                  <a href="#" class="icono-borrar" title="Borrar"><i class="bi bi-trash"></i></a>
                </td>
              </tr>
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
