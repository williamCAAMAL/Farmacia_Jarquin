<?php
include("conexion.php");

$nombre=$_GET["usuario"];
$clave=$_GET["clave"];

echo "$nombre<br/>";
echo "$clave <br/>";


$sql = "insert into usuario
        (nombre,clave)
        values
        ('$nombre', '$clave')";

$res = mysqli_query($cnn, $sql);
echo "procesando...$res";
if($res == 1){
    echo "datos agregados";
    echo "<a href='Login_sesion.html'>ir al panel</a>";

    
}
else{
    echo "hubo un error fatal";
}
mysqli_close($cnn);
?>