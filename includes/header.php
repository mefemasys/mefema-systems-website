<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MEFEMA Systems - <?php echo $pageTitle ?? 'Soluções Tecnológicas Inteligentes'; ?></title>
    <link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <div class="logo-img">ME</div>
                <div class="logo-text">
                    <h1>MEFEMA Systems</h1>
                    <p>Soluções Tecnológicas</p>
                </div>
            </div>

            <ul class="nav-links">
                <li><a href="index" <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'class="active"' : ''; ?>>Início</a></li>
                <li><a href="sobre" <?php echo basename($_SERVER['PHP_SELF']) == 'sobre.php' ? 'class="active"' : ''; ?>>Sobre Nós</a></li>
                <li><a href="servicos" <?php echo basename($_SERVER['PHP_SELF']) == 'servicos.php' ? 'class="active"' : ''; ?>>Serviços</a></li>
                <li><a href="empresa" <?php echo basename($_SERVER['PHP_SELF']) == 'empresa.php' ? 'class="active"' : ''; ?>>Empresa</a></li>
                <li><a href="contacto" <?php echo basename($_SERVER['PHP_SELF']) == 'contacto.php' ? 'class="active"' : ''; ?>>Contacto</a></li>
                <li><a href="legal" <?php echo basename($_SERVER['PHP_SELF']) == 'legal.php' ? 'class="active"' : ''; ?>>Legal</a></li>
            </ul>

            <div class="nav-cta">
                <a href="tel:879990090" class="btn btn-outline">879990090</a>
                <a href="mailto:contacto@mefemasys.co.mz" class="btn btn-primary">Contacto</a>
            </div>

            <button class="mobile-menu-btn" onclick="toggleMobileMenu()">Menu</button>
        </nav>
    </header>


    <?php include 'mobile-menu.php'; ?>

