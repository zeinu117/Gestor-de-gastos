<?php
    $idFecha = $_GET['idFecha'];
    include "servidor/conexion.php";
    $conexion = conexion();
    $sql = "SELECT id_gastos ,descripcion, monto, fechaInsert FROM t_gastos WHERE id_fecha = '$idFecha'";
    $respuesta = mysqli_query($conexion, $sql);
?>
<table class="table table-dark table-striped">
    <thead>
        <th>id</th>
        <th>Descripcion</th>
        <th>Monto</th>
        <th>Fecha</th>
        <th>Eliminar</th>
    </thead>
    <tbody>
        <?php
      while($mostrar = mysqli_fetch_array($respuesta)) { 
    ?>
        <tr>
            <td><?php echo $mostrar['id_gastos']; ?></td>
            <td><?php echo $mostrar['descripcion']; ?></td>
            <td><?php echo $mostrar['monto']; ?></td>
            <td><?php echo $mostrar['fechaInsert']; ?></td>
            <td>
                
                    <form action="servidor/eliminarGasto.php?idFecha=<?php echo $idFecha; ?>" method="POST">
                        <input type="text" hidden value="<?php echo $mostrar['id_gastos']; ?>" name="idEliminarGasto">
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                
            </td>
        </tr>
        <?php }?>
    </tbody>
</table>