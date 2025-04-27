<?php 
$localhost = "localhost";
$usuario = "root";
$senha = "";
$banco = "starlight";

$conn = new mysqli($localhost, $usuario, $senha, $banco);

// if ($conn->connect_error) {
//     die("Conexão falhou: " . $conn->connect_error);
// } else {
//     echo "Conexão bem-sucedida!";
//     $conn->close();
// }
?>