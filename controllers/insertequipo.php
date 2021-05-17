<?php
	NuevoEquipo($_POST['file1'], $_POST['abrevitura'], $_POST['nombre'], $_POST['jg'], $_POST['jp'], $_POST['je'], $_POST['jj'], $_POST['gf'], 
               $_POST['gc'], $_POST['puntos']);

	function NuevoEquipo($file1, $abreviatura,$nombre,$jg,$jp,$je,$jj,$gf,$gc,$puntos)
	{
		$nombre_archivo=$_FILES['file1']['name'];
		$ruta="logos/".$nombre_archivo;
		$archivo=$_FILES['file1']['tmp_name'];

		$subir=move_uploaded_file($archivo,$ruta);

		echo $sentencia="INSERT INTO equipos (logo, abreviatura, nombre_equipo, juegos_ganados, juegos_perdidos, juegos_empatados, juegos_jugados, goles_favor, goles_contra, puntos_totales) 
        VALUES ('".$ruta."', '".$abreviatura."', '".$nombre."', '".$jg."' , '".$jp."', '".$je."', '".$jj."', '".$gf."', '".$gc."', '".$puntos."')";
         $conexion = mysqli_connect("localhost", "root", "", "futbol");
         mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Equipo Registrado exitosamente");
	window.location.href='dashboard.php';
</script>