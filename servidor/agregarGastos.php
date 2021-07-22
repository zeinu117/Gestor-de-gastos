
<?php 
    $idFecha = $_GET['idFecha'];
    $fecha = $_GET['fecha'];
    $descripcion = $_POST['descripcion'];
    $monto = $_POST['monto'];


    include "conexion.php";
    $conexion = conexion();

    $sql = "INSERT INTO t_gastos (id_fecha, descripcion, monto) VALUES ('$idFecha', '$descripcion', '$monto')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        $link = "../agregarGasto.php?idFecha=" . $idFecha . "&fecha=" . $fecha;
        header("location:" . $link);
    } else {
        echo "No se ha podido agregar la tarea!!!";
    }
?>