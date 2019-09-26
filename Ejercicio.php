<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "empresa";

// Creamos la conexion
$conn = mysqli_connect($servername, $username, $password, $database);

// Miramos si todo funciona
if (!$conn) {
    die("Algo has hecho mal porque esto no tira, mira esto: " . mysqli_connect_error());
}
echo "Increible conexion. <br>";

// Hacemos cosas con las tablas esas
$consulta = "SELECT cliente_cod, nombre, telefono FROM cliente";
$resultado = $conn->query($consulta);

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        echo "Codigo: " . $row["cliente_cod"]. " - Nombre: " . $row["nombre"]. " - Telefono " . $row["telefono"]. "<br>";
    }
} else {
    echo "Whathefuc";
}

$conn->close();



