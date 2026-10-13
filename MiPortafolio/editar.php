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
    <a href="index.html" title="Volver al portafolio">  <i class="bi bi-house"></i></a>
    <a href="admin.php" title="Volver a editar"> <i class="bi bi-arrow-clockwise"></i></a>
  </nav>
  
<body>
      <main class="main-admin">
    <section class="seccion-admin">
      <div class="tarjeta tarjeta-form">
        <h2>Editar Mensaje</h2>
        <form>
          <div class="campo">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Escribe tu nombre">
          </div>

          <div class="campo">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="ejemplo@correo.com">
          </div>

          <div class="campo">
            <label for="mensaje">Mensaje</label>
            <textarea id="mensaje" name="mensaje" rows="6"></textarea>
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