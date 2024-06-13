<script>
    function asegurar()
    {
        rc = confirm('Confirmar accion?');
        return rc;
    }
</script>

<style>
    .Tabla{
    margin: auto;
    width: 150px;
    }
    .Tabla td,tr{
        text-align: center;  
    }
    .h1tb{
    margin: auto;
    text-align: center;
    color: rgb(49, 49, 49);
    }
    .h2tb{
    
    text-align: center;
    color: rgb(49, 49, 49);
    }
    .txttb{
    
    text-align: center;
    color: rgb(49, 49, 49);
    letter-spacing: 2px;
    }
    .container {
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            color: white;
            background-color: red;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: darkred;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input, textarea {
            width: 100%;
            padding: 8px;
            box-sizing: border-box;
        }
    </style>


<?php
include ("conexion.php");
$consulta = "SELECT * FROM comentarios ORDER BY correo";
$res = mysqli_query($cnn, $consulta);
echo "<table border=1>";
echo "<tr><td>Eliminar</td><td>correo
</td><td>comentario</td></tr>";
while ($f = mysqli_fetch_array($res)){
    echo "<tr>";
    $idcomentario = $f['idcomentario'];
    $correo = $f['correo'];
    $comentario = $f['comentario'];
    echo "<td><a href='eliminar.php?id=$idcomentario'
    onclick='javascript:return asegurar();'>x</a></td>";

    echo "<td>$correo</td>";
    echo "<td>$comentario</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_free_result($res);
mysqli_close($cnn);
?>


