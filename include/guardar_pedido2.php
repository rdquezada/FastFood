<?php  
	
		$guardar_plato = $_GET['editar1'];
		$guardar_usuario = $_GET['editar2'];
		$guardar_pedido = $_GET['editar3'];
		include('../config/conexion.php');	
		$fecha_actual = date("Y-m-d");	
		$consulta ="INSERT INTO `pedidos`(`ID_PLATO`, `ID_USUARIO`, `ID_LOCAL`,`FECHA_PEDIDO`, `HORA_ENTREGA`, `DIRECCION`, `TELEFONO`, `OBSERVACION`, `ESTADO`) VALUES ('$guardar_plato','$guardar_usuario','$guardar_pedido','$fecha_actual','','','','','En proceso')";

		$ejecutar = mysql_query($consulta, $conexion);

		if ($ejecutar) {
		echo '<script>alert("DATOS GUARDADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='menu_user.php'</script>";
		}else{
			echo '<script>alert("PROBLEMA AL GUARDAR LOS DATOS")</script> ';
			echo "<script>location.href='menu_user.php'</script>";
		}
			
?>