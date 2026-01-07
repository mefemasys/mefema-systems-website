<?php
// Define o caminho físico do servidor (C:/xampp/htdocs/site ou /var/www/html)
define('ROOT_PATH', __DIR__ . '/');

// Define a URL base para links, CSS e Imagens (Ajuste para seu domínio)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . '/');

// Função auxiliar para facilitar os includes
function get_part($path) {
    include ROOT_PATH . $path;
}
?>
