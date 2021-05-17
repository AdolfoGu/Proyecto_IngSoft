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
    <title>Equipos</title>
    <link rel="stylesheet" href="assets/ccs/estilos.css">
    <link rel="stylesheet" href="assets/ccs/bootstrap.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Equipos</title>
    <!---<a href="php/cerrar_sesion.php">cerrar sesión</a>--->
</head>
<body>
<br>
<legend style="color: white; font-weight:bold; font-size:35px;padding: 0px 80px;S">Equipos Liga Méxicana</legend>
    <table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px; border: 1px solid #1C6EA4; background-color: #EEEEEE; text-align: left;">
        <thead>
            <th>ID</th>
            <th>Logo</th>
            <th>Abreviatura</th>
            <th>Nombre</th>
            <th>JG</th>
            <th>JP</th>
            <th>JE</th>
            <th>JJ</th>
            <th>GF</th>
            <th>GE</th>
            <th>PUNTOS</th>
            <th><a href="nuevoequipo.php"><button type="button" class="btn btn-info">Nuevo</button> </a></th>
        </thead>

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
    </table>
</body>
</html>