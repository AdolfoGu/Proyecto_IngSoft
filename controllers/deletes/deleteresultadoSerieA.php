<?php
	EliminarEquipo($_GET['id']);

	function EliminarEquipo($id)
	{
		$sentencia="DELETE FROM resultados WHERE id_partido='".$id."' ";
        $conexion = mysqli_connect("localhost", "root", "", "futbol");
        $resultado = mysqli_query($conexion, $sentencia);
	}
?>

<script type="text/javascript">
	alert("Resultado Eliminado Exitosamente");
	window.location.href='../../views/administrador/ResultadoSerieA.php';
</script>