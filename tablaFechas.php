<?php 
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_fecha, fecha FROM t_fechas";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-dark table-striped" id="tablaListadoFechas">
    <thead>
        <th>Id</th>
        <th>Fecha</th>
        <th>Selecionar</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php 
        while($mostrar = mysqli_fetch_array($respuesta)){ 
            $idFecha = $mostrar['id_fecha'];
            $fecha = $mostrar['fecha'];
            $link = "agregarGasto.php?idFecha=". $idFecha;
        ?>
        <tr>
            <td><?php echo $mostrar['id_fecha']; ?></td>
            <td><?php echo $mostrar['fecha']; ?></td>
            <td>
                <a href="<?php echo $link; ?>" 
                    class="btn btn-info">
                    Seleccionar
                </a>
            </td>
            <td>
                <form action="servidor/eliminarFecha.php" method="post">
                    <input type="text" value="<?php echo $idFecha; ?>" name="idEliminar" required hidden>
                    <button class="btn btn-danger">
                        Eliminar
                    </button>
                </form>
            </td>
        </tr>
        <?php
        } 
        ?>
    </tbody>
</table>