
<?php

	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
<div class="row">
	<div class="col-sm-12">
	<h2>Recetas electronicas</h2>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			
			
			
			</button>
		</caption>
			<tr>
				<td>Nombre</td>
				<td>Descripcion</td>
				<td>Medicamento</td>
				<td>Indicaciones</td>
				<!--<td>Editar</td>-->
				<td>Eliminar</td>
			</tr>

			<?php 

				if(isset($_SESSION['consulta'])){
					if($_SESSION['consulta'] > 0){
						$idp=$_SESSION['consulta'];
						$sql="SELECT id,nombrepaciente,descripcion,medicamento,indicaciones 
						from receta where id='$idp'";
					}else{
						$sql="SELECT id,nombrepaciente,descripcion,medicamento,indicaciones  
						from receta";
					}
				}else{
					$sql="SELECT id,nombrepaciente,descripcion,medicamento,indicaciones 
						from receta";
				}

				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4];
			 ?>

			<tr>
				<td><?php echo $ver[1] ?></td>
				<td><?php echo $ver[2] ?></td>
				<td><?php echo $ver[3] ?></td>
				<td><?php echo $ver[4] ?></td>
				<!--<td><button class="btn btn-warning glyphicon glyphicon-pencil" data-toggle="modal" data-target="#modalEdicion" onclick="agregaform('<?php // echo $datos ?>')"></button></td>-->
				<td>
					<button class="btn btn-danger glyphicon glyphicon-remove" 
					onclick="preguntarSiNo('<?php echo $ver[0] ?>')">
						
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
</div>