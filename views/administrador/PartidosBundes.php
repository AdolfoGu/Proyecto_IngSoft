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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/ccs/estilos.css">
    <link rel="stylesheet" href="../../assets/ccs/bootstrap.css">
    <link rel="stylesheet" href="../../assets/ccs/estilosmenu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Proximos Partidos Bundesliga</title>
</head>
<body>

<nav class="menu">
        <a class="logo" href="">Score Direct</label></a>      
        <ul class="menu_items">
            <li><a href="dashboard.php">Usuarios</a></li>
            <li class="active"><a href="">Bundesliga</a>
                <ul class="submenu">
                    <li><a href="PartidosBBVA.php">Liga BBVA</a></li>
                    <li><a href="PartidosLaLiga.php">LaLiga</a></li>
                    <li><a href="PartidosPremier.php">Premier League</a></li>
                    <li><a href="PartidosSerieA.php">Serie A</a></li>
                </ul>
            </li>
            <li><a href="">Resultados</a>
                <ul class="submenu">
                    <li><a href="ResultadoBBVA.php">Liga BBVA</a></li>
                    <li><a href="ResultadoLaLiga.php">LaLiga</a></li>
                    <li><a href="ResultadoLeague.php">Premier League</a></li>
                    <li><a href="ResultadoSerieA.php">Serie A</a></li>
                    <li><a href="ResultadoBundes.php">Bundesliga</a></li>
                </ul>
            </li>
            <li><a href="">Equipos</a>
                <ul class="submenu">
                    <li><a href="LigaBBVA.php">Liga BBVA</a></li>
                    <li><a href="LaLiga.php">LaLiga</a></li>
                    <li><a href="PremierLeague.php">Premier League</a></li>
                    <li><a href="SerieA.php">Serie A</a></li>
                    <li><a href="Bundesliga.php">Bundesliga</a></li>
                </ul>
            </li>
            <li><a href="../../models/cerrar_sesion.php">Cerrar sesión</a></li>
        </ul>
</nav>
<br>

<div class="panel panel-primary"  align="center" style="padding:1.5%">
        <div class="panel-heading" style="white: black; font-weight:bold; font-size:35px;padding: 0px 80px;">
            PRÓXIMOS PARTIDOS
        </div>
        <div class="panel-body">
            <div class="table-responsive">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Local</th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col">Visitante</th>
                            <th scope="col"></th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col"></th>
                            <th scope="col"><a href="../../models/inserts/nuevopartidoBundes.php"><button type="button" class="btn btn-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                            </button> </a></th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $conexion = mysqli_connect("localhost", "root", "", "futbol");
                        $query = "SELECT * FROM partidos WHERE liga='Bundesliga'";
                        $resultado = mysqli_query($conexion, $query);
                        while($filas=mysqli_fetch_assoc($resultado)){
                            $conexion1 = mysqli_connect("localhost", "root", "", "futbol");
                            $query1 = "SELECT * FROM equipos WHERE nombre_equipo = '".$filas['home']."'";
                            $resultado1 = mysqli_query($conexion1, $query1);
                            $filas1=mysqli_fetch_assoc($resultado1);

                            $conexion2 = mysqli_connect("localhost", "root", "", "futbol");
                            $query2 = "SELECT * FROM equipos WHERE nombre_equipo = '".$filas['visitante']."'";
                            $resultado2 = mysqli_query($conexion2, $query2);
                            $filas2=mysqli_fetch_assoc($resultado2);

                            echo'<tr class= "efecto">';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>';echo "<img src='".$filas1['logo']."' width=30'>"; echo'</td>';
                                echo'<td>';echo $filas['home']; echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>'; echo "VS"; echo'</td>';
                                echo'<td>';echo'</td>';
                                echo'<td>'; echo $filas['visitante']; echo'</td>';
                                echo'<td>';echo "<img src='".$filas2['logo']."' width=30'>"; echo'</td>';
                                echo'<td>';echo $filas['fecha'];echo'</td>';
                                echo'<td>'; echo $filas['hora'];echo'</td>';
                                echo'<td>';echo'</td>';
                                echo "<td> <a href='../../controllers/deletes/deletepartidoBundes.php?id=".$filas['id_partido']."''><button type='button' class='btn btn-danger'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash' viewBox='0 0 16 16'>
                                    <path d='M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z'/>
                                    <path fill-rule='evenodd' d='M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z'/>
                                </svg>
                                </button></a> </td>";
                            echo'</td>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>