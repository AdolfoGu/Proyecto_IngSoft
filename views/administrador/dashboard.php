<?php
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Debes iniciar sesión, esto no es correcto");
                window.location = ../"index.php";
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
    <title>Equipos</title>
    <link rel="stylesheet" href="assets/ccs/estilos.css">
    <link rel="stylesheet" href="../../assets/ccs/bootstrap.css">
    <link rel="stylesheet" href="../../assets/ccs/estilosmenu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Equipos</title>
</head>
<body>

<nav class="menu">
        <a class="logo" href="">Score Direct</label></a>      
        <ul class="menu_items">
            <li><a href="">Ligas</a></li>
            <li class="active"><a href="">Equipos</a></li>
            <li><a href="">Partidos</a></li>
            <li><a href="../../models/cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
    </nav>
<br>

<div class="panel panel-primary"  align="center" style="padding:1.5%">
        <div class="panel-heading" style="white: black; font-weight:bold; font-size:35px;padding: 0px 80px;">
            Equipos Mexicanos
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Escudo</th>
                            <th scope="col">Abreviatura</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Juegos Ganados</th>
                            <th scope="col">Juegos Perdidos</th>
                            <th scope="col">Juegos Empatados</th>
                            <th scope="col">Juegos Jugados</th>
                            <th scope="col">Goles a Favor</th>
                            <th scope="col">Goles en Contra</th>
                            <th scope="col">Puntos</th>
                            <th scope="col"></th>
                            <th scope="col"><a href="../../models/nuevoequipo.php"><button type="button" class="btn btn-info">Nuevo</button> </a></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $conexion = mysqli_connect("localhost", "root", "", "futbol");
                        $query = "SELECT * FROM equipos";
                        $resultado = mysqli_query($conexion, $query);
                        while($filas=mysqli_fetch_assoc($resultado)){
                            echo'<tr>';
                                echo'<td>'; echo $filas['id_equipo']; echo'</td>';
                                echo'<td>';echo "<img src='".$filas['logo']."' width='100'>"; echo'</td>';
                                echo'<td>'; echo $filas['abreviatura']; echo'</td>';
                                echo'<td>'; echo $filas['nombre_equipo']; echo'</td>';
                                echo'<td>'; echo $filas['juegos_ganados']; echo'</td>';
                                echo'<td>'; echo $filas['juegos_perdidos']; echo'</td>';
                                echo'<td>'; echo $filas['juegos_empatados']; echo'</td>';
                                echo'<td>'; echo $filas['juegos_jugados']; echo'</td>';
                                echo'<td>'; echo $filas['goles_favor']; echo'</td>';
                                echo'<td>'; echo $filas['goles_contra']; echo'</td>';
                                echo'<td>'; echo $filas['puntos_totales']; echo'</td>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>