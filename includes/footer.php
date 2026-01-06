<style>
  :root {
    --footer-bg-primary: #1a1410;
    --footer-bg-secondary: #0f0a08;
    --footer-accent: #d97638;
    --footer-accent-hover: #ff8c4a;
    --footer-text: #c4b5a8;
    --footer-text-dim: #8a7d72;
    --footer-border: rgba(217, 118, 56, 0.15);
  }

  [data-bs-theme="light"] {
    --footer-bg-primary: #2a1f1a;
    --footer-bg-secondary: #1f1410;
    --footer-accent: #e68547;
    --footer-accent-hover: #ff9655;
    --footer-text: #d4c5b8;
    --footer-text-dim: #9a8d82;
  }

  .landing-footer {
    background: linear-gradient(180deg, var(--footer-bg-primary) 0%, var(--footer-bg-secondary) 100%);
    position: relative;
  }

  .landing-footer::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 1px;
    background: linear-gradient(90deg, 
      transparent 0%, 
      var(--footer-accent) 50%, 
      transparent 100%);
  }

  .footer-top {
    padding: 4rem 0 3rem;
    position: relative;
  }

  .footer-top::after {
    content: '';
    position: absolute;
    top: 20%;
    right: -10%;
    width: 300px;
    height: 300px;
    background: radial-gradient(circle, rgba(217, 118, 56, 0.08) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
  }

  .app-brand-text {
    color: var(--footer-text) !important;
    font-size: 1.25rem;
    letter-spacing: 0.5px;
  }

  .footer-logo-description {
    color: var(--footer-text-dim);
    line-height: 1.7;
    font-size: 0.95rem;
  }

  .footer-title {
    color: var(--footer-accent);
    font-weight: 600;
    font-size: 1.1rem;
    text-transform: uppercase;
    letter-spacing: 1px;
    position: relative;
    padding-bottom: 0.5rem;
  }

  .footer-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 30px;
    height: 2px;
    background: var(--footer-accent);
  }

  .footer-link {
    color: var(--footer-text);
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    font-size: 0.95rem;
  }

  .footer-link:hover {
    color: var(--footer-accent-hover);
    transform: translateX(5px);
  }

  .footer-link i {
    color: var(--footer-accent);
    transition: all 0.3s ease;
  }

  .footer-link:hover i {
    color: var(--footer-accent-hover);
  }

  .footer-bottom {
    background: var(--footer-bg-secondary);
    border-top: 1px solid var(--footer-border);
    padding: 1.75rem 0 !important;
  }

  .footer-bottom-text {
    color: var(--footer-text-dim);
    font-size: 0.9rem;
  }

  .icon-base {
    font-size: 1.5rem;
    transition: all 0.3s ease;
  }

  .footer-bottom .footer-link {
    color: var(--footer-text-dim);
  }

  .footer-bottom .footer-link:hover {
    color: var(--footer-accent-hover);
    transform: translateY(-3px);
  }

  .footer-bottom .footer-link:hover .icon-base {
    color: var(--footer-accent-hover);
  }

  @media (max-width: 768px) {
    .footer-top {
      padding: 3rem 0 2rem;
    }
    
    .footer-title {
      font-size: 1rem;
    }
  }
</style>

<footer class="landing-footer">
  <div class="footer-top position-relative overflow-hidden">
    <div class="container">
      <div class="row gx-0 gy-6 g-lg-10">
        <div class="col-lg-5">
          <a class="app-brand-link mb-6" href="<?php echo BASE_URL; ?>">
            <img
              alt="Mefema Systems Logo"
              class="navbar-logo-svg"
              height="40"
              src="<?php echo asset('assets/img/logos/logo.svg'); ?>"
              width="auto"
            > <span class="app-brand-text demo fw-semibold ms-2 ps-1">Mefema Systems</span>
          </a>
          <p class="footer-text footer-logo-description mb-6">
            Soluções Tecnológicas Inteligentes para Empresas Inteligentes. Desenvolvimento de Software, Infraestrutura
            TI, Consultoria Digital e Formação Corporativa em Moçambique.
          </p>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6">
          <h6 class="footer-title mb-4 mb-lg-6">Serviços</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-4">
              <a class="footer-link" href="<?php echo BASE_URL; ?>servicos">Desenvolvimento de Software</a>
            </li>
            <li class="mb-4">
              <a class="footer-link" href="<?php echo BASE_URL; ?>servicos">Infraestrutura TI</a>
            </li>
            <li class="mb-4">
              <a class="footer-link" href="<?php echo BASE_URL; ?>servicos">Consultoria Digital</a>
            </li>
            <li class="mb-4">
              <a class="footer-link" href="<?php echo BASE_URL; ?>servicos">Formação Corporativa</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-2 col-md-4 col-sm-6">
          <h6 class="footer-title mb-4 mb-lg-6">Empresa</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-4">
              <a class="footer-link" href="<?php echo BASE_URL; ?>sobre">Sobre Nós</a>
            </li>
            <li class="mb-4">
              <a class="footer-link" href="<?php echo BASE_URL; ?>portfolio">Projectos</a>
            </li>
            <li class="mb-4">
              <a class="footer-link" href="<?php echo BASE_URL; ?>servicos">Serviços</a>
            </li>
            <li class="mb-4">
              <a class="footer-link" href="<?php echo BASE_URL; ?>contacto">Contacto</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-4">
          <h6 class="footer-title mb-4 mb-lg-6">Contacto</h6>
          <ul class="list-unstyled mb-0">
            <li class="mb-4">
              <a class="footer-link" href="mailto:comercial@mefemasys.co.mz">
                <i class="ri-mail-line me-2"></i>comercial@mefemasys.co.mz
              </a>
            </li>
            <li class="mb-4">
              <a class="footer-link" href="tel:+258861924050">
                <i class="ri-phone-line me-2"></i>+258 86 192 4050
              </a>
            </li>
            <li class="mb-4">
              <span class="footer-link">
                <i class="ri-map-pin-line me-2"></i>Moçambique
              </span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="footer-bottom py-5">
    <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
      <div class="mb-2 mb-md-0">
        <span class="footer-bottom-text">
          © 2025 — <script>document.write(new Date().getFullYear());</script> Mefema Systems. Todos os direitos reservados.
        </span>
      </div>
      <div>
        <a class="footer-link me-4" href="https://github.com/mefemasys" target="_blank">
          <i class="icon-base ri ri-github-fill"></i>
        </a>
        <a class="footer-link me-4" href="https://facebook.com/mefemasys" target="_blank">
          <i class="icon-base ri ri-facebook-circle-fill"></i>
        </a>
        <a class="footer-link me-4" href="https://twitter.com/mefemasys" target="_blank">
          <i class="icon-base ri ri-twitter-x-fill"></i>
        </a>
        <a class="footer-link me-4" href="https://linkedin.com/company/mefemasys" target="_blank">
          <i class="icon-base ri ri-linkedin-box-line"></i>
        </a>
        <a class="footer-link" href="https://instagram.com/mefemasys" target="_blank">
          <i class="icon-base ri ri-instagram-line"></i>
        </a>
      </div>
    </div>
  </div>
</footer>

</div>

<script src="<?php echo asset('assets/vendor/libs/popper/popper.js'); ?>"></script>
<script src="<?php echo asset('assets/vendor/js/bootstrap.js'); ?>"></script>
<script src="<?php echo asset('assets/vendor/libs/node-waves/node-waves.js'); ?>"></script>
<script src="<?php echo asset('assets/vendor/libs/@algolia/autocomplete-js.js'); ?>"></script>
<script src="<?php echo asset('assets/vendor/libs/pickr/pickr.js'); ?>"></script>
<script src="<?php echo asset('assets/vendor/libs/nouislider/nouislider.js'); ?>"></script>
<script src="<?php echo asset('assets/vendor/libs/swiper/swiper.js'); ?>"></script>
<script src="<?php echo asset('assets/js/front-main.js'); ?>"></script>
<script src="<?php echo asset('assets/js/page-landing.js'); ?>"></script>
</body>
</html>
