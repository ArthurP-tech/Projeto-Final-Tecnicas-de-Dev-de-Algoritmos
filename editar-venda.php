
<h1>Editar Venda</h1>
<?php
$id_venda = (int) $_REQUEST['id_venda'];
$sql = "SELECT * FROM venda WHERE id_venda=" . $id_venda;
$res = $conn->query($sql);
$row = $res->fetch_object();

// Buscar listas para os selects
$clientes = $conn->query("SELECT id_cliente, nome_cliente FROM cliente");
$modelos = $conn->query("SELECT id_modelo, nome_modelo FROM modelo");
$funcionarios = $conn->query("SELECT id_funcionario, nome_funcionario FROM funcionario");
?>
<form action="?page=salvar-venda" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_venda" value="<?php print $row->id_venda; ?>">

    <div class="mb-3">
        <label>Cliente</label>
        <select name="cliente_id_cliente" class="form-control">
            <?php while ($c = $clientes->fetch_object()): ?>
                <option value="<?php print $c->id_cliente; ?>" <?php print ($c->id_cliente == $row->cliente_id_cliente) ? 'selected' : ''; ?>>
                    <?php print $c->nome_cliente; ?>
                </option>
            <?php endwhile; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Modelo</label>
        <select name="modelo_id_modelo" class="form-control">
            <?php while ($m = $modelos->fetch_object()): ?>
                <option value="<?php print $m->id_modelo; ?>" <?php print ($m->id_modelo == $row->modelo_id_modelo) ? 'selected' : ''; ?>>
                    <?php print $m->nome_modelo; ?>
                </option>
            <?php endwhile; ?>
        </select>
    </div>

    <div class="mb-3">
        <label>Funcionário</label>
        <select name="funcionario_id_funcionario" class="form-control">
            <?php while ($f = $funcionarios->fetch_object()): ?>
                <option value="<?php print $f->id_funcionario; ?>" <?php print ($f->id_funcionario == $row->funcionario_id_funcionario) ? 'selected' : ''; ?>>
                    <?php print $f->nome_funcionario; ?>
                </option>
            <?php endwhile; ?>
        </select>
    </div>

    <div>
        <button class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>
