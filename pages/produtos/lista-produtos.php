
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      background: #f8f9fa;
      color: #2c3e50;
      line-height: 1.6;
    }

    .section-py {
      padding: 80px 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 0 20px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      margin: -15px;
      justify-content: center;
    }

    .col-lg-6 {
      flex: 0 0 50%;
      max-width: 50%;
      padding: 15px;
    }

    .col-xl-5 {
      flex: 0 0 41.666667%;
      max-width: 41.666667%;
    }

    /* Card Styling seguindo o design do Mefema Systems */
    .website-card {
      background: white;
      border-radius: 12px;
      padding: 40px 35px;
      height: 100%;
      display: flex;
      flex-direction: column;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
      border: 1px solid #e9ecef;
      text-decoration: none;
      color: inherit;
    }

    .website-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.12);
      border-color: #007bff;
    }

    /* Icon Box */
    .icon-box {
      width: 100px;
      height: 100px;
      border-radius: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0 auto 30px;
      transition: all 0.3s ease;
    }

    .icon-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    }

    .icon-success {
      background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
    }

    .icon-warning {
      background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
    }

    .icon-info {
      background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
    }

    .website-card:hover .icon-box {
      transform: scale(1.05);
    }

    .icon-box i {
      font-size: 48px;
      color: white;
    }

    /* Card Title */
    .website-name {
      font-size: 24px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #2c3e50;
      text-align: center;
    }

    /* Description */
    .card-description {
      text-align: center;
      color: #6c757d;
      font-size: 15px;
      line-height: 1.7;
      margin-bottom: 30px;
    }

    /* Features List */
    .features-list {
      list-style: none;
      padding: 0;
      margin: 0 auto 30px;
      max-width: 320px;
    }

    .features-list li {
      display: flex;
      align-items: flex-start;
      padding: 10px 0;
      font-size: 14px;
      color: #495057;
      line-height: 1.5;
    }

    .features-list i {
      font-size: 18px;
      color: #28a745;
      margin-right: 10px;
      flex-shrink: 0;
      margin-top: 2px;
    }

    /* Price and CTA */
    .mt-auto {
      margin-top: auto;
      padding-top: 20px;
      border-top: 1px solid #e9ecef;
      text-align: center;
    }

    .text-primary {
      color: #007bff;
      font-weight: 700;
      font-size: 20px;
      display: block;
      margin-bottom: 20px;
    }

    .btn-action {
      display: inline-flex;
      align-items: center;
      padding: 12px 24px;
      background: #007bff;
      color: white;
      border-radius: 6px;
      font-weight: 600;
      font-size: 14px;
      text-decoration: none;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
    }

    .btn-action:hover {
      background: #0056b3;
      transform: translateX(3px);
    }

    .btn-action i {
      margin-left: 8px;
      transition: transform 0.3s ease;
    }

    .btn-action:hover i {
      transform: translateX(3px);
    }

    /* Responsive */
    @media (max-width: 991px) {
      .col-lg-6 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .col-xl-5 {
        flex: 0 0 100%;
        max-width: 100%;
      }

      .section-py {
        padding: 50px 0;
      }
    }

    @media (max-width: 768px) {
      .website-card {
        padding: 30px 25px;
      }

      .icon-box {
        width: 80px;
        height: 80px;
      }

      .icon-box i {
        font-size: 40px;
      }

      .website-name {
        font-size: 20px;
      }
    }
  </style>

  <!-- Cards das Categorias de Produtos -->
  <section class="section-py landing-websites-list">
    <div class="container">
      <div class="row g-5 justify-content-center">

        <!-- 1. Websites -->
        <div class="col-lg-6 col-xl-5">
          <a href="/produtos/websites/" class="text-decoration-none">
            <div class="website-card h-100 text-center p-5 position-relative overflow-hidden">
              <div class="icon-box icon-primary mx-auto mb-4">
                <i class="ri-global-line"></i>
              </div>
              <h3 class="website-name mb-3">Websites Prontos</h3>
              <p class="card-description mb-4 px-3">
                Pacotes completos com design moderno, responsivo e funcionalidades essenciais:<br>
                institucional, empresarial, e-commerce, landing page, restaurante e mais.
              </p>
              <ul class="features-list text-start mx-auto mb-4">
                <li><i class="ri-check-line"></i> <span>Domínio e hospedagem incluídos</span></li>
                <li><i class="ri-check-line"></i> <span>SSL, email profissional</span></li>
                <li><i class="ri-check-line"></i> <span>Painel administrativo</span></li>
                <li><i class="ri-check-line"></i> <span>Suporte técnico dedicado</span></li>
              </ul>
              <div class="mt-auto">
                <span class="text-primary fw-bold fs-5">A partir de 25.000 MT</span>
                <span class="btn-action btn-order d-inline-flex align-items-center">
                  Ver todos os pacotes <i class="ri-arrow-right-line ms-2"></i>
                </span>
              </div>
            </div>
          </a>
        </div>

        <!-- 2. Sistemas de Gestão -->
        <div class="col-lg-6 col-xl-5">
          <a href="/produtos/sistemas-gestao/" class="text-decoration-none">
            <div class="website-card h-100 text-center p-5 position-relative overflow-hidden">
              <div class="icon-box icon-success mx-auto mb-4">
                <i class="ri-dashboard-3-line"></i>
              </div>
              <h3 class="website-name mb-3">Sistemas de Gestão</h3>
              <p class="card-description mb-4 px-3">
                Softwares robustos para automatizar e controlar o seu negócio:<br>
                facturação AT, stock, CRM, RH, escolar, clínica, hotelaria e ERP.
              </p>
              <ul class="features-list text-start mx-auto mb-4">
                <li><i class="ri-check-line"></i> <span>Certificação AT (quando aplicável)</span></li>
                <li><i class="ri-check-line"></i> <span>Multi-utilizador e acessos por perfil</span></li>
                <li><i class="ri-check-line"></i> <span>Relatórios avançados</span></li>
                <li><i class="ri-check-line"></i> <span>Integrações locais (M-Pesa, etc.)</span></li>
              </ul>
              <div class="mt-auto">
                <span class="text-primary fw-bold fs-5">A partir de 45.000 MT</span>
                <span class="btn-action btn-order d-inline-flex align-items-center">
                  Explorar sistemas <i class="ri-arrow-right-line ms-2"></i>
                </span>
              </div>
            </div>
          </a>
        </div>

        <!-- 3. Apps Móveis -->
        <div class="col-lg-6 col-xl-5">
          <a href="/produtos/apps-mobile/" class="text-decoration-none">
            <div class="website-card h-100 text-center p-5 position-relative overflow-hidden">
              <div class="icon-box icon-warning mx-auto mb-4">
                <i class="ri-smartphone-line"></i>
              </div>
              <h3 class="website-name mb-3">Apps Móveis</h3>
              <p class="card-description mb-4 px-3">
                Aplicações nativas ou híbridas prontas para Android e iOS:<br>
                delivery, táxi, loja mobile, presença empresarial e soluções personalizadas.
              </p>
              <ul class="features-list text-start mx-auto mb-4">
                <li><i class="ri-check-line"></i> <span>Publicação nas lojas (Play Store/App Store)</span></li>
                <li><i class="ri-check-line"></i> <span>Notificações push</span></li>
                <li><i class="ri-check-line"></i> <span>Modo offline (quando necessário)</span></li>
                <li><i class="ri-check-line"></i> <span>Integração com pagamentos móveis</span></li>
              </ul>
              <div class="mt-auto">
                <span class="text-primary fw-bold fs-5">A partir de 80.000 MT</span>
                <span class="btn-action btn-order d-inline-flex align-items-center">
                  Ver aplicações <i class="ri-arrow-right-line ms-2"></i>
                </span>
              </div>
            </div>
          </a>
        </div>

        <!-- 4. Soluções IA + IoT -->
        <div class="col-lg-6 col-xl-5">
          <a href="/produtos/solucoes-ia-iot/" class="text-decoration-none">
            <div class="website-card h-100 text-center p-5 position-relative overflow-hidden">
              <div class="icon-box icon-info mx-auto mb-4">
                <i class="ri-brain-line"></i>
              </div>
              <h3 class="website-name mb-3">Soluções IA + IoT</h3>
              <p class="card-description mb-4 px-3">
                Produtos inteligentes com Inteligência Artificial e Internet das Coisas:<br>
                chatbots avançados, automação preditiva, sensores conectados e análise de dados.
              </p>
              <ul class="features-list text-start mx-auto mb-4">
                <li><i class="ri-check-line"></i> <span>Chatbots com IA (WhatsApp, site)</span></li>
                <li><i class="ri-check-line"></i> <span>Monitorização remota em tempo real</span></li>
                <li><i class="ri-check-line"></i> <span>Dashboards preditivos</span></li>
                <li><i class="ri-check-line"></i> <span>Integração com hardware existente</span></li>
              </ul>
              <div class="mt-auto">
                <span class="text-primary fw-bold fs-5">Sob consulta</span>
                <span class="btn-action btn-order d-inline-flex align-items-center">
                  Saber mais <i class="ri-arrow-right-line ms-2"></i>
                </span>
              </div>
            </div>
          </a>
        </div>

      </div>
    </div>
  </section>
</html>
