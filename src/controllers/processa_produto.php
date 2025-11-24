<?php
require_once __DIR__ . '\..\..\config/paths.php';
require_once CORE_PATH . '\smarty_init.php';
require_once SRC_PATH . '\models\Produto.php';

$erros = []; # Array pra armazenar os erros de validação
$pdo = require_once CONFIG_PATH . '\connection.php';

# Armazena os campos enviados no POST
$id = $_POST['id'] ?? null;
$nome = trim($_POST["nome"] ?? "");
$qtd = trim($_POST["qtd"] ?? "");
$codigo = trim($_POST["codigo"] ?? "");
$custo = str_replace(',', '.', $_POST['custo']);
$descricao = trim($_POST["descricao"] ?? "");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    # Valida a quantidade em estoque
    if ($qtd === "" || !is_numeric($qtd)) {
        $erros[] = "A quantidade em estoque deve ser um número inteiro.";
    }

    # Valida o custo de reposição
    if ($custo === "" || !is_numeric($custo)) {
        $erros[] = "Informe um custo de reposição válido.";
    }

    # Valida o código de barras
    if ($codigo === "" || strlen($codigo) < 8 || strlen($codigo) > 14) {
        $erros[] = "O código de barras precisa ter entre 8 e 14 caracteres.";
    }
    if (Produto::codigoBarrasExiste($pdo, $codigo, $id)) {
        $erros[] = "Já existe um produto cadastrado com esse código de barras.";
    }

    # Se houver algum erro, retorna pro form
    if (!empty($erros)) {        
        $produto = new Produto($id, $pdo, $nome, $qtd, $codigo, $custo, $descricao);

        $smarty->assign('erros', $erros);
        $smarty->assign('old', $_POST);
        $smarty->assign('produto', $produto);
        $smarty->assign('titulo', 'Novo Produto');
        $smarty->display('cadastro.tpl');        
        exit;
    # Caso contrário, salva o novo produto    
    } else {
        try {
            $novo_produto = new Produto($id, $pdo, $nome, $qtd, $codigo, $custo, $descricao);
            $novo_produto->salvar();
            
            # Volta pra index pra recarregar a lista de produtos
            header("Location: ../../public/index.php");
            exit;  
        } catch (PDOException $e) {
            echo 'ERRO: ' . $e->getMessage();
        }
    }
}

?>