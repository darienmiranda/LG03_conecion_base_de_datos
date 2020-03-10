<?php
    $host="localhost";
    $user="root";
    $password="";
    $bd="conexion_php";
    $conexion=new mysqli($host,$user,$password,$bd);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar Datos</title>
    <style>
    button{
        border: solid 2px black;
    }
    </style>
</head>
<body >
    <br>
    <table align="center" border="4">
        <tr align="center">
            <td colspan="3"><h1>LISTA DE PERSONAS</h1></td>
        </tr>
        <tr align="center">
            <td><h3>ID</h3></td>
            <td><h3>NOMBRE</h3></td>
            <td><h3>E-MAIL</h3></td>
        </tr>
        <?php
            $sql="SELECT * FROM personas";
            $result=mysqli_query($conexion,$sql);
            while($mostrar=mysqli_fetch_array($result)){
        ?>
        <tr align="center">
            <td><h3><?php echo $mostrar['id'] ?></h3></td>
            <td><h3><?php echo $mostrar['nombre'] ?></h3></td>
            <td><h3><?php echo $mostrar['email'] ?></h3></td>
        </tr>
        <?php
            }

        ?>
        <tr align="center">
            <td colspan="3"><a href="crear.php"><h4>Ingresar datos</h4></a></td>
        </tr>
    </table>
</body>
</html>