<?php

	ModificarEquipo($_POST['gol_home'], $_POST['gol_visitante'], $_POST['id']);

	function ModificarEquipo($gol_home, $gol_visitante, $id){

		$sentencia="UPDATE resultados SET gol_home= '".$gol_home."', gol_visitante='".$gol_visitante."' WHERE id_partido='".$id."'";

        $conexion = mysqli_connect("localhost", "root", "", "futbol");

		mysqli_query($conexion, $sentencia) or die (mysql_error());
	}

?>

<script type="text/javascript">
	alert("Resultado Modificado Exitosamente");
	window.location.href='../../views/administrador/ResultadoBBVA.php';
</script>