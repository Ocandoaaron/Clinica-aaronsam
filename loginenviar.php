<?php
include  ("conexion.php");

if(isset($_POST['enviarlogin'])) {
    if( 
        strlen($_POST['username']) >= 1 &&
        strlen($_POST['password']) >= 1 
    ) {
        $user = trim($_POST['usuario']);
        $password = trim($_POST['contraseña']);
        $consulta = "INSERT INTO usuario(usuario,contraseña) 
        VALUES ('$user', '$password') ";
        $resultado = mysqli_query($conex, $consulta);


    }
}



?>
