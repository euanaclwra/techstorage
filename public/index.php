<?php
require_once '../config/paths.php';
require_once CORE_PATH . '\smarty_init.php'; 
require_once SRC_PATH . '\models\Produto.php';

$ini = CONFIG_PATH . "\config.ini";

if (!file_exists($ini)) {    
    # Se o arquivo INI não existe, redireciona pra tela de configuração
    $smarty->display('install.tpl'); 
} else {
    # Caso contrário, inicia a aplicação 
    $pdo = require_once CONFIG_PATH . '\connection.php';

    $listaProdutos = Produto::buscar($pdo); # Armazena todos os produtos cadastrados
    $temEstoqueBaixo = false;

    # Verifica se existe algum produto com quantidade em estoque menor que 3
    foreach ($listaProdutos as $produto) {
        if ($produto->getQtdEstoque() < 3) {
            $temEstoqueBaixo = true;
            break;
        }
    }

    # Envia os dados pro template
    $smarty->assign('produtos', $listaProdutos);
    $smarty->assign('temEstoqueBaixo', $temEstoqueBaixo);
    $smarty->display('index.tpl');
}
?>