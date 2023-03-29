<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="SistemaVentas\sistema\css">
    <?php include "includes/scripts.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Clientes</title>
</head>
<body>
    <!--<section id="container">-->
        <?php include "includes/header.php";?>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row m-5 no-gutters shadow-lg">
        
                <div class="col-md-12 bg-white p-5">
                    <center>

                    <h3 class="pb-3">Registro de Clientes</h3>
                    </center>
                    <div>
                        <form action="ingresar_usuario.php" method="post">
                            <div class="form-group pb-3">
                                <input type="text" placeholder="Cedula" class="form-control" name="cedula" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group pb-3">
                                <input type="text" placeholder="Nombre" class="form-control" name="contacto" id="exampleInputPassword1">
                            </div>
                            <div class="form-group pb-3">
                                <input type="text" placeholder="Telefono" class="form-control" name="telefono" id="exampleInputEmail1" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group pb-3">
                                <input type="text" placeholder="Direccion" class="form-control" name="direccion" id="exampleInputPassword1">
                            </div>
                            <div class="pb-2">
                                <input type="submit" name="registras" class="btn btn-success w-100 font-weight-bold mt-2" value="Guardar cliente">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "includes/footer.php";?>    
</body>
</html>