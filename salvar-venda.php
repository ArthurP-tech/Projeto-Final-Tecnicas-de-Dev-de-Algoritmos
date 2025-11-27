
<?php

switch ($_REQUEST['acao']) {
    case 'cadastrar':
        $cliente_id = $_POST['cliente_id_cliente'] ?? null;
        $funcionario_id = $_POST['funcionario_id_funcionario'] ?? null;
        $modelo_id = $_POST['modelo_id_modelo'] ?? null;

        if (empty($cliente_id) || empty($funcionario_id) || empty($modelo_id)) {
            echo "<script>alert('Erro: Cliente, Funcionário ou Modelo não informado');</script>";
            echo "<script>location.href='?page=listar-venda';</script>";
            exit;
        }

        $stmt = $conn->prepare("INSERT INTO venda (cliente_id_cliente, funcionario_id_funcionario, modelo_id_modelo) VALUES (?, ?, ?)");
        $stmt->bind_param("iii", $cliente_id, $funcionario_id, $modelo_id);

        if ($stmt->execute()) {
            echo "<script>alert('Cadastrou com sucesso');</script>";
        } else {
            echo "<script>alert('Erro ao cadastrar: {$stmt->error}');</script>";
        }
        
if (!$stmt->execute()) {
    die("Erro no UPDATE: " . $stmt->error);
} else {
    echo "UPDATE OK!";
}
exit;

        echo "<script>location.href='?page=listar-venda';</script>";
        break;

    case 'editar':
        $id_venda = $_POST['id_venda'] ?? null;
        $cliente_id = $_POST['cliente_id_cliente'] ?? null;
        $funcionario_id = $_POST['funcionario_id_funcionario'] ?? null;
        $modelo_id = $_POST['modelo_id_modelo'] ?? null;

        if (empty($id_venda) || empty($cliente_id) || empty($funcionario_id) || empty($modelo_id)) {
            echo "<script>alert('Erro: Dados incompletos');</script>";
            echo "<script>location.href='?page=listar-venda';</script>";
            exit;
        }

        $stmt = $conn->prepare("UPDATE venda SET cliente_id_cliente=?, funcionario_id_funcionario=?, modelo_id_modelo=? WHERE id_venda=?");
        $stmt->bind_param("iiii", $cliente_id, $funcionario_id, $modelo_id, $id_venda);

        if ($stmt->execute()) {
            echo "<script>alert('Venda editada com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro ao editar: {$stmt->error}');</script>";
        }
        echo "<script>location.href='?page=listar-venda';</script>";
        break;

    
    case 'excluir':
        $id_venda = $_REQUEST['id_venda'] ?? null;

        if (empty($id_venda)) {
            echo "<script>alert('Erro: ID da venda não informado');</script>";
            echo "<script>location.href='?page=listar-venda';</script>";
            exit;
        }

        $stmt = $conn->prepare("DELETE FROM venda WHERE id_venda=?");
        $stmt->bind_param("i", $id_venda);

        if ($stmt->execute()) {
            echo "<script>alert('Venda excluída com sucesso!');</script>";
        } else {
            echo "<script>alert('Erro ao excluir: {$stmt->error}');</script>";
        }
        echo "<script>location.href='?page=listar-venda';</script>";
        break;
        }