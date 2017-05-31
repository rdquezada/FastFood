<?php 
	session_start();
	require('../config/conexion.php');
	$correo=$_POST['email'];
	$password=$_POST['contrasenia'];

	
	$sql=mysql_query("SELECT * FROM usuarios WHERE email='$correo'");
	//$proceso=mysql_query($sql);

	if ($resultado = mysql_fetch_array($sql)) {
		if($password==$resultado['CONTRASENIA'] && $resultado['ROL']=="admin"){
			$_SESSION['id']=$resultado['ID_USUARIO'];
			$_SESSION['correo']=$correo;
			$_SESSION['nombres']=$resultado['NOMBRES'];
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='menu_admin.php'</script>";
		//header("Location: ../menu.php");
		//echo "Sesion Exitosa";
		}
	}

	$sql2=mysql_query("SELECT * FROM usuarios WHERE email='$correo'");
	//$proceso2=mysql_query($sql2);

	if ($resultado2 = mysql_fetch_array($sql2)) {
		if($password==$resultado2['CONTRASENIA'] && $resultado2['ROL']=="user"){
			$_SESSION['id']=$resultado2['ID_USUARIO'];
			$_SESSION['correo']=$correo;
			$_SESSION['nombres']=$resultado2['NOMBRES'];
			
			echo '<script>alert("BIENVENIDO USUARIO")</script> ';
			echo "<script>location.href='menu_user.php'</script>";
		//header("Location: ../menu.php");
		//echo "Sesion Exitosa";
		}else{
			echo '<script>alert("CONTRASENIA INCORRECTA")</script> ';
			echo "<script>location.href='../index.php'</script>";
		//header("Location: ../index.php");
		//echo "Sesion No Exitosa";
		}
	}else{
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		echo "<script>location.href='../index.php'</script>";	
	}
?>