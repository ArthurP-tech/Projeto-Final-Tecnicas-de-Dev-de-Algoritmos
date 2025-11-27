<h1>Editar Modelo</h1>
<?php
$id_modelo = (int) $_REQUEST['id_modelo']; 
$sql = "SELECT * FROM modelo WHERE id_modelo=" . $id_modelo; 
$res = $conn->query($sql);
$row = $res->fetch_object();
?>
<form action="?page=salvar-modelo" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id_modelo" value="<?php print $row->id_modelo; ?>">
    <div class="mb-3">
        <label>Nome
            <input type="text" name="nome_modelo" class="form-control" value="<?php print $row->nome_modelo; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Ano
            <input type="ano" name="ano_modelo" class="form-control" value="<?php print $row->ano_modelo; ?>">
        </label>
    </div>
    <div class="mb-3">
        <label>Preço
            <input type="text" name="cor_modelo" class="form-control" value="<?php print $row->cor_modelo; ?>">
        </label>
    </div>
    <div>
        <button class="btn btn-primary">Enviar</button>
    </div>
</form>