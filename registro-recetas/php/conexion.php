<?php 
		function conexion(){
			$servidor="localhost";
			$usuario="root"; // root cga81478_pana
			$password="19asd19asd"; // 19asd19asd lapandillita@
			$bd="bddcesfam"; // bddcesfam cga81478_bddcesfam

			$conexion=mysqli_connect($servidor,$usuario,$password,$bd);

			return $conexion;
		}

 ?>