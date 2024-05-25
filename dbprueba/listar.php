<?php
include 'conexion.php';
$con = conexion();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
     <!--Bootstrap 5.3-->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
     <!--DataTable-->
     <link rel="stylesheet" href="//cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.min.css" />
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top" style="border-bottom: 2px solid #ced4da">
        <a class="navbar-brand" style="padding-right: 50px"> <img src="img/logo.png" width="250px"></a>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto"> 
                    <li class="nav-item active">
                        <a class"nav-link" href="index.php">Registrar <span class="sr-only"></span></a>
                    
                        <br>

                     <a class"nav-link" href="listar.php">Listar <span class="sr-only"></span></a>
                     </li>
                </ul>
            </div>
    </nav>
    <!--Container-->
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Listado PostgreSql</h1>
            <p>Listado de personal</p>
        </div>

        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Documento</th>
                        <th scope="col">Nombres</th>
                        <th scope="col">Apellidos</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Celular</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                 $sql = "select * from persona order by idpersona asc";
                 $obj = pg_query($con, $sql);
                 $i = 0;
                 while ($columna = pg_fetch_array($obj)) {
                    $i++;
                    ?>
                <tr>
                        <th scope="col"><?=$i?></th>
                        <th scope="col"><?=$columna[1]?></th>
                        <th scope="col"><?=$columna[2]?></th>
                        <th scope="col"><?=$columna[3]?></th>
                        <th scope="col"><?=$columna[4]?></th>
                        <th scope="col"><?=$columna[5]?></th>
                        <td><a href="actualizar.php?update=<?=$columna[0]?>">Actualizar</a></td>
                        <td><a href="eliminar.php?delete=<?=$columna[0]?>">Eliminar</a></td>
                    </tr>
                    <?php
                     }
                    ?>
            </table>
        </div>
    </main>
</body>
</html>