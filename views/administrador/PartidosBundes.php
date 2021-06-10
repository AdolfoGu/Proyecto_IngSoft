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
        <a class="logo" href="dashboard.php">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-trophy-fill" viewBox="0 0 16 16">
          <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935z"/>
        </svg>
        Score Direct</label></a>      
        <ul class="menu_items">
            <li><a href="dashboard.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            Usuarios</a></li>
            <li class="active"><a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-all" viewBox="0 0 16 16">
                <path d="M8.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L2.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093L8.95 4.992a.252.252 0 0 1 .02-.022zm-.92 5.14.92.92a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 1 0-1.091-1.028L9.477 9.417l-.485-.486-.943 1.179z"/>
            </svg>
            Bundesliga</a>
                <ul class="submenu">
                    <li><a href="PartidosBBVA.php">Liga BBVA</a></li>
                    <li><a href="PartidosLaLiga.php">LaLiga</a></li>
                    <li><a href="PartidosPremier.php">Premier League</a></li>
                    <li><a href="PartidosSerieA.php">Serie A</a></li>
                </ul>
            </li>
            <li><a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 16 16">
              <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
              <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
            </svg>
            Resultados</a>
                <ul class="submenu">
                    <li><a href="ResultadoBBVA.php">Liga BBVA</a></li>
                    <li><a href="ResultadoLaLiga.php">LaLiga</a></li>
                    <li><a href="ResultadoLeague.php">Premier League</a></li>
                    <li><a href="ResultadoSerieA.php">Serie A</a></li>
                    <li><a href="ResultadoBundes.php">Bundesliga</a></li>
                </ul>
            </li>
            <li><a href="">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-table" viewBox="0 0 16 16">
              <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm15 2h-4v3h4V4zm0 4h-4v3h4V8zm0 4h-4v3h3a1 1 0 0 0 1-1v-2zm-5 3v-3H6v3h4zm-5 0v-3H1v2a1 1 0 0 0 1 1h3zm-4-4h4V8H1v3zm0-4h4V4H1v3zm5-3v3h4V4H6zm4 4H6v3h4V8z"/>
            </svg>
            Equipos</a>
                <ul class="submenu">
                    <li><a href="LigaBBVA.php">Liga BBVA</a></li>
                    <li><a href="LaLiga.php">LaLiga</a></li>
                    <li><a href="PremierLeague.php">Premier League</a></li>
                    <li><a href="SerieA.php">Serie A</a></li>
                    <li><a href="Bundesliga.php">Bundesliga</a></li>
                </ul>
            </li>
            <li><a href="../../models/cerrar_sesion.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
              <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
            Cerrar sesión</a></li>
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