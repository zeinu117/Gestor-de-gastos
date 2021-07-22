<?php 
    $idGastos = $_POST['idEliminarGasto'];
    $idFecha = $_GET['idFecha'];

    include "conexion.php";
    $conexion = conexion();

    $sql = "DELETE FROM t_gastos WHERE id_gastos = '$idGastos'";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta) {
        $link = "../agregarGasto.php?idFecha=" . $idFecha;
        header("location:" . $link);
    } else {
        echo "No se pudo eliminar :(";
    }

?>
