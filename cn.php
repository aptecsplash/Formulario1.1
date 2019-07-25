<?php
    $conexion = new mysqli("localhost", "root", "", "electro");
    if(!$conexion)
    {
     echo'error en la conexion';
    }
    else
    {
     echo'conectado';
    }
    ?>
