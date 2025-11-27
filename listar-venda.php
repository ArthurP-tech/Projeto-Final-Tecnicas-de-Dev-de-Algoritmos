<h1 class="text-center">Listar Vendas</h1>
<?php
$sql = "SELECT v.id_venda,
               c.nome_cliente AS nome_cliente,
               m.nome_modelo AS nome_modelo,
               f.nome_funcionario AS nome_funcionario
        FROM venda v
        INNER JOIN cliente c ON v.cliente_id_cliente = c.id_cliente
        INNER JOIN modelo m ON v.modelo_id_modelo = m.id_modelo
        INNER JOIN funcionario f ON v.funcionario_id_funcionario = f.id_funcionario";

$res = $conn->query($sql);
$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<p class='text-center'>Encontrou <b>$qtd</b> resultado(s)</p>";
    print "<table class='table table-bordered table-striped table-hover'>";
    print "<thead>
            <tr>
                <th>#</th>
                <th>Cliente</th>
                <th>Modelo</th>
                <th>Funcionário</th>
                <th>Ações</th>
            </tr>
          </thead>
          <tbody>";

    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>{$row->id_venda}</td>";
        print "<td>{$row->nome_cliente}</td>";
        print "<td>{$row->nome_modelo}</td>";
        print "<td>{$row->nome_funcionario}</td>";
        print "<td>
        <button class='btn btn-success'
        onclick=\"location.href='?page=editar-venda&id_venda={$row->id_venda}';\" >Editar</button>
        <button class='btn btn-danger' onclick=\"if(
        confirm('Tem certeza que deseja excluir?')){
        location.href='?page=salvar-venda&acao=excluir&id_venda={$row->id_venda}';
        }else{false;}\">Excluir</button>
       </td>";
        print "</tr>";
    }

    print "</tbody></table>";
} else {
    print "<p class='text-center'>Não encontrou resultado</p>";
}
?>
