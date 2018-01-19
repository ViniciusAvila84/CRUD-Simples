<?php
include_once("config.php");
include_once("header.php");
$result = mysqli_query($mysqli, "SELECT * FROM log"); 
?>


				<div class= "col-md-12"> <!--Botões-->
					<a href="index.php" class="btn btn-default btn-sm; glyphicon glyphicon-home" style="width:130px">
					    <label>Home</label> 
					</a>
					<a href="add.php" class="btn btn-default btn-sm; glyphicon glyphicon-fire" style="width:130px">
					    <label>Nova TAG</label> 
					</a>
				</div>


		<div class="row">
	  		<div class= "col-md-12" >
	    		<h3 class= "page-header text-center"><b>
					Relatórios</b>
				</h3>	
			</div>	
		</div>		

	<script>
		$(document).ready(function() {
			$('#tabela').DataTable();
		} );
	</script>
		
		<div class="row">
			<div class= "col-md-12">
				<table id="tabela" class="display" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Tag Numero</th>
							<th>Ação</th>
							<th>Data / Hora</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Tag Numero</th>
							<th>Ação</th>
							<th>Data / Hora</th>
						</tr>
					</tfoot>
					<tbody>
					<?php foreach ($result as $res) {  ?>
						<tr>
							<td><?= $res['FK_ID_TAG'] ?></td>
							<td><?= $res['ACAO_LOG'] ?></td>
							<td><?= $res['DATA_HORA_LOG'] ?></td>
						</tr>
					<?php }?> 
					</tbody>
				</table>	

				
			</div>
		</div>

	
<?php
include_once("footer.php");
?>

