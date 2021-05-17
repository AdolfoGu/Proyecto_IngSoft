<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Debes iniciar sesión, esto no es correcto");
                window.location = "index.php";
            </script>
        ';
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Equipo</title>
    <link rel="stylesheet" href="assets/ccs/estilos.css">
    <link rel="stylesheet" href="assets/ccs/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>

            <div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
                <br><br><br><br>
                <legend style="color: white">Nueva equipo</legend>
                <br><br>
                <form action="insertequipo.php" class="form-horizontal" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;"enctype="multipart/form-data">
                        <label class="col-sm-2 control-label" style="color: white">Logo: </label>
                        <input type="file" name="file1" id="file1">

                        <br>
                        <label class="col-sm-2 control-label" style="color: white">Abreviatura: </label>
                        <input type="text" id="abreviatura" name="abrevitura" size="25" class="form-control form-control-sm"><br>
                        <br>

                        <br>
                        <label class="col-sm-2 control-label" style="color: white">Nombre: </label>
                        <input type="text" id="nombre" name="nombre" size="25" class="form-control form-control-sm"><br>
                        <br>

                        <br>
                        <label class="col-sm-2 control-label" style="color: white">JG: </label>
                        <input type="text" id="jg" name="jg" size="25" class="form-control form-control-sm"><br>
                        <br>

                        <br>
                        <label class="col-sm-2 control-label" style="color: white">JP: </label>
                        <input type="text" id="jp" name="jp" size="25" class="form-control form-control-sm"><br>
                        <br>

                        <br>
                        <label class="col-sm-2 control-label" style="color: white">JE: </label>
                        <input type="text" id="je" name="je" size="25" class="form-control form-control-sm"><br>
                        <br>

                        <br>
                        <label class="col-sm-2 control-label" style="color: white">JJ: </label>
                        <input type="text" id="jj" name="jj" size="25" class="form-control form-control-sm"><br>
                        <br>

                        <br>
                        <label class="col-sm-2 control-label" style="color: white">GF: </label>
                        <input type="text" id="gf" name="gf" size="25" class="form-control form-control-sm"><br>
                        <br>

                        <br>
                        <label class="col-sm-2 control-label" style="color: white">GC: </label>
                        <input type="text" id="gc" name="gc" size="25" class="form-control form-control-sm"><br>
                        <br>

                        <br>
                        <label class="col-sm-2 control-label" style="color: white">Puntos: </label>
                        <input type="text" id="puntos" name="puntos" size="25" class="form-control form-control-sm"><br>
                        <br>
                        
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="marcas.php"><button type='button' class='btn btn-danger'>Cancelar</button></a>
                </form>
            </div>
</body>
</html>