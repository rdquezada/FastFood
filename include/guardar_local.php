<?php  
	include('../config/conexion.php');	
	extract($_POST);
	$sql="insert into locales values(' ', '$nombre','$direccion','$horario','$telefono','$latitud','$longitud')";	
	$res=mysql_query($sql);
	if ($res) {
		echo '<script>alert("DATOS GUARDADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='gestion_locales.php'</script>";
	}else{
		echo '<script>alert("PROBLEMA AL GUARDAR LOS DATOS")</script> ';
		echo "<script>location.href='gestion_locales.php'</script>";
	}
?>