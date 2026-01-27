<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Websites - MEFEMA Systems";

get_part('pages/produtos/websites/fech_data.php');
$dados_websites = buscarDadosWebsites();

?>
<?php get_part('includes/header.php'); ?>
<link rel="stylesheet" href="/assets/css/produtos.css">
<?php include 'pages/produtos/websites/hero.php'; ?>

<?php if ($dados_websites): ?>
<?php include 'pages/produtos/websites/filtros-websites.php'; ?>
<?php include 'pages/produtos/websites/modal-detalhes.php'; ?>
<?php include 'pages/produtos/websites/modal-encomenda.php'; ?>
<?php include 'pages/produtos/websites/scripts.php'; ?>

<?php else: ?>
<div class="container my-5 py-5">
    <div class="alert alert-danger text-center">
        <i class="ri-error-warning-line me-2"></i>
        Erro ao carregar os pacotes de websites.
    </div>
</div>
<?php endif; ?>
<?php get_part('pages/produtos/cta.php'); ?>
<?php get_part('includes/footer.php'); ?>
