<?php $pageTitle = "Documentos Legais - Mefema Systems"; 
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
get_part('includes/header.php'); 
?>

<style>
  :root {
    --brand-brown: #5D4037;
    --brand-orange: #FF8F00;
  }
  
  #legal-page {
    background: linear-gradient(135deg, rgba(93, 64, 55, 0.03) 0%, rgba(255, 143, 0, 0.03) 100%);
  }
  
  .legal-header {
    padding: 5rem 0 3rem;
    text-align: center;
  }
  
  .legal-header h1 {
    color: var(--brand-brown);
    font-weight: 700;
    margin-bottom: 1rem;
  }
  
  .legal-header .lead {
    color: #6c757d;
    max-width: 700px;
    margin: 0 auto;
  }
  
  .legal-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    padding: 3rem 0;
  }
  
  .legal-card {
    background: #fff;
    border-radius: 12px;
    padding: 2rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.07);
    transition: all 0.3s ease;
    border: 1px solid rgba(93, 64, 55, 0.1);
    position: relative;
    overflow: hidden;
  }
  
  .legal-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(180deg, var(--brand-orange) 0%, var(--brand-brown) 100%);
    transform: scaleY(0);
    transition: transform 0.3s ease;
  }
  
  .legal-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
  }
  
  .legal-card:hover::before {
    transform: scaleY(1);
  }
  
  .legal-icon {
    width: 60px;
    height: 60px;
    background: linear-gradient(135deg, rgba(255, 143, 0, 0.1) 0%, rgba(93, 64, 55, 0.1) 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 1.5rem;
    font-size: 1.8rem;
    color: var(--brand-orange);
  }
  
  .legal-card h3 {
    color: var(--brand-brown);
    font-weight: 600;
    font-size: 1.3rem;
    margin-bottom: 1rem;
  }
  
  .legal-card p {
    color: #6c757d;
    line-height: 1.7;
    margin-bottom: 1.5rem;
  }
  
  .legal-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.75rem 1.5rem;
    background: transparent;
    border: 2px solid var(--brand-orange);
    color: var(--brand-orange);
    border-radius: 8px;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
  }
  
  .legal-btn:hover {
    background: var(--brand-orange);
    color: #fff;
    transform: translateX(5px);
  }
  
  .legal-info {
    background: rgba(255, 143, 0, 0.05);
    border-left: 4px solid var(--brand-orange);
    padding: 1.5rem;
    border-radius: 8px;
    margin: 3rem 0;
  }
  
  .legal-info h4 {
    color: var(--brand-brown);
    font-weight: 600;
    margin-bottom: 0.75rem;
  }
  
  .legal-info p {
    color: #6c757d;
    margin-bottom: 0;
    line-height: 1.7;
  }
  
  @media (max-width: 768px) {
    .legal-header {
      padding: 3rem 0 2rem;
    }
    
    .legal-grid {
      grid-template-columns: 1fr;
    }
  }
</style>

<section id="legal-page">
  <div class="container">
    <div class="legal-header">
      <h1 class="display-5">Documentos Legais</h1>
      <p class="lead">
        Transparência e conformidade são fundamentais para nós. Consulte aqui todos os documentos legais que regem os nossos serviços e produtos.
      </p>
    </div>
    
    <div class="legal-grid">
      <!-- Política de Privacidade -->
      <div class="legal-card" id="privacidade">
        <div class="legal-icon">
          <i class="ri ri-shield-user-line"></i>
        </div>
        <h3>Política de Privacidade</h3>
        <p>
          Informações sobre como recolhemos, utilizamos e protegemos os seus dados pessoais em conformidade com as melhores práticas internacionais e legislação aplicável.
        </p>
        <a href="<?php echo BASE_URL; ?>documentos/privacidade" class="legal-btn">
          <span>Ler Documento</span>
          <i class="ri ri-arrow-right-line"></i>
        </a>
      </div>

      <!-- Termos de Uso - Website -->
      <div class="legal-card" id="termos-website">
        <div class="legal-icon">
          <i class="ri ri-file-text-line"></i>
        </div>
        <h3>Termos de Uso - Website</h3>
        <p>
          Condições gerais que regem a utilização do website institucional da Mefema Systems, incluindo direitos e responsabilidades dos utilizadores.
        </p>
        <a href="<?php echo BASE_URL; ?>documentos/termos-uso" class="legal-btn">
          <span>Ler Documento</span>
          <i class="ri ri-arrow-right-line"></i>
        </a>
      </div>

      <!-- EULA - Aplicação Móvel -->
      <div class="legal-card" id="eula">
        <div class="legal-icon">
          <i class="ri ri-smartphone-line"></i>
        </div>
        <h3>EULA - Aplicação Móvel</h3>
        <p>
          Contrato de Licença de Utilizador Final (End-User License Agreement) para aplicações móveis desenvolvidas e distribuídas pela Mefema Systems.
        </p>
        <a href="<?php echo BASE_URL; ?>documentos/eula" class="legal-btn">
          <span>Ler Documento</span>
          <i class="ri ri-arrow-right-line"></i>
        </a>
      </div>

      <!-- Termos de Uso - SaaS -->
      <div class="legal-card" id="termos-saas">
        <div class="legal-icon">
          <i class="ri ri-cloud-line"></i>
        </div>
        <h3>Termos de Uso - SaaS</h3>
        <p>
          Termos e condições específicos para utilização do Sistema de Gestão em nuvem (Software as a Service) oferecido pela Mefema Systems.
        </p>
        <a href="<?php echo BASE_URL; ?>documentos/termos-saas" class="legal-btn">
          <span>Ler Documento</span>
          <i class="ri ri-arrow-right-line"></i>
        </a>
      </div>

      <!-- Aviso Legal -->
      <div class="legal-card" id="aviso-legal">
        <div class="legal-icon">
          <i class="ri ri-scales-3-line"></i>
        </div>
        <h3>Aviso Legal</h3>
        <p>
          Informações legais sobre a propriedade do website, limitações de responsabilidade, direitos de propriedade intelectual e outras questões jurídicas relevantes.
        </p>
        <a href="<?php echo BASE_URL; ?>documentos/legal" class="legal-btn">
          <span>Ler Documento</span>
          <i class="ri ri-arrow-right-line"></i>
        </a>
      </div>

      <!-- Política de Cookies (opcional) -->
      <div class="legal-card" id="cookies">
        <div class="legal-icon">
          <i class="ri ri-cookie-line"></i>
        </div>
        <h3>Política de Cookies</h3>
        <p>
          Explicação sobre como utilizamos cookies e tecnologias semelhantes no nosso website para melhorar a experiência do utilizador.
        </p>
        <a href="<?php echo BASE_URL; ?>documentos/cookies" class="legal-btn">
          <span>Ler Documento</span>
          <i class="ri ri-arrow-right-line"></i>
        </a>
      </div>
    </div>
    
    <div class="legal-info">
      <h4>
        <i class="ri ri-information-line me-2"></i>
        Informação Importante
      </h4>
      <p>
        Estes documentos foram actualizados pela última vez em Janeiro de 2025. Reservamo-nos o direito de actualizar estes documentos a qualquer momento. As alterações entram em vigor imediatamente após a sua publicação nesta página. Recomendamos que reveja periodicamente estes documentos para se manter informado sobre as nossas políticas.
      </p>
    </div>
    
    <div class="text-center pb-5">
      <p class="text-muted mb-3">
        Tem dúvidas sobre os nossos documentos legais?
      </p>
      <a href="<?php echo BASE_URL; ?>contacto" class="legal-btn">
        <i class="ri ri-customer-service-line"></i>
        <span>Contacte-nos</span>
      </a>
    </div>
  </div>
</section>

<?php get_part('includes/footer.php'); ?>