<?php 
	include('../config/conexion.php');	
	$cod=$_GET['ID_PLATO'];
	
	$res=mysql_query("delete from platos where ID_PLATO= '$cod'");
	//$res=mysql_query("delete from pedidos where ID_USUARIO='$cedula'");
	if ($res) {
			//echo "Se ha eliminado la Reserva!";
			echo '<script>alert("SE HA ELIMINADO EL PLATO")</script> ';
			echo "<script>location.href='gestion_platos.php'</script>";
		}else{
			echo "Error ".mysql_error();
		}
?>