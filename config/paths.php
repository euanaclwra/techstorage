<?php

# Caminho absoluto da pasta raíz 
define('ROOT_PATH', realpath(dirname(__DIR__)));

# Pasta do projeto
define('PROJECT_FOLDER', basename(ROOT_PATH));

# Caminhos das subpastas
define('CONFIG_PATH', ROOT_PATH . '\config');
define('CORE_PATH', ROOT_PATH . '\core');
define('PUBLIC_PATH', ROOT_PATH . '\public');
define('SMARTY_PATH', ROOT_PATH . '\smarty');
define('SRC_PATH', ROOT_PATH . '\src');
define('INSTALL_PATH', ROOT_PATH . '\install');
?>