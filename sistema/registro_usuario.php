<?php
    if(!empty($_POST))
    {
        $alert='';
        if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol']))
        {
            $alert='<p class="msg_error">Todos los campos son obligatorios</p>';
        }else{
            include "..\conexion.php";
            $nombre = $_POST['nombre'];
            $email = $_POST['correo'];
            $user = $_POST['usuario'];
            $clave = md5($_POST['clave']);
            $rol = $_POST['rol'];

            $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario = '$user' OR correo = '$email'");
            $result = mysqli_fetch_array($query);

            if($result > 0){
                $alert='<p class="msg_error">El correo o el usuario ya existe.</p>';
            }else{
                $query_insert= mysqli_query($conexion, "INSERT INTO usuario(nombre,correo,usuario,clave,rol) 
                                                                    VALUES('$nombre', '$email', '$user', '$clave', '$rol')");
                if($query_insert){
                    $alert='<p class="msg_save">Usuario creado correctamente.</p>';
                }else{
                    $alert='<p class="msg_error">Error al crear el usuario.</p>';
                }
            }
            
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
<body>
    <?php include "includes/header.php";?>
    <section id="container">
        <div class="container">
            <div class="row m-5 no-gutters shadow-lg">
                <div class="col-md-12 bg-white p-5">
                    <center>
                    <h3 class="pb-3">Registro</h3>
                    <div class="alerta"><?php echo isset($alert) ? $alert :'' ?></div> 
                    </center>
                <div>
                    <form action="" method="post">
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Nombre completo" class="form-control" name="nombre" id="nombre" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Correo" class="form-control" name="correo" id="correo">
                        </div>
                        <div class="form-group pb-3">
                            <input type="text" placeholder="Usuario" class="form-control" name="usuario" id="usuario" aria-describedby="emailHelp">
                        </div>
                        <div class="form-group pb-3">
                            <input type="password" placeholder="Contraseña" class="form-control" name="clave" id="clave">
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