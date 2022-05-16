<?php 
	require_once "conexion.php";
	$conexion=conexion();
	$id=$_POST['id'];
	$nombre=$_POST['nombre'];
	$rut=$_POST['rut'];

	$sql="INSERT INTO retiro VALUES    ('','$nombre','$rut') ";
	echo $result=mysqli_query($conexion,$sql);

 ?>