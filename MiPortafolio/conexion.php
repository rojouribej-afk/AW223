<?pHP
/* Aqui se definen las credenciales de conexión a la base de datos */
$server = "localhost";
$usuario = "root";
$contrasenia = "";
$baseDatos  = "portafolio_db";

/* Creamos un objeto de conexión */
$conexion = new mysqli($server, $usuario, $contrasenia, $baseDatos);

/* Verificamos la conexión */
if($conexion -> connect_error){
    die("Conexión fallida: " . $conexion->connect_error); /* Esta parte es para mostrar el error de conexión */
}

echo "Conexión exitosa"; /* Esta parte es para mostrar que la conexión fue exitosa */

