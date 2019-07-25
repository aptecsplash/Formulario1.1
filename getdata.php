<?php
$conexion = new mysqli("localhost", "root", "", "dbtest");
if($conexion->connect_errno)
{
 echo'error en la conexion';
}
else
{
 echo'conectado';
}



$result = mysqli_query($conexion, "SELECT * FROM clientes ORDER BY ID DESC");

if (!$result) {
  echo "Problema al hacer un query: " . $mysqli->error;
} else {
  // Recorremos los resultados devueltos
  $rows = array();
  while( $r = $result->fetch_assoc()) {
    $rows[] = $r;
  }
  // Codificamos los resultados a formato JSON y lo enviamos al HTML (Client-Side)
  echo json_encode($rows);
}
  mysqli_close($conexion);

?>
