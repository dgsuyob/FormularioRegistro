<?php
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "Instituto";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombres = $_POST['nombres'];
  $apellidos = $_POST['apellidos'];
  $correo = $_POST['correo'];
  $contrasena = $_POST['contrasena'];

  $sql = "INSERT INTO Usuarios (nombre_usuario, apellido, email, password) VALUES ('$nombres', '$apellidos', '$correo', '$contrasena')";

  if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>