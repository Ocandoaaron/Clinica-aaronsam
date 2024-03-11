<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <link rel="stylesheet" href="jquery-ui-1.13.2/jquery-ui.theme.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

    <script>
  $( function() {
    $( "#dfecha" ).datepicker();
  } );
  </script>
</head>


<body style="font-family: 'Poppins', sans-serif;">
    
<h2>Registros</h2>
    
<section class="formulario container">

<form method="post" autocomplete="off">
    
    <h2>Registro de pacientes</h2>

    <div class="input-group">

        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre y Apellido">
            <i class="fa-solid fa-person"></i>
        </div>

        <div class="input-container">
            <input type="tel" name="phone" placeholder="Telefono Celular">
            <i class="fa-solid fa-phone"></i>
        </div>

        <div class="input-container">
            <input type="email" name="email" placeholder="Correo">
            <i class="fa-solid fa-envelope"></i>
        </div>

        <div class="input-container">
            <textarea name="message" placeholder="Detalles de la consulta"></textarea>
            <i class="fa-solid fa-message"></i>
        </div>
        <div class="input-container">
            <input type="int" name="edad" placeholder="edad">
            <i class="fa-solid fa-user"></i>
        </div>
        <input type="submit" name="send" class="btn" onClick="myfuction()">
        
        
</div>
        
    </div>
</form>
</section>

<section class="formulario container">

<form method="post" autocomplete="off">

    <h2>Registro de medicos</h2>

    <div class="input-group">
        <div class="input-container">
            <input type="text" name="idespecialidad" placeholder="Id de Especialidad">
            <i class="fa-solid fa-folder"></i>
        </div>
        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre y Apellido">
            <i class="fa-solid fa-user-doctor"></i>
        </div>

        <div class="input-container">
            <input type="tel" name="phone" placeholder="Telefono Celular">
            <i class="fa-solid fa-phone"></i>
        </div>

        <input type="submit" name="medico" class="btn" onClick="myfuction()">
    </div>
</form>
</section>





<section class="formulario container">

<form method="post" autocomplete="off">

    <h2>Registro de citas</h2>

    <div class="input-group">
                <div class="input-container">
                    <h2> Fecha</h2>
                    <input type="text" name="fechai" placeholder="Fecha">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>
                <div class="input-container">
                    <h2> Fecha Operación</h2>
                    <input type="text" name="fechaf" placeholder="Fecha de operacion">
                    <i class="fa-solid fa-calendar-days"></i>
                </div>

        <input type="submit" name="citas" class="btn" onClick="myfuction()">
    </div>

</form>
</section>


<section class="formulario container">
<form method="post" autocomplete="off">

    <h2>tratamientos</h2>

    <div class="input-group">

        <div class="input-container">
            <input type="text" name="dianostico" placeholder="dianostico">
            <i class="fa-solid fa-virus-covid"></i>
        </div>

        <div class="input-container">
            <input type="text" name="Tratamiento" placeholder="Tratamiento">
            <i class="fa-solid fa-capsules"></i>
        </div>

        <div class="input-container">
            
            <input type="text" name="fechai" placeholder="Fecha inicial" id="fecha">
            <i class="fa-solid fa-calendar-days"></i>
        </div>

        <div class="input-container">
            
            <input type="text" name="fechaf" placeholder="Fecha final" id="fechaf">
            <i class="fa-solid fa-calendar-days"></i>
        </div>
        <input type="submit" name="trata" class="btn" onClick="myfuction()">
    </div>
    
    <script src ="jquery-ui-1.13.2/jquery-ui.js"></script>
</form>
</section>



<section class="formulario container">
<form method="post" autocomplete="off">
    <h2>Especialidades</h2>
    <div class="input-group">

        <div class="input-container">
            <input type="text" name="esp" placeholder="Especialidad">
            <i class="fa-solid fa-folder"></i>
            
        </div>

        <input type="submit" name="Esp" class="btn" onClick="myfuction()">        
    </div>
        
    </div>
    
</form>
</section>
<?php
include("send.php");
?>
    <script>
        function myFunction() {
            window.location.href="http://localhost/pagina/"
        }
    </script>

</body>
</html>