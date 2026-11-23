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

<div>  

<?php
 $resultado = mysqli_query($conexion, "SELECT monto FROM gastos");
?>
</div>
    
    <form class="formulario" action="gastos.php" method="post">
      <h1>Registrar nuevo gasto</h1>

        <input type="text" name="concepto" placeholder="concepto" aria-label="concepto" required>
        <input type="text" name="monto" placeholder="Monto" aria-label="monto" required>
        <input type="text" name="categoria" placeholder="Categoria" aria-label="Categoria" required>
        <button type="submit" class="botones">Registrar</button>

    </form>
</main>


<div>
    <table class="table">
        <thead>
            <tr>
                <th>id</th>
                <th>Concepto</th>
                <th> Categoria</th>
                <th> Monto</th>
                <th> Fecha </th>
                <th> Estado</th>
                <th> Acción</th>
        
            </tr>
        </thead>
        <tbody>
            <!-- Filas de datos de equipos -->
            <?php
            $resultado = mysqli_query($conexion, "SELECT * FROM gastos");
            while ($row = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['concepto'] . "</td>";
                echo "<td>" . $row['categoria'] . "</td>";
                echo "<td>" . $row['monto'] . "</td>";
                echo "<td>" . $row['fecha'] . "</td>";
                echo "<td>" . $row['pagado'] . "</td>";
                
                echo "</td>";
            }
            
            ?>
            <td> <button class="boton"> Marcar pagado </button>  </td>
            
        </tbody>
    </table>
</div>



</body>
</html>