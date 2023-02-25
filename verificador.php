<?php
    require_once 'conexion.php';
    
    $alerta = '';
    if(!empty($_POST))
    {
     if(empty($_POST['usuario']) || empty($_POST['pass']))
     {
        echo $alerta = 'Ingrese el usuario y contraseña';

     }else{
        $user = $_POST['usuario'];
        $pass = $_POST['pass'];

        $query = mysqli_query($conexion, "SELECT * FROM usuario WHERE usuario ='$user' AND clave ='$pass'");
        $resultado = mysqli_num_rows($query);

        if($resultado > 0)
        {
           $data = mysqli_fetch_array($query);
           session_start();
           $_SESSION['active'] = true;
           $_SESSION['idUser'] = $data['idusuario'];
           $_SESSION['nombre'] = $data['nombre'];
           $_SESSION['email'] = $data['correo'];
           $_SESSION['user'] = $data['usuario'];
           $_SESSION['rol'] = $data['rol'];

           header('Location: sistema/');
        
        }else{
            echo $alerta = 'Usuario o la contraseña son icorrecto';
            
        }
        
     }
    }


    /*include ('conexion.php');
    $user = $_POST['usuario'];
    $pass = $_POST['pass'];

    $consulta = "SELECT * FROM usuario WHERE usuario=$user AND clave=$pass";
    $ejecucion = mysqli_query($conexion,$consulta);
    if($ejecucion) {   
        header("Location: sistema/index.php");
    }
*/

?>