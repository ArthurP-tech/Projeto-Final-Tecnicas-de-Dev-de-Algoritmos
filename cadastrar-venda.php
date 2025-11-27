<h1>Cadastrar Venda</h1>
<form action="?page=salvar-venda" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>cliente</label>
		<select name="cliente_id_cliente" class="form-control">
			<?php
				$sql_cliente = "SELECT * FROM cliente";
				$res_cliente = $conn->query($sql_cliente);
				if ($res_cliente->num_rows > 0) {
					while ($row_cliente = $res_cliente->fetch_object()) {
						print "<option value='{$row_cliente->id_cliente}'>{$row_cliente->nome_cliente}</option>";
					}
				} 
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>modelo</label>
		<select name="modelo_id_modelo" class="form-control">
			<?php
				$sql_modelo = "SELECT * FROM modelo";
				$res_modelo = $conn->query($sql_modelo);
				if ($res_modelo->num_rows > 0) {
					while ($row_modelo = $res_modelo->fetch_object()) {
						print "<option value='{$row_modelo->id_modelo}'>{$row_modelo->nome_modelo}</option>";
					}
				} 
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>funcionario</label>
		<select name="funcionario_id_funcionario" class="form-control">
			<?php
				$sql_funcionario = "SELECT * FROM funcionario";
				$res_funcionario = $conn->query($sql_funcionario);
				if ($res_funcionario->num_rows > 0) {
					while ($row_funcionario = $res_funcionario->fetch_object()) {
						print "<option value='{$row_funcionario->id_funcionario}'>{$row_funcionario->nome_funcionario}</option>";
					}
				} 
			?>
		</select>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-primary">Enviar</button>
	</div>
</form>
	