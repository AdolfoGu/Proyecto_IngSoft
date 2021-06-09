<?php
<<<<<<< HEAD
	NuevoPartido($_POST['local'], $_POST['visitante'], $_POST['fecha'], $_POST['hora'], $_POST['jornada']);

	function NuevoPartido($local,$visitante,$fecha,$hora,$jornada)
	{
		$sentencia="INSERT INTO partidos (home, visitante, liga, fecha, hora,jornada) 
        VALUES ('".$local."', '".$visitante."', 'Bundesliga', '".$fecha."' , '".$hora."' , '".$jornada."')";
         $conexion = mysqli_connect("localhost", "root", "", "futbol");
         mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));

		 $sentencia1="INSERT INTO resultados (home, visitante, liga, gol_home, gol_visitante, jornada) 
		 VALUES ('".$local."', '".$visitante."', 'BUndesliga', NULL , NULL , '".$jornada."')";
=======
	NuevoPartido($_POST['local'], $_POST['visitante'], $_POST['fecha'], $_POST['hora']);

	function NuevoPartido($local,$visitante,$fecha,$hora)
	{
		$sentencia="INSERT INTO partidos (home, visitante, liga, fecha, hora) 
        VALUES ('".$local."', '".$visitante."', 'Bundesliga', '".$fecha."' , '".$hora."')";
         $conexion = mysqli_connect("localhost", "root", "", "futbol");
         mysqli_query($conexion, $sentencia) or die (mysqli_error($conexion));

		 $sentencia1="INSERT INTO resultados (home, visitante, liga, gol_home, gol_visitante) 
		 VALUES ('".$local."', '".$visitante."', 'BUndesliga', NULL , NULL)";
>>>>>>> d50bf4a57c41c327e22c6f94b2017e38e18eef64
		  $conexion = mysqli_connect("localhost", "root", "", "futbol");
		  mysqli_query($conexion, $sentencia1) or die (mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Partido Registrado Exitosamente");
	window.location.href='../../views/administrador/PartidosBundes.php';
</script>