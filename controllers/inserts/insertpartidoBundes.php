<?php
	NuevoPartido($_POST['local'], $_POST['visitante'], $_POST['fecha'], $_POST['hora']);

	function NuevoPartido($local,$visitante,$fecha,$hora)
	{
		$sentencia="INSERT INTO partidos (home, visitante, liga, fecha, hora) 
        VALUES ('".$local."', '".$visitante."', 'Bundesliga', '".$fecha."' , '".$hora."')";
         $conexion = mysqli_connect("localhost", "root", "", "futbol");
         mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));

		 $sentencia1="INSERT INTO resultados (home, visitante, liga, gol_home, gol_visitante) 
		 VALUES ('".$local."', '".$visitante."', 'BUndesliga', NULL , NULL)";
		  $conexion = mysqli_connect("localhost", "root", "", "futbol");
		  mysqli_query($conexion, $sentencia1) or die (mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Partido Registrado Exitosamente");
	window.location.href='../../views/administrador/PartidosBundes.php';
</script>