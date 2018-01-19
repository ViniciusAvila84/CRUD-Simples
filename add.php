<?php
include_once("header.php");
?>
				<div class= "col-md-12"> <!--Botões-->
					<a href="index.php" class="btn btn-default btn-sm; glyphicon glyphicon-home" style="width:130px">
					    <label>Home</label> 
					</a>
					<a href="relatorio.php" class="btn btn-default btn-sm; glyphicon glyphicon-list-alt" style="width:130px">
					    <label>Relatórios</label> 
					</a>
				</div>	
				
		<div class="row">
	  		<div class= "col-md-12" >
	    		<h3 class= "page-header text-center"><b>
					Adicionar Nova TAG</b>
				</h3>	
			</div>	
		</div>		


	<form name="form1" class="form" action="salva.php" enctype="multipart/form-data" method="post">
		<div class="content container">
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="nome">Nome:</label>
					<input type="text" class="form-control" id="name" name="name" placeholder="Nome do Usuário" required>
			    </div>
			</div>
        </div>  
		
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="nome">Tag Numero:</label>
					<input type="text" class="form-control" id="age" name="age" placeholder="Numero da TAG" required>
			    </div>
			</div>
        </div>  
		
		
		<button type="submit" name="Submit" class="btn btn-success " style="display:block; width:150px">Salvar <span class="glyphicon glyphicon-floppy-disk"></button>
				
			
		
	</form>
<?php
include_once("footer.php");
?>
