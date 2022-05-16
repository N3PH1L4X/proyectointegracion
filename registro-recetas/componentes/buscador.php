<?php 
	require_once "../php/conexion.php";
	$conexion=conexion();

	$sql="SELECT id,nombrepaciente,descripcion,medicamento,indicaciones 
						from receta";
				$result=mysqli_query($conexion,$sql);

 ?>
<br><br>



	<script type="text/javascript">
		$(document).ready(function(){
			$('#buscadorvivo').select2();

			$('#buscadorvivo').change(function(){
				$.ajax({
					type:"post",
					data:'valor=' + $('#buscadorvivo').val(),
					url:'php/crearsession.php',
					success:function(r){
						$('#tabla').load('componentes/tabla.php');
					}
				});
			});
		});
	</script>