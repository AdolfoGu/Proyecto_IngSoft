<?php 
    $conexion = mysqli_connect("localhost", "root", "", "futbol");

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $nombre_usuario = $_POST['nick'];
    $contra = $_POST['contra'];

    $query = "INSERT INTO usuario(nombre, apellido, nickname, contraseña, rol) 
              VALUES (' $nombre', '$apellido', '$nombre_usuario', '$contra', 'usua')";

    //Verificación de usuario
    $verific = "SELECT * FROM usuario WHERE nickname='$nombre_usuario'";
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