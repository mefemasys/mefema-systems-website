<?php 
// 1. Chama o arquivo de configuração (único lugar que usa o servidor como base)
require_once $_SERVER['DOCUMENT_ROOT'] . '/config.php';

$pageTitle = "Websites - MEFEMA Systems - Soluções Tecnológicas Inteligentes";

// 2. Carrega as partes usando a função que criamos ou ROOT_PATH
get_part('includes/header.php'); 
get_part('pages/inicio/hero.php'); 
get_part('pages/inicio/estrategia.php'); 
get_part('pages/inicio/servicos.php'); 
get_part('pages/inicio/stats.php'); 
get_part('pages/inicio/valores.php'); 
get_part('includes/footer.php'); 
?>
