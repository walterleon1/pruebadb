<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
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

                     <a class="nav-link" href="listar.php">Listar</a>
                    </li>
                </ul>
            </div>
    </nav>
    <!--Container-->
    <main role="main" class="container">
        <div class="starter-template">
            <h1>Registro PostgreSql</h1>
            <p>Registro de personal</p>
        </div>
        <form autocomplete="off" action="index-post.php" method="post">
            <div class="row">
                <div class="col-6 col-sm-4">
                    <div class="form-group">
                    <label>Nro Documento</label>
                    <input type="text" name="doc" maxlength="10" class="form-control">
                </div>
                </div>
            <div class="col-6 col-sm-4">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="text" name="nom" class="form-control">
                </div>
            </div>
            <div class="col-6 col-sm-4">
                <div class="form-group">
                    <label>Apellidos</label>
                    <input type="text" name="ape" class="form-control">
                </div>
            </div>
            <div class="col-6 col-sm-4">
                <div class="form-group">
                    <label>Direccion</label>
                    <input type="text" name="dir" class="form-control">
                </div>
            </div>
            <div class="col-6 col-sm-4">
                <div class="form-group">
                    <label>Celular</label>
                    <input type="text" name="cel" maxlength="10" class="form-control">
                </div>
            </div>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Registrar</button>

        </form>
        </main>
    </body>
</html>