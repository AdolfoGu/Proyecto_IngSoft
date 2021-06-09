<?php
	EliminarEquipo($_GET['id']);

	function EliminarEquipo($id)
	{
		$sentencia="DELETE FROM equipos WHERE id_equipo='".$id."' ";
        $conexion = mysqli_connect("localhost", "root", "", "futbol");
        $resultado = mysqli_query($conexion, $sentencia);
	}
?>

<script type="text/javascript">
	alert("Equipo Eliminado Exitosamente");
	window.location.href='../../views/administrador/PremierLeague.php';
</script>