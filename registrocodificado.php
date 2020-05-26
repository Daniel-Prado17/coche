<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Creacion de un portal en PHP y MySQL</title>
        </head>
                <body bagcolor = "#303030">
                <body text = "#E5E5E5">
                <font face = "tahoma">
                <font size = "2">
                <body link = "#E5E5E5"  vlink = "#E0E0E0">
                <p align = "center">
            <STRONG>IDENTIFICARSE</STRONG>
            <br><br>
</html
<?php
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$usuario = $_POST['usuario'];
$cont = md5($_POST['cont']);
$email = $_POST['email'];


include 'conexion.php';

$conexion = mysqli_cennect_erron($host_db, $user_db, $pass_db, $_name);

/*comprobar la conexion*/
if (mysql_connect_errno()){
    printf ("Fallo la conexion: %s\n" mysqli_connect_error());
    exit();
}

$insercion = mysqli_query($conexion, "INSERT INTO usuario1 (nombre, apellidos, usuario, contrasena, email) VALUES ('$nombre','$apellidos','$usuario','email')");


echo 'REGISTRO INSERTADO CORRECTAMENTE';
echo "<br>";

echo "<hr size = 10 color = ffffff width = 100% aling = left>";
echo "<strong>Bienvenidos a niestyra web $cambia</strong>";
    echo "<br>";
    echo "<a href = formregistrados.html>Deseas accesar??";


    