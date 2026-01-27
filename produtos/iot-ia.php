<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';

$pageTitle = "Soluções IA + IoT - MEFEMA Systems";
get_part('pages/produtos/iot-ia/fetch_data.php');

$dados_ia_iot = buscarDadosIAIoT();
?>
<?php get_part('includes/header.php'); ?>
<link rel="stylesheet" href="/assets/css/produtos.css">

<?php get_part('pages/produtos/iot-ia/hero.php'); ?>

<!-- IA + IoT List -->
<?php if ($dados_ia_iot): ?>
<?php get_part('pages/produtos/iot-ia/filtrar-solutions.php'); ?>
<?php get_part('pages/produtos/iot-ia/modal-detalhes.php'); ?>
<?php get_part('pages/produtos/iot-ia/ia-iot-scripts.php'); ?>

<?php else: ?>
<div class="container my-5 py-5">
    <div class="alert alert-danger text-center">
        <i class="ri-error-warning-line me-2"></i>
        Erro ao carregar as soluções de IA + IoT.
    </div>
</div>
<?php endif; ?>

<?php 
get_part('includes/footer.php'); 
