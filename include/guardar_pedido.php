<?php  
	
		$guardar_usuario = $_GET['editar'];
		$guardar_pedido = $_GET['editar2'];
		include('../config/conexion.php');	
		$fecha_actual = date("Y-m-d");	
		$consulta ="INSERT INTO `pedidos`(`ID_PLATO`, `ID_USUARIO`, `ID_LOCAL`, `FECHA_PEDIDO`, `HORA_ENTREGA`, `DIRECCION`, `TELEFONO`, `OBSERVACION`, `ESTADO`) VALUES ('$guardar_pedido','$guardar_usuario','1','$fecha_actual','','','','','En proceso')";
		$ejecutar = mysql_query($consulta, $conexion);

		if ($ejecutar) {
		echo '<script>alert("DATOS GUARDADOS CORRECTAMENTE")</script> ';
		echo "<script>location.href='menu_user.php'</script>";
		}else{
			echo '<script>alert("PROBLEMA AL GUARDAR LOS DATOS")</script> ';
			echo "<script>location.href='menu_user.php'</script>";
		}
			
?>