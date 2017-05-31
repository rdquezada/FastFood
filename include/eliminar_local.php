<?php 


	include('../config/conexion.php');	
	$cod=$_GET['ID_LOCAL'];
	
	$res=mysql_query("delete from locales where ID_LOCAL= '$cod'");
	//$res=mysql_query("delete from pedidos where ID_USUARIO='$cedula'");
	if ($res) {
			//echo "Se ha eliminado la Reserva!";
			echo '<script>alert("SE HA ELIMINADO EL LOCAL")</script> ';
			echo "<script>location.href='gestion_locales.php'</script>";
		}else{
			echo "Error ".mysql_error();
		}
	?>