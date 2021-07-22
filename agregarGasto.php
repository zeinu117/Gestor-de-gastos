<?php
    if (isset($_GET['idFecha'])) {
        $link = "servidor/agregarGastos.php?idFecha=" . $_GET['idFecha'];
?>
<?php include 'header.php'; ?>
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 ">
                <h1 class="font-weight-light">Agregado de Gastos</h1>
                <p class="lead">
                <div class="row">
                    <div class="col-sm-6">
                        <form action="<?php echo $link; ?>" method="POST">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="3" required
                                class="form-control"></textarea>
                            <br>
                            <label for="monto:">Monto Gastado</label>
                            <input type="text" name="monto" id="monto">
                            <br>
                            <button class="btn btn-primary">Agregar</button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-sm-12">
                        <div id="tablaGastos"></div>
                    </div>
                </div>
                </p>
            </div>
        </div>
    </div>
</header>


<?php include 'footer.php'; ?>
<script>
    $(document).ready(function(){
        $('#tablaGastos').load('tablaGastos.php?idFecha=' + '<?php echo $_GET['idFecha'] ?>');
    });
</script>
<?php 
    } else {
        header("location:index.php");
    } 
?>