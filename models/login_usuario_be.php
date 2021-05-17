<?php
    session_start();

    include 'conexion_be.php';

    $nick = $_POST['usuario'];
    $contra = $_POST['contra'];

    $query = "SELECT * FROM usuarios WHERE nickname ='$nick' AND contra = '$contra'";

    $validar_login = mysqli_query($conexion, $query);

    if(mysqli_num_rows($validar_login) > 0){
        $_SESSION['usuario'] = $nick;
        header("location: ../dashboard.php");
        exit();
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