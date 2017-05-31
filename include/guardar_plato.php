<?php  
	include('../config/conexion.php');	
	extract($_POST);
	$sql="insert into platos values(' ','$nombre','$detalle','$precio','$tiempo','$imagen')";	
	$res=mysql_query($sql);
	if ($res) {
		echo '<script>alert("DATOS GUARDADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='gestion_platos.php'</script>";
	}else{
		echo '<script>alert("PROBLEMA AL GUARDAR LOS DATOS")</script> ';
		echo "<script>location.href='gestion_platos.php'</script>";
	}
?>