<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="SistemaVentas\sistema\css">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


     <?php include "includes/scripts.php"; ?>
    <title>Sisteme Ventas</title>
</head>
<body>
    <?php include "includes/header.php";?>
    <section id="container">
<div class="container">
    <div class="row m-5 no-gutters shadow-lg">
      
        <div class="col-md-12 bg-white p-5">
            <center>
                <h3 class="pb-3">Registro</h3>
                <hr>
                <div class="alert"></div>
            </center>
            <div>
                <form action="ingresar_usuario.php" method="post">
                    <div class="form-group pb-3">
                        <input type="text" placeholder="Nombre completo" class="form-control" name="nombre" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group pb-3">
                        <input type="text" placeholder="Correo" class="form-control" name="correo" id="exampleInputPassword1">
                    </div>
                    <div class="form-group pb-3">
                        <input type="text" placeholder="Usuario" class="form-control" name="usuario" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group pb-3">
                        <input type="password" placeholder="Contraseña" class="form-control" name="clave" id="exampleInputPassword1">
                    </div>
                    <div class="form-group pb-3">

                        <label for="rol">Tipo de Usuario</label>
                        <select name="rol" id="rol" class="form-control">
                        <option value="1">Administrador</option>
                        <option value="2">Supervisor</option>
                        <option value="3">Vendedor</option>
                        </select>
                    </div>
                 

                    <div class="pb-2">
                        <input type="submit" name="registras" class="btn btn-success w-100 font-weight-bold mt-2" value="Crear Usuario">
                    </div>
                </form><!-- hola-->
            </div>
        </div>
    </div>
</div>
    </section>


    <?php include "includes/footer.php";?>
</body>
</html>