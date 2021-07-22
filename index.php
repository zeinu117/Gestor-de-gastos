<?php include 'header.php'; ?>
<!-- Full Page Image Header with Vertically Centered Content -->
<header class="masthead">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 text-center">
                <h1 class="font-weight-light">Fechas de gastos</h1>
                <p class="lead">
                    <div class="row">
                        <div class="col text-center">
                            <form action="servidor/agregaFecha.php" method="POST">
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-6">
                                        <label for="fecha">Seleccionar Fecha</label>
                                        <input type="date" required class="form-control" name="fecha">
                                        <br>
                                        <button class="btn btn-primary">Agregar</button>
                                    </div>
                                    <div class="col-sm-3"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                            <div id="tablaFechas"></div>
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
        $('#tablaFechas').load('tablaFechas.php');
    });
</script>