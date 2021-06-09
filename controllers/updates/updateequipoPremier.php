<?php

	ModificarEquipo($_POST['abreviatura'], $_POST['nombre'], $_POST['jg'], $_POST['jp'], $_POST['je'], $_POST['jj'], $_POST['gf'], $_POST['gc'], $_POST['puntos'],$_POST['id'],$_POST['liga']);

	function ModificarEquipo($abreviatura,$nombre,$jg, $jp, $je, $jj,$gf,$gc, $puntos, $id, $liga){

		$sentencia="UPDATE equipos SET abreviatura= '".$abreviatura."', nombre_equipo='".$nombre."', juegos_ganados='".$jg."', 
        juegos_perdidos='".$jp."',juegos_empatados='".$je."', juegos_jugados='".$jj."', goles_favor='".$gf."', goles_contra='".$gc."', puntos_totales='".$puntos."',  
       	liga='".$liga."' WHERE id_equipo='".$id."'";

        $conexion = mysqli_connect("localhost", "root", "", "futbol");

		mysqli_query($conexion, $sentencia) or die (mysql_error());
	}

	if($_FILES["file1"]["error"] > 0){
		
	}else if($_FILES["file1"]['name'] == null){

	}else{
			$nombre_archivo=$_FILES['file1']['name'];
			$ruta="../../images/".$nombre_archivo;
			$archivo=$_FILES['file1']['tmp_name'];

			$subir=move_uploaded_file($archivo,$ruta);
			$sentencia_img = "UPDATE equipos SET logo = '".$ruta."' WHERE id_equipo = '".$_POST['id']."' ";

			$conexion = mysqli_connect("localhost", "root", "", "futbol");

			mysqli_query($conexion, $sentencia_img) or die ("error al sbir imagen".mysql_error());

	}
?>

<script type="text/javascript">
	alert("Equipo Modificado Exitosamente");
	window.location.href='../../views/administrador/PremierLeague.php';
</script>