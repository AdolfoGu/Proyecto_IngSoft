<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Debes iniciar sesión, esto no es correcto");
                window.location = "../../index.php";
            </script>
        ';
        session_destroy();
        die();
    }

    $consulta = ConsultarProducto($_GET['id']);
    function ConsultarProducto($id_usuario){
        $query ="SELECT * FROM usuario WHERE id_usuario = '".$id_usuario."'";
        $conexion = mysqli_connect("localhost", "root", "", "futbol");
        $resultado = mysqli_query($conexion, $query);
        $filas= mysqli_fetch_assoc($resultado);
        return [
            $filas['id_usuario'],
            $filas['nombre'],
            $filas['apellido'],
            $filas['nickname'],
            $filas['contraseña'],
            $filas['rol']
         ];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <link rel="stylesheet" href="../../assets/ccs/bootstrap.css">
    <link rel="stylesheet" href="../../assets/ccs/estilosmenu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Usario</title>
</head>
<body>
<br>
<div class="panel panel-primary"  align="center" style="padding:1.5%">
        <div class="panel-heading" style="white: black; font-weight:bold; font-size:35px;padding: 0px 80px;">
            Usuario
        </div>

<div class="panel-body">

        <form action="../../controllers/updates/updateequipoBBVA.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="col-md-7">
            <br><br>
                <img  src="../../images/usuario.png" class="thumbnail" width='400' >
            </div>

            <div class="col-md-5">
                <div class="form-group">
                    <label class="col-sm-2 control-label">ID: </label>
                    <div class="col-sm-10">
                        <input type="text" readonly="readonly" id="id" name="id" size="25" value="<?php echo $consulta[0] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nombre: </label>
                    <div class="col-sm-10">
                        <input type="text" readonly="readonly" id="nombre" name="nombre" size="25" value="<?php echo $consulta[1] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Apellido: </label>
                    <div class="col-sm-10">
                        <input type="text" readonly="readonly" id="apellido" name="apellido" size="25" value="<?php echo $consulta[2] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Nombre de Usuario: </label>
                    <div class="col-sm-10">
                        <input type="text" readonly="readonly" id="nick" name="nick" size="25" value="<?php echo $consulta[3] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Contraseña: </label>
                    <div class="col-sm-10">
                        <input type="text" readonly="readonly" id="contra" name="contra" size="25" value="<?php echo $consulta[4] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Rol: </label>
                    <div class="col-sm-10">
                        <input type="text" readonly="readonly" id="rol" name="rol" size="25" value="<?php echo $consulta[5] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>
                <a href="dashboard.php"><button type='button' class='btn btn-danger'>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                    <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
                </svg>
                Regresar</button></a>
            </div>
        </form>
    </div>
</div>
</body>