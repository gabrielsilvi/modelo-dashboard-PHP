<div class="title-pg">
				<h1 class="title-pg">Listagem dos Itens </h1>
			</div>

			<div class="content-din bg-white">
				<div class="form-search">
					<form class="form form-inline">
						<input type="text" name="nome" placeholder="Nome:" class="form-control">
						<input type="text" name="email" placeholder="E-mail" class="form-control">

						<button class="btn btn-search"> Pesquisar</button>	
					</form>
				</div>

				<div class="class-insert">
					<a href="" class="btn-insert">
						<span class="glyphicon glyphicon-plus btn-insert"></span>
						Cadastrar
					</a>
				</div>

				<table class="table table-striped">
  					<tr>
  						<th>Nome</th>
  						<th>Email</th>
  						<th>Last</th>
  						<th width="100">Acoes</th>
  					</tr>
  					<?php for ($i=0; $i <10 ; $i++) { ?>
  						<tr>
  							<td>joao severino</td>
  							<td>jj.severino@dominio.com.br</td>
  							<td>Ultima informacao</td>
  							<td>
  								<a href="" class="bt-edit"><span class=" glyphicon glyphicon-pencil"></span></a>
  								<a href="" class="bt-delete"><span class="glyphicon glyphicon-trash"></span></a>
  							</td>

  						</tr>
  					<?php }?>

				</table>

				<nav aria-label="Page navigation">
				  		<ul class="pagination">
				    	<li>
				      		<a href="#" aria-label="Previous">
				       		 <span aria-hidden="true">&laquo;</span>
				     		 </a>
				   		</li>
						    <li><a href="#">1</a></li>
						    <li><a href="#">2</a></li>
						    <li><a href="#">3</a></li>
						    <li><a href="#">4</a></li>
						    <li><a href="#">5</a></li>
						    <li>
				      		<a href="#" aria-label="Next">
				        	<span aria-hidden="true">&raquo;</span>
				     		 </a>
				    	</li>
				  		</ul>
					</nav>

			</div> <!-- conteudo dinamico -->