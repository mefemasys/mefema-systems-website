<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Formação Corporativa - MEFEMA Systems";

get_part('includes/header.php'); 
?>
<link rel="stylesheet" href="/assets/css/produtos.css">


<?php get_part('pages/servicos/formacao/hero.php'); ?>
<?php get_part('pages/servicos/formacao/cursos.php'); ?>
<?php get_part('pages/servicos/formacao/processo.php'); ?>
<?php get_part('pages/servicos/formacao/metodologia.php'); ?>
<?php get_part('pages/servicos/formacao/formatos.php'); ?>
<?php get_part('pages/servicos/formacao/why-us.php'); ?>
<?php get_part('pages/servicos/formacao/faq.php'); ?>
<?php get_part ('pages/serrvicos/formacao/cta.php'); ?>
<?php get_part('includes/footer.php'); ?>
