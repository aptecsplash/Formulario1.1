<?php
  $conexion = new mysqli("localhost", "root", "root", "dbtest");
  if($conexion->connect_errno)
  {
   echo'error en la conexion';
  }
  else
  {
   echo'conectado';
  }

function disconnect() {
  mysqli_close();
}


  $nombres = $_POST["nombres"];
  $apellidos = $_POST["apellidos"];
  $email = $_POST["email"];
  $sucursal = $_POST["sucursal"];
  $monto = $_POST["monto"];
  $ticket = $_POST["ticket"];

//echo "$nombres , $apellidos, $email, $sucursal, $monto, $ticket";

  $insertar = "INSERT INTO clientes(nombres,apellidos,email,sucursal,monto,ticket) VALUES ('$nombres','$apellidos','$email',
    '$sucursal','$monto','$ticket')";
  $verificar_usuario = mysqli_query($conexion, "SELECT * FROM clientes WHERE email ='$email'");
  if(mysqli_num_rows($verificar_usuario)>0){
    echo '<script>
     alert("el usuario ya esta registrado");
     window.history.go(-1);
    </script>';
    exit;
  }

    $resultado = mysqli_query($conexion, $insertar);
        if(!$resultado){
            echo 'Error al registrase' . $mysqli->error;
        } else {
          echo '<script>
           alert("Usuario registrado exitosamente");
           window.history.go(-1);
          </script>';
        }
        //cerrar conexion
        mysqli_close($conexion);




?>
