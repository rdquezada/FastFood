<?php 
	session_start();
	if (isset($_SESSION['correo'])) {
	
	include('../config/conexion.php');	
	$cod=$_GET['ID_PLATO'];
	$res=mysql_query("delete from pedidos where ID_PLATO= '$cod' and ID_USUARIO='".$_SESSION['id']."'");
	//$res=mysql_query("delete from pedidos where ID_USUARIO='$cedula'");
	if ($res) {
			//echo "Se ha eliminado la Reserva!";
			echo '<script>alert("SE HA ELIMINADO LA RESERVA")</script> ';
			echo "<script>location.href='reserva.php'</script>";
		}else{
			echo "Error ".mysql_error();
		}
		}
	?>