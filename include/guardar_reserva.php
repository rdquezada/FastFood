<?php  
	include('../config/conexion.php');	
	extract($_POST);
	$sql="insert into pedidos values(' ',' ',' ','$hora_entrega','$direccion','$telefono',' ')";	
	$res=mysql_query($sql);
	if ($res) {
		echo '<script>alert("DATOS GUARDADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='../index.php'</script>";
		//header("Location: ../index.php");
	}else{
		echo '<script>alert("PROBLEMA AL GUARDAR LOS DATOS")</script> ';
		echo "<script>location.href='../index.php'</script>";
		//echo "Error ".mysql_error();
	}
?>