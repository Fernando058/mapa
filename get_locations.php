<?php
header('Content-Type: application/json');
// Conexión a la base de datos
$servername="bou07gzqrfgzqgcjkzst-mysql.services.clever-cloud.com";
$username="usvnedkk1cscttv7";
$password="uscmmz5vOOlksCOD4tKP";
$dbname="bou07gzqrfgzqgcjkzst";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta para obtener las ubicaciones
$sql = "SELECT * FROM locations";
$result = $conn->query($sql);

$sites = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $sites[] = $row;
    }
}
$json = json_encode($sites);
echo $json;
$conn->close();
?>
