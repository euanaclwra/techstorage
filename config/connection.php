<?php
$ini = __DIR__ . '\config.ini';

# Verifica se o arquivo INI existe
if (!file_exists($ini)) {
    throw new Exception('Arquivo INI não encontrado.'); 
    exit;
}

# Carrega as credenciais
$config = parse_ini_file($ini, true);

# Verifica se a seção [database] existe
if (!isset($config['database'])) {
    throw new Exception('Seção [database] não encontrada no arquivo INI.');
    exit;
}

# Extrai as credenciais
$config_bd = $config['database'];

$hostname = $config_bd['DB_HOSTNAME'];
$database = $config_bd['DB_NAME'];
$port = $config_bd['DB_PORT'];
$username = $config_bd['DB_USERNAME'];
$password = $config_bd['DB_PASSWORD'];

# Tenta a conexão
try {
    $conexao = new PDO("mysql:host=$hostname;port=$port;dbname=$database;", $username, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conexao;
} catch (PDOException $e) {
    echo 'ERRO: ' . $e->getMessage();
}
?>