<?php 
    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellido_pa = $_POST['apellido_paterno'];
    $apellido_ma = $_POST['apellido_materno'];
    $nombre_usuario = $_POST['nick'];
    $contra = $_POST['contra'];

    $query = "INSERT INTO usuarios(nombre, apellido_paterno, apellido_materno,  nickname, contra) 
              VALUES (' $nombre', '$apellido_pa', '$apellido_ma', '$nombre_usuario', '$contra')";

    //Verificación de usuario
    $verific = "SELECT * FROM usuarios WHERE nickname='$nombre_usuario'";
    $verificar_usuario = mysqli_query($conexion, $verific);
    if(mysqli_num_rows($verificar_usuario) > 0){
        echo '
            <script>
                alert("Usuario Repetido, intenta con otro");
                window.location = "../index.php";
            </script>
        ';
        exit();
    }


    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario registrado correctamente");
                window.location = "../index.php";
            </script>
        ';
    }else{
        echo '
        <script>
            alert("Eror, datos incorrectos);
            window.location = "../index.php";
        </script>
    ';
    }

    mysqli_close($conexion);
?>