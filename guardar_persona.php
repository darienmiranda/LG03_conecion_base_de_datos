<?php
    //datos de conexion
    $host="localhost";
    $user="root";
    $password="";
    $bd="conexion_php";
    //crear la conexion
    $con=new mysqli($host,$user,$password,$bd);
    //prueba de conexion
    if($con->connect_error){
        echo "base de datos no disponible";
    } else {
        echo "conctado ala base de dactos";
    }
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    echo "la informacion enviada es:
            nombre: $nombre email $email";
    $query = "insert into personas(nombre,email)
            values ('$nombre','$email')";
    if($con ->query($query)){
        echo "persona guardad correctamente";
    } else {
        echo "no se logro guardar la persona".$con->error;
    }
    $con->close();
?>
