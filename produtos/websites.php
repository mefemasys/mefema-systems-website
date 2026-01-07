<?php 
// Chama o arquivo de configuração na nova pasta
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';

$pageTitle = "Websites - MEFEMA Systems";

// Agora você usa os caminhos a partir da raiz do site
get_part('includes/header.php'); 
get_part('pages/inicio/hero.php'); 
get_part('pages/inicio/servicos.php'); 
get_part('includes/footer.php'); 
?>
