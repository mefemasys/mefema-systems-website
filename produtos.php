<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Produtos - MEFEMA Systems - Soluções Tecnológicas Inteligentes";
get_part('includes/header.php');
?>

<link rel="stylesheet" href="/assets/css/produtos.css">
<?php include 'includes/header.php'; ?>
<link rel="stylesheet" href="/assets/css/produtos.css">
<?php include 'pages/produtos/hero.php'; ?>
<?php include 'pages/produtos/lista-produtos.php'; ?>
<?php include 'pages/produtos/cta.php'; ?>
<?php get_part('includes/footer.php'); ?>
