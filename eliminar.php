<?php
include("conexion.php");
if ((isset ($_GET["id"]))){
    $id=$_GET["id"];
    mysqli_query($cnn, "DELETE FROM comentarios WHERE idcomentario=$id");
    mysqli_close($cnn);
    echo 'se ha cerrado la consulta de base de datos';
}
?>