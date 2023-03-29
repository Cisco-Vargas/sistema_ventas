<?php
    if(!empty($_POST))
    {
        $alert='';
        if(empty($_POST['nombre'] || empty($_POST['correo'] || empty($_POST['usuario'] || empty($_POST['clave'] || empty($_POST['rol']))

        {
            $alert='<p class="msg_error"></p>';
        }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css\form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php include "includes/scripts.php"; ?>
    <title>Sisteme Ventas</title>
</head>
<p>hola</p>
<body>
    <?php include "includes/header.php";?>
    <section id="container">
        <div class="container">
            <div class="row m-5 no-gutters shadow-lg">
                <div class="col-md-12 bg-white p-5">
                    <center>
                    <h3 class="pb-3">Registro</h3>
                    <div class="alerta"><p class="msg_save">Error</p> </div> 
                    </center>
                <div>
                    <form action="" method="post">
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
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "includes/footer.php";?>
</body>
</html>