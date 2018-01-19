<?php
include_once("config.php");
include_once("header.php");
$result = mysqli_query($mysqli, "SELECT * FROM cadastro"); // using mysqli_query instead
?>
			<div class="row">
				<div class= "col-md-12"> <!--Botões-->
					<a href="relatorio.php" class="btn btn-default btn-sm; glyphicon glyphicon-list-alt" style="width:130px">
					    <label>Relatórios</label> 
					</a>
					<a href="add.php" class="btn btn-default btn-sm; glyphicon glyphicon-fire" style="width:130px">
					    <label>Nova TAG</label> 
					</a>
				</div>

				<div class= "col-md-12" >
					<h3 class= "page-header text-center"><b>
					Home</b>
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
							<th>Tag Nome</th>
							<th>Numero</th>
							<th>Deletar</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Tag Nome</th>
							<th>Numero</th>
							<th>Deletar</th>
						</tr>
					</tfoot>
					<tbody>
					<?php foreach ($result as $res) {  ?>
						<tr>
							<td><?= $res['TAG_NOME'] ?></td>
							<td><?= $res['TAG_NUMERO'] ?></td>
							<td><a href="delete.php?id=<?=$res[PK_ID_TAG]?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a></td>
						</tr>
					<?php }?> 
					</tbody>
				</table>	

						
			</div>
		</div>
			
	<?php
		include_once("footer.php");
	?>
		