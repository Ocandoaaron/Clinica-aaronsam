
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="login-container">
        <h2>Registro de usuario</h2>
        <img src="img/ujghimages.png" alt="">
        <form  action="index.php" method="post" autocomplete="off">

            <input type="text" name="username" placeholder="Nombre de usuario" required>
            <i class="fa-solid fa-user"></i>
           
            <input type="password" name="password" placeholder="Contraseña" >
            <i class="fa-solid fa-user"></i>
            <button type="submit" name ="enviarlogin"> Entrar  </button>
        </form>
        
    </div>
    <?php
        include("loginenviar.php");
        ?>
    
</body>
</html>