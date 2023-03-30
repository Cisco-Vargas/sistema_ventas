<?php
include ("../conexion.php");

// Si se ha enviado el formulario
if(isset($_POST['registras'])) {

  // Obtener los datos del formulario
  $codproducto = $_POST['codproducto'];
  $descripcion = $_POST['descripcion'];
  $proveedor = $_POST['proveedor'];
  $precio = $_POST['precio'];
  $existencia = $_POST['existencia'];

  // Insertar los datos en la tabla "producto"
  $sql = "INSERT INTO producto (codproducto, descripcion, proveedor, precio, existencia) VALUES ('$codproducto', '$descripcion', '$proveedor', '$precio', '$existencia')";

  if ($conn->query($sql) === TRUE) {
    echo "Producto registrado correctamente";
  } else {
    echo "Error al registrar producto: " . $conn->error;
  }
  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="SistemaVentas\sistema\css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php include "includes/scripts.php"; ?>
    <title>Registro</title>
</head>

<body>
    <!--<section id="container"> -->
    <?php include "includes/header.php"; ?>
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
                    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Codigo" class="form-control" name="codproducto" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Descripcion" class="form-control" name="descripcion" id="exampleInputPassword1">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Proveedor" class="form-control" name="proveedor" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Precio" class="form-control" name="precio" id="exampleInputPassword1">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Existencias" class="form-control" name="existencia" id="exampleInputPassword1">
                        </div>
                        <div class="pb-2">
                            <input type="submit" name="registras" class="btn btn-success w-100 font-weight-bold mt-2" value="Guardar producto">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>