<?php
include("conexion.php");

$correo=$_GET["correo"];
$comentario=$_GET["comentario"];

echo "$correo <br/>";
echo "$comentario <br/>";


$sql = "insert into comentarios
        (correo,comentario)
        values
        ('$correo', '$comentario')";

$res = mysqli_query($cnn, $sql);
echo "procesando...$res";
if($res == 1){
    echo "datos agregados";


    
}
else{
    echo "hubo un error fatal";
}
mysqli_close($cnn);
?>