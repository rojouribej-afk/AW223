<?php
include 'conexion.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $concepto = $_POST['concepto'];
    $monto = $_POST['monto'];
    $categoria = $_POST['categoria'];
    $sql = "INSERT INTO gastos (concepto, monto, categoria) VALUES ('$concepto','$monto', '$categoria')";
    if (mysqli_query($conexion, $sql)) {
        echo "Registrado correctamente";
    } else {
        echo "Error en el registro";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examen</title>
</head>
  <link rel="stylesheet" href="estilos.css">
<body>

<main class="dos-columnas">
    
    <form class="formulario" action="gastos.php" method="post">
        <h1>Registrar nuevo gasto</h1>
        <input type="text" name="concepto" placeholder="concepto" aria-label="concepto" required>
        <input type="text" name="monto" placeholder="Monto" aria-label="monto" required>
        <input type="text" name="categoria" placeholder="Categoria" aria-label="Categoria" required>
        <button type="submit">Registrar</button>

    </form>
</main>



    
</body>
</html>