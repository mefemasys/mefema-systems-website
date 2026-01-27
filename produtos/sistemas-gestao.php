<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Sistemas de Gestão - MEFEMA Systems";

get_part9('pages/produtos/sistemas-gestao/fetch_data.php');
$dados_sistemas = buscarDadosSistemas();
?>
<?php get_part('includes/header.php'); ?>
<link rel="stylesheet" href="/assets/css/produtos.css">

<?php get_part('pages/produtos/sistemas-gestao/hero.php'); ?>
<!-- Sistemas List -->
<?php if ($dados_sistemas): ?>
<?php get_part('pages/produtos/sistemas-gestao/filtros-sistemas.php'); ?>
<?php get_part('pages/produtos/sistemas-gestao/modal-detalhes.php'); ?>
<?php get_part('pages/produtos/sistemas-gestao/modal-encomendas.php'); ?>
<?php get_part('pages/produtos/sistemas-gestao/scripts.php'); ?>
<?php get_part('pages/produtos/sistemas-gestao/estilos.php'); ?>

<?php else: ?>
<div class="container my-5 py-5 text-center">
    <div class="alert alert-danger">Erro ao carregar sistemas.</div>
</div>
<?php endif; ?>
<?php get_part('pages/produtos/cta.php'); ?>
<?php get_part('includes/footer.php'); ?>
