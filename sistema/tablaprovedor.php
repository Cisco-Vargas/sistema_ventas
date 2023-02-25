<?php
include("../conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css"/>
    
    <script src="jquery-3.6.1.min.js"></script>
    
    
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <!-- Pagg-->



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <?php include "includes/scripts.php"; ?>

    <title>Lista</title>
</head>
<body>
    <?php
    include ("includes/header.php");
    
    ?>
    <br>
    <br>
    <br>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 bg-light rounded my-2 py-2">
                <h4 class="text-center text-dark pt-2"> Buscar proveedor </h4>
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <td>Id Proveedor </td>
                                <td>Proveedor</td>
                                <td>Contacto</td>
                                <td>Telefono</td>
                                <td>Direccion</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $consulta1 ="SELECT * FROM proveedor";
                        $Resultado2 = mysqli_query($conexion,$consulta1);
                        while ($mostrar= $Resultado2-> fetch_assoc()){

                            ?>
                        <tr>
                            <td><?php echo $mostrar['codproveedor'];?></td>
                            <td><?php echo $mostrar['proveedor'];?></td>
                            <td><?php echo $mostrar['contacto'];?>"</td>
                            <td><?php echo $mostrar['telefono'];?></td>
                            <td><?php echo $mostrar['direccion'];?></td>
                        </tr>
                        <?php

                        }
                        ?>
                        </tbody>
                    </table>
                
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function()
        {
            $('table').DataTable({
          "language": {
                "lengthMenu": "Mostrando " + ' <select class="costum-select costum-select-sm form-control form-control-sm"> <option value=10>10</option>  <option value=25>25</option>  <option value=50>50</option>  <option value=100>100</option>  <option value=-1>Todos</option></select>' +
                " registros a la vez",
                "zeroRecords": "No se pudo encontrar - :(",
                "info": "Mostrando la página PAGE de PAGES",
                "infoEmpty": "Registros no encontrados",
                "infoFiltered": "(filtrado desde una cantidad de MAX registros totales)",
                "search": "Buscar: ",
                "paginate": {

                  "previous": "Anterior ",
                  "next": "Siguiente ",
                }

              }
        });
        });
    </script>

</body>
</html>

