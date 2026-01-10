<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Desenvolvimento de Software - MEFEMA Systems";

get_part('includes/header.php'); 
?>
<link rel="stylesheet" href="/assets/css/produtos.css">
<link rel="stylesheet" href="/assets/css/servicos.css">
<?php get_part('pages/servicos/desenvolvimento-software/hero.php'); ?>
<?php get_part('pages/servicos/desenvolvimento-software/lista_software.php'); ?>
<?php get_part('pages/servicos/desenvolvimento-software/processo.php'); ?>
<?php get_part('pages/servicos/desenvolvimento-software/filosofia.php'); ?>
<?php get_part('pages/servicos/desenvolvimento-software/stack_tecnologico.php'); ?>
<?php get_part('pages/servicos/desenvolvimento-software/why_us.php'); ?>
<?php get_part('pages/servicos/desenvolvimento-software/faq.php'); ?>
<?php get_part('pages/servicos/desenvolvimento-software/cta.php'); ?>

<?php get_part('includes/footer.php'); ?>
