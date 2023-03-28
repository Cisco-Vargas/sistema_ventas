<?php
    
$alerta = '';
session_start();
if(!empty($_SESSION['active']))
{
    header('Location: sistema/');
}else{

    if(!empty($_POST)){
        if(empty($_POST['usuario']) || empty($_POST['pass'])){
            $alerta = 'Ingrese el usuario y contraseña';

        }else
        {
            require_once "conexion.php";

            $user = $_POST['usuario'];
            $pass = md5(mysqli_real_escape_string($conexion,$_POST['pass']));

            //echo $pass;exit;

            $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario ='$user' AND clave ='$pass'");
            $resultado = mysqli_num_rows($query);

            if($resultado > 0)
            {

                $data = mysqli_fetch_array($query);
                
                $_SESSION['active'] = true;
                $_SESSION['idUser'] = $data['idusuario'];
                $_SESSION['nombre'] = $data['nombre'];
                $_SESSION['email'] = $data['correo'];
                $_SESSION['user'] = $data['usuario'];
                $_SESSION['rol'] = $data['rol'];

                header('Location: sistema/');
            }else{
                $alerta = 'Usuario o la contraseña son icorrecto';
                session_destroy();
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css\login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Login</title>
</head>
<div>
        <h1 class="Titulo"> Iniciar Sesión </h1>
</div>
<body>



    <div class="formbody">
        <img src="img/images1.png" alt="user-login">
        <p class="text"> </p>
        <form method="post" action="" class="login-form">

            <input type="text" name="usuario" placeholder="Usuario" class="campos"  >
            
            <input name="pass" type="password" placeholder="Contraseña" class="campos" id="contris2" >
            <center>
            <div class="alerta"><?php echo isset($alerta) ? $alerta : ''; ?> </div>
            </center>
            <br>
            <input name="sesion" type="submit" value="Iniciar sesión" class="boton3">
            
        </form>

                
                            
    </div>
</body>
</html>