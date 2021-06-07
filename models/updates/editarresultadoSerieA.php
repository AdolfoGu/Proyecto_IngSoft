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
    function ConsultarProducto($id_partido){
        $query ="SELECT * FROM resultados WHERE id_partido = '".$id_partido."'";
        $conexion = mysqli_connect("localhost", "root", "", "futbol");
        $resultado = mysqli_query($conexion, $query);
        $filas= mysqli_fetch_assoc($resultado);
        return [
            $filas['id_partido'],
            $filas['home'],
            $filas['visitante'],
            $filas['liga'],
            $filas['gol_home'],
            $filas['gol_visitante']
        ];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../assets/ccs/bootstrap.css">
    <link rel="stylesheet" href="../../assets/ccs/estilosmenu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Editar Resultado SerieA</title>
</head>
<body>

<nav class="menu">
        <a class="logo" href="">Score Direct</label></a>      
        <ul class="menu_items">
            <li><a href="../../models/cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
</nav>
<br>
<div class="panel panel-primary"  align="center" style="padding:1.5%">
        <div class="panel-heading" style="white: black; font-weight:bold; font-size:35px;padding: 0px 80px;">
            Editar Resultado SerieA
        </div>
</div>

<div class="panel-body">
    <div class="row">
        <div class="col-md-7">
            <img  src="../../images/Partido.jpg" class="thumbnail" width='800' >
        </div>

        <form action="../../controllers/updates/updateresultadoSerieA.php" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="col-md-5">
                <div class="form-group">
                    <label class="col-sm-2 control-label">ID: </label>
                    <div class="col-sm-10">
                        <input type="text" readonly="readonly" id="id" name="id" size="25" value="<?php echo $consulta[0] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="col-sm-2 control-label">Local: </label>
                    <div class="col-sm-10">
                        <input type="text" readonly="readonly" id="home" name="home" size="25" value="<?php echo $consulta[1] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Goles: </label>
                    <div class="col-sm-10">
                        <input type="text" id="gol_home" name="gol_home" size="25" value="<?php echo $consulta[4] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Visitante: </label>
                    <div class="col-sm-10">
                        <input type="text" readonly="readonly" id="visitante" name="visitante" size="25" value="<?php echo $consulta[2] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Goles: </label>
                    <div class="col-sm-10">
                        <input type="text" id="gol_visitante" name="gol_visitante" size="25" value="<?php echo $consulta[5] ?>"class="form-control form-control-sm"><br>
                    </div>
                </div>

                <button type="submit" class="btn btn-success">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-sd-card-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M12.5 0H5.914a1.5 1.5 0 0 0-1.06.44L2.439 2.853A1.5 1.5 0 0 0 2 3.914V14.5A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-13A1.5 1.5 0 0 0 12.5 0zm-7 2.75a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 .75-.75zm2 0a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 .75-.75zm2.75.75a.75.75 0 0 0-1.5 0v2a.75.75 0 0 0 1.5 0v-2zm1.25-.75a.75.75 0 0 1 .75.75v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 1 .75-.75z"/>
                </svg>     
                Guardar</button>
                <a href="../../views/administrador/ResultadoSerieA.php"><button type='button' class='btn btn-danger'>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                    <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z"/>
                </svg>    
                Cancelar</button></a>
            </div>
        </form>
    </div>
</div>
</body>