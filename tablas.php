<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de datos</title>
    <link rel="stylesheet" href="style.css">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="color: #323232;background-color: #02B1F4;font-family: 'Poppins', sans-serif; width: 1000px;height: 500px; ">

<section class="formulario container">

<table  class="table  table-hover table-bordered border-primary ">
        <h1> Tablas</h1>
        <br>
        <thead class="table-dark">
        <h1> Pacientes</h1>
        <tr>
            <th>id</th>
            <th>nombre </th>
            <th>telefono </th>
            <th>email </th>
            <th>mensaje </th>
            <th>Opciones </th>
        </tr>
    </thead>
    <br>
    <tbody class="table-group-divider height: 30px ;">
        <?php
        $conex = mysqli_connect("localhost", "root", "","formulario"); 

        if ($conex-> connect_error) {
            die ("Conexion fallida:". $$conex-> connect_error);
        }
        $sql= "Select * from datos";
        $result= $conex-> query($sql);

        if (!$result) {
            die ("Conexion fallida:".$conex->error);
        }
        while ($row = $result-> fetch_assoc()) {
            echo "<tr>
            <td>".$row ["id"]."</td>
            <td>".$row ["nombre"]."    </td>
            <td> ".$row ["telefono"]."   </td>
            <td> ".$row ["email"]."   </td>
            <td>".$row ["mensaje"]."    </td>
            <td > 
                <a class='btn btn-primary btn-sm'href='crud/edit.php?  id=$row[id]'> Editar</a>
                <a class='btn btn-danger btn-sm'  href='crud/delete.php? id=$row[id]'> Eliminar</a>
            </td>
        </tr>" ;  
        }
        ?>
    </tbody>     
    </table>



</section>
    
    

            

            <button class='btn btn-primary btn-sm' ><a href='crud/edit.php' class='text-light'> Editar</a></button>
            <button class='btn btn-danger btn-sm '><a href='crud/delete.php? deleteid' class='text-light'> Eliminar</a></button>
            




<section class="formulario container">
<table  class="table  table-hover table-bordered border-primary" >
        <thead class="table-dark">
        <h1> Medicos</h1>
            <tr>
            <th>idmedicos</th>
            <th>idespecialidad </th>
            <th>nombre </th>
            <th> telefono </th>
            <th>Opciones </th>
            </tr>
        </thead>
            <br>
    <tbody class="table-group-divider">
        <?php
        $conex = mysqli_connect("localhost", "root", "","formulario"); 

        if ($conex-> connect_error) {
            die ("Conexion fallida:". $$conex-> connect_error);
        }
        $sql= "Select * from medicos";
        $result= $conex-> query($sql);

        if (!$result) {
            die ("Conexion fallida:".$conex->error);
        }
        while ($row = $result-> fetch_assoc()) {
            echo "<tr>
            <td>".$row ["idmedico"]."</td>
            <td>".$row ["idespecialidad"]."</td>
            <td>".$row ["nombre"]."    </td>
            <td> ".$row ["telefono"]."   </td>
            <td > 
            <a class='btn btn-primary btn-sm'href='crud/edit.html  id=$row[idmedico]'> Editar</a>
            <a class='btn btn-danger btn-sm'href='crud/delete.html id=$row[idmedico]'> Eliminar</a>
            </td>
        </tr>" ;  
        }
        ?>
    </tbody>
    </table>

</section>
    
<section class="formulario container">
<table  class="table  table-hover table-bordered border-primary" >
        <thead class="table-dark">
        <h1> Citas</h1>
            <tr>
            <th>idcitas</th>
            <th>idmedico </th>
            <th>id </th>
            <th>fecha</th>
            <th>fecha operacion</th>
            <th>Opciones </th>
            </tr>
        </thead>
            <br>
    <tbody class="table-group-divider">
        <?php
        $conex = mysqli_connect("localhost", "root", "","formulario"); 

        if ($conex-> connect_error) {
            die ("Conexion fallida:". $$conex-> connect_error);
        }
        $sql= "Select * from citas";
        $result= $conex-> query($sql);

        if (!$result) {
            die ("Conexion fallida:".$conex->error);
        }
        while ($row = $result-> fetch_assoc()) {
            echo "<tr>
            <td>".$row ["idcitas"]."</td>
            <td>".$row ["idmedico"]."</td>
            <td>".$row ["id"]."</td>
            <td>".$row ["fecha"]."    </td>
            <td>".$row ["fechaoperacion"]."    </td>
            <td > 
            <a class='btn btn-primary btn-sm'href='crud/edit.php? id=$row[idmedico]'> Editar</a>
            <a class='btn btn-danger btn-sm'href='crud/delete.php? id=$row[idmedico]'> Eliminar</a>
            </td>
        </tr>" ;  
        }
        ?>
    </tbody>
    </table>


</section>

    

<section class="formulario container">
<table  class="table  table-hover table-bordered border-primary">
        <thead class="table-dark">
        <h1>Especialidad</h1>
        <tr>
            <th>id</th>
            <th>Especialidad </th>

            <th>Opciones </th>
        </tr>
    </thead>
    <br>
    <tbody class="table-group-divider">
        <?php
        $conex = mysqli_connect("localhost", "root", "","formulario"); 

        if ($conex-> connect_error) {
            die ("Conexion fallida:". $$conex-> connect_error);
        }
        $sql= "Select * from especialidades";
        $result= $conex-> query($sql);

        if (!$result) {
            die ("Conexion fallida:".$conex->error);
        }
        while ($row = $result-> fetch_assoc()) {
            echo "<tr>
            <td>".$row ["idespecialidad"]."</td>
            <td>".$row ["especialidad"]."    </td>
 
            <td > 
            <a class='btn btn-primary btn-sm' href='/pagina/crud/edit.php? id=$row[idespecialidad]'> Editar</a>
            <a class='btn btn-danger btn-sm' href='/pagina/crud/delete.php? id=$row[idespecialidad]'> Eliminar</a>
            </td>
        </tr>" ;  
        }
        ?>
    </tbody>     
    </table>
    <a href="reporte.php"  class="btn btn-success"> Crear  <i class="fa fa-file-pdf"></i></a>
    <a href="index.php" class="btn btn-dark btn-sm"> Atras </a>
</section>
    



</body>
</html>