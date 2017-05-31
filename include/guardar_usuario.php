<?php  
	include('../config/conexion.php');	
	extract($_POST);
	$sql="insert into usuarios values('$id_usuario','$nombres','$email','$telefono','$direccion','$contrasenia','user')";	
	$res=mysql_query($sql);
	if ($res) {
		echo '<script>alert("DATOS GUARDADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='../index.php'</script>";
	}else{
		echo '<script>alert("PROBLEMA AL GUARDAR LOS DATOS")</script> ';
		echo "<script>location.href='../index.php'</script>";
	}
?>