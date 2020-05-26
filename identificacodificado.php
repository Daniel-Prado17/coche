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
$usuario = $_POST['usuario'];
$cont = md5($_POST['cont']);

include 'conexion.php';
$conexion = mysql_connect($host_db, $user_db, $pass_db, $db_name);

/*comprobar la conexion*/
if (mysql_connect_errno()){
    printf ("Fallo la conexion: %s\n" mysqli_connect_error());
    exit();
}

$consulta = mysql_query($conexion, "SELECT nombre FROM usuarios1 WHERE usuario LIKE '$usuario' and contrasena LIKE '$cont' ");


$dato = mysqli_fetch_array($consulta);
$cambia = $dato["nombre"];
echo "<hr size = 10 color = ffffff width = 100% aling = left>";

if($dato == ""){
echo "Los datos no son correctos, <a href=formregistrados.html> Volver";
}
else{
    echo "<strong>Bienvenidos a niestyra web $cambia</strong>";
    echo "<br>";
    echo "<a href = formregistrados.html>Logear de nuevo??";
    echo "<br>";
    echo "<a href = registro2.html> Registrar usuarios??";
    echo "<br>";
}
?> 