<h1>Cadastrar Modelo</h1>
<form action="?page=salvar-modelo" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	
	<div class="mb-3">
		<label>Nome do Modelo</label>
		<input type="text" name="nome_modelo" class="form-control">
	</div>

	<div class="mb-3">
		<label>Marca</label>
		<select name="marca_id_marca" class="form-control">
			<?php
				$sql_marca = "SELECT * FROM marca";
				$res_marca = $conn->query($sql_marca);
				if ($res_marca->num_rows > 0) {
					while ($row_marca = $res_marca->fetch_object()) {
						print "<option value='{$row_marca->id_marca}'>{$row_marca->nome_marca}</option>";
					}
				} 
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Cor</label>
		<input type="text" name="cor_modelo" class="form-control">
	</div>

	<div class="mb-3">
		<label>Ano</label>
		<input type="text" name="ano_modelo" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>