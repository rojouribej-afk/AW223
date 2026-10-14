<?php

require_once ("conexion.php");

/* Aqui es para guardar lo que se envia desde el formulario, lo que viene en la variable nombre lo guarda en txtnombre y así */
$nombre = $_POST['txtnombre'];   
$correo = $_POST['txtemail'];   
$mensaje = $_POST['txtmensaje'];

/* Aqui se prepara la sentencia  para insertar los datos en la tabla mensaje, eso es código sql */

$sqlInsert = "INSERT INTO mensaje(nombre, correo, mensaje) VALUES (?, ?, ?)";


/* Aqui se prepara el insert ya es una buena práctica para evitar inyecciones SQL */
$stmt = $conexion -> prepare($sqlInsert);

/* bind_param es para enlazar los parámetros con los valores */
/* "sss" indica que los tres parámetros son cadenas de texto */
$stmt -> bind_param("sss", $nombre, $correo, $mensaje); 

/* Esto es para ejecutar la consulta y verificar si se hizo correctamente */
if($stmt -> execute()){
echo "Mensaje guardado correctamente";
}else{
    echo "Error al guardar el mensaje";
}

