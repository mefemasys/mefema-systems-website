<?php
// Define a raiz do projeto subindo um nível (já que este arquivo está dentro da pasta /config/)
define('ROOT_PATH', realpath(__DIR__ . '/../') . '/');

// Define a URL base para o navegador (CSS, JS, Imagens e Links)
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
define('BASE_URL', $protocol . $_SERVER['HTTP_HOST'] . '/');

// Função para incluir componentes de forma limpa
function get_part($path) {
    include ROOT_PATH . $path;
}
?>
