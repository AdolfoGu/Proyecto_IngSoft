<?php
    session_start();

    $conexion = mysqli_connect("localhost", "root", "", "futbol");

    $nick = $_POST['usuario'];
    $contra = $_POST['contra'];

    $query = "SELECT * FROM usuario WHERE nickname ='$nick' AND contraseña = '$contra'";

    $validar_login = mysqli_query($conexion, $query);

    $re=mysqli_fetch_assoc($validar_login);

    if(mysqli_num_rows($validar_login) > 0){

        if( $re['rol'] == 'admin'){
            $_SESSION['usuario'] = $nick;
            header("location: ../views/administrador/dashboard.php");
            exit();
        }else if($re['rol']== 'usua'){
            $_SESSION['usuario'] = $nick;
            header("location: ../views/usuario/dashboard.php");
            exit();
        }
    }else{
        echo'
        <script>
            alert("Datos erroneos");
            window.location = "../index.php";
        </script>
        ';
        exit();
    }

?>