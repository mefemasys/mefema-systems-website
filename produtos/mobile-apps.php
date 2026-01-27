<!-- -->
<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';

$pageTitle = "Apps Móveis - MEFEMA Systems";

get_part('pages/produtos/mobile-apps/fetch_data.php');
$dados_apps = buscarDadosAppMoveis();
?>
<!-- -->
<?php get_part('includes/header.php'); ?>
<link rel="stylesheet" href="/assets/css/produtos.css">

<!-- -->
<?php get_part('pages/produtos/mobile-apps/hero.php'); ?>

<!-- -->
<?php if ($dados_apps): ?>
<!-- -->
<?php get_part('pages/produtos/mobile-apps/filtros-apps.php'); ?>

<!-- -->
<?php get_part('pages/produtos/mobile-apps/modal-detalhes.php'); ?>
<!-- -->
<?php get_part('pages/produtos/mobile-apps/scripts.php'); ?>
<!-- -->
<?php else: ?>
<div class="container my-5 py-5">
    <div class="alert alert-danger text-center">
        <i class="ri-error-warning-line me-2"></i>
        Erro ao carregar os apps móveis.
    </div>
</div>
<!-- -->
<?php endif; ?>
<!-- -->
<?php include '../pages/produtos/cta.php'; ?>
<!-- -->
<?php get_part('includes/footer.php'); ?>
