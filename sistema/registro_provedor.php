<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="SistemaVentas\sistema\css">
    <?php include "includes/scripts.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
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
                    <h3 class="pb-3">Registro Proveedor</h3>
                </center>
                <div>
                    <form action="ingresar_usuario.php" method="post">
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Proveedor" class="form-control" name="proveedor" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Contacto" class="form-control" name="contacto" id="exampleInputPassword1">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Telefono" class="form-control" name="telefono" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Direccion" class="form-control" name="direccion" id="exampleInputPassword1">
                        </div>
                        
                    

                        <div class="pb-2">
                            <input type="submit" name="registras" class="btn btn-success w-100 font-weight-bold mt-2" value="Guardar Proveedor">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php include "includes/footer.php";?>   
</body>
</html>