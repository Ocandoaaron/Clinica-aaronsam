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

if(isset($_POST['send'])) {
    if( 
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1 
    ) {
        $name = trim($_POST['name']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $edad = trim($_POST['edad']);
        $consulta = "INSERT INTO datos(nombre, telefono, email, mensaje,edad)
        VALUES ('$name', '$phone', '$email', '$message', '$edad') ";
        $resultado = mysqli_query($conex, $consulta);


    }
}

if(isset($_POST['medico'])) {
    if( 
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['phone']) >= 1 
        
    ) {
        $idesp = trim($_POST['idespecialidad']);
        $name = trim($_POST['name']);
        $telf = trim($_POST['phone']);
       
        $consulta = "INSERT INTO medicos(idespecialidad ,nombre, telefono)VALUES ('$idesp','$name', '$telf') ";
        $resultado = mysqli_query($conex, $consulta);

    }
}

if(isset($_POST['citas'])) {
    if( 
        strlen($_POST['dianostico']) >= 1 &&
        strlen($_POST['tratamiento']) >= 1 &&
        strlen($_POST['fechai'])>= 1 &&
        strlen($_POST['fechai'])>= 1 
        
    ) {
        $dianostico = trim($_POST['dianosticos']);
        $tratamiento = trim($_POST['tratamiento']);
        $fechainicial = trim($_POST['fechainicio']);
        $fechafinal = trim($_POST['fechafinal']);
       
        $consulta = "INSERT INTO citas (fecha,hora,fechaoperacion)
        VALUES ('$dianostico', '$tratamiento','$fechao') ";
        $resultado = mysqli_query($conex, $consulta);
    }
}







if(isset($_POST['trata'])) {
    if( 
        strlen($_POST['dianostico']) >= 1 &&
        strlen($_POST['tratamiento']) >= 1 &&
        strlen($_POST['fechai'])>= 1 &&
        strlen($_POST['fechai'])>= 1 
        
    ) {
        $dianostico = trim($_POST['dianosticos']);
        $tratamiento = trim($_POST['tratamiento']);
        $fechainicial = trim($_POST['fechainicio']);
        $fechafinal = trim($_POST['fechafinal']);
       
        $consulta = "INSERT INTO tratamientos(dianosticos,tratamiento,fechainicio,fechafinal)
        VALUES ('$dianostico', '$tratamiento','$fechainicial','$fechafinal') ";
        $resultado = mysqli_query($conex, $consulta);
    }
}



if(isset($_POST['Esp'])) {
    if( 
        strlen($_POST['esp']) >= 1 
      
    ) {
        $esp = trim($_POST['esp']);

        $consul = "INSERT INTO especialidades(especialidad)VALUES ('$esp') ";
        $resultado = mysqli_query($conex, $consul);


    }
}

?>