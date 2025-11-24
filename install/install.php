<?php
require_once __DIR__ . '\..\config\paths.php';
require_once CORE_PATH . '\smarty_init.php';

$ini = CONFIG_PATH . "\config.ini";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    # Obtém as credenciais informadas
    $hostname = trim($_POST["hostname"] ?? "");
    $port = trim($_POST["port"] ?? "");
    $username = trim($_POST["username"] ?? "");
    $password = trim($_POST["password"] ?? ""); 
    
    # Armazena as credenciais num array
    $credenciais = [
        "hostname" => $hostname,
        "port" => $port,
        "database" => "techstorage",
        "username" => $username,
        "password" => $password
    ];

    # Testa as credenciais
    $resultado = validaCredenciais($credenciais);

    if ($resultado === true) {
        # Se forem válidas, grava no arquivo INI
        criaArquivoINI($ini, $credenciais);
        # Gera a estrutura do BD
        criaEstruturaBD($credenciais);
    } else {
        # Se não, retorna o erro pra página de configuração
        $smarty->assign('erro', $resultado);
        $smarty->display('install.tpl');
        exit;
    }

    header("Location: /techstorage/public/index.php");
}

function validaCredenciais($credenciais) {    
    try {
        # Cria uma conexão temporária
        $pdo = new PDO(
            "mysql:host={$credenciais['hostname']};port={$credenciais['port']}",
            $credenciais['username'], 
            $credenciais['password']
        );
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        # Testa a conexão
        $pdo->query("SELECT 1");
        # Se bem sucedida, retorna true       
        return true;
    } catch (Throwable $e) {
        return $e->getMessage();
    }
}

function criaArquivoINI($ini, $credenciais) {
    try {
        # Monta o conteúdo do arquivo
        $config = "[database]
            DB_HOSTNAME=\"{$credenciais['hostname']}\" 
            DB_PORT=\"{$credenciais['port']}\" 
            DB_NAME=\"{$credenciais['database']}\" 
            DB_USERNAME=\"{$credenciais['username']}\" 
            DB_PASSWORD=\"{$credenciais['password']}\" 
        ";

        # Cria o arquivo e insere as credenciais
        file_put_contents($ini, $config);
    } catch (Exception $e) {
        echo 'Erro ao Gerar Arquivo INI: ' . $e->getMessage();
    }    
}

function criaEstruturaBD($credenciais) {
    try {
        # Cria conexão temporária    
        $pdo = new PDO(
            "mysql:host={$credenciais['hostname']};port={$credenciais['port']}",
            $credenciais['username'], 
            $credenciais['password']
        );  
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);          
        # Obtém as queries do arquivo de configuração
        $query = file_get_contents(INSTALL_PATH . '\db_structure.sql');
        # Cria a estrutura de tabelas
        $pdo->exec($query);
        }
    catch (Exception $e) {
        echo 'Erro ao Gerar a Estrutura do Banco de Dados: ' . $e->getMessage();
    }
}
?>
