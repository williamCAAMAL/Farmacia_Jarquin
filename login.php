<?php
 if (isset($_COOKIE["intentos"])){
    $intentos=$_COOKIE["intentos"] + 1;
 }
include("conexion.php");

$nombre=$_GET["nombre"];
$clave=$_GET["clave"];

echo "$nombre <br/>";
echo "$clave <br/>";

$sql="select * from usuario where
nombre='$nombre' and clave='$clave'";

$res = mysqli_query($cnn, $sql);
echo "procesando...";
if ($intentos <= 3 ){
if (mysqli_num_rows($res) > 0){
    echo "Acceso concedido</br>";
    echo "<a href='index.html'>ir al panel</a>";
}
else{
    echo "Acceso denegado</br>";
    if (isset($_COOKIE["intentos"])){
        $intentos=$_COOKIE["intentos"] + 1;
        echo $intentos;
        $duracion=time() + (10 * 60);
        setcookie("intentos",$intentos,$duracion,"/");

    }else{
        $duracion=time() + (10 * 60);
        setcookie("intentos","1",$duracion,"/");
    }
    echo "<a href='Login_sesion.html'>ir al login</a>";
}
}else{
    echo "intentos agotados, espere 10 minutos";
}
mysqli_close($cnn);
?>