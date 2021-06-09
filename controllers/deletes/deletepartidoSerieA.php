<?php
	EliminarEquipo($_GET['id']);

	function EliminarEquipo($id)
	{
		$sentencia="DELETE FROM partidos WHERE id_partido='".$id."' ";
        $conexion = mysqli_connect("localhost", "root", "", "futbol");
        $resultado = mysqli_query($conexion, $sentencia);
	}
?>

<script type="text/javascript">
	alert("Partido Eliminado Exitosamente");
	window.location.href='../../views/administrador/PartidosSerieA.php';
</script>