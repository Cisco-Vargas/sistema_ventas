<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="SistemaVentas\sistema\css">
    <?php include "includes/scripts.php"; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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

                    <h3 class="pb-3">Registro de producto</h3>
                </center>
                <div>
                    <form action="ingresar_usuario.php" method="post">
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Numero de la Factura" class="form-control" name="numfactura" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="date" placeholder="Feacha de la Factura" class="form-control" name="fecha" id="exampleInputPassword1">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Ingrese el Usuario" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Precio" class="form-control" name="direccion" id="exampleInputPassword1">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Existencias" class="form-control" name="direccion" id="exampleInputPassword1">
                        </div>
                        
                    

                        <div class="pb-2">
                            <input type="submit" name="registras" class="btn btn-success w-100 font-weight-bold mt-2" value="Guardar factura">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>