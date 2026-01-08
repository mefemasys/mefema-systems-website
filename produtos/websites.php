<?php 
// Chama o arquivo de configuração na nova pasta
require_once $_SERVER['DOCUMENT_ROOT'] . '/config/path_config.php';
$pageTitle = "Websites - MEFEMA Systems";

/**
 * Função para simular busca de dados da API de Websites
 * Em produção, substituir por chamada real à API
 */
function buscarDadosWebsites() {
    $json_string = '{
      "sucesso": true,
      "data": [
        {
          "id": 1,
          "nome": "Website Essencial",
          "categoria": "Básico",
          "nicho": "PMEs e Startups",
          "paginas": 5,
          "preco": 38000,
          "descricao": "Solução ideal para pequenos negócios que precisam de presença digital básica",
          "caracteristicas": [
            "Design responsivo",
            "5 páginas incluídas",
            "Domínio .co.mz (1 ano)",
            "Email profissional (5 contas)",
            "Certificado SSL",
            "Painel administrativo básico",
            "Formulário de contacto",
            "Integração Google Maps",
            "Galeria de imagens",
            "Suporte por email (3 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 2,
          "nome": "Website Empresarial",
          "categoria": "Profissional",
          "nicho": "Empresas Estabelecidas",
          "paginas": 10,
          "preco": 68000,
          "descricao": "Website completo para empresas que querem transmitir profissionalismo",
          "caracteristicas": [
            "Design personalizado premium",
            "10 páginas incluídas",
            "Domínio .co.mz (1 ano)",
            "Email profissional (15 contas)",
            "Certificado SSL avançado",
            "Painel administrativo completo",
            "Sistema de blog integrado",
            "Galeria de produtos/serviços",
            "Formulários personalizados",
            "Chat online",
            "Integração redes sociais",
            "SEO básico otimizado",
            "Google Analytics",
            "Suporte prioritário (6 meses)"
          ],
          "destaque": true,
          "cor": "success"
        },
        {
          "id": 3,
          "nome": "Landing Page Conversão",
          "categoria": "Marketing",
          "nicho": "Campanhas e Produtos",
          "paginas": 1,
          "preco": 25000,
          "descricao": "Página focada em conversão para campanhas específicas",
          "caracteristicas": [
            "Design focado em conversão",
            "1 página otimizada",
            "Domínio incluído (1 ano)",
            "Certificado SSL",
            "Formulário de captura de leads",
            "Integração com email marketing",
            "Botões de ação estratégicos",
            "Contador regressivo",
            "Depoimentos de clientes",
            "Pixel Facebook/Google Ads",
            "Suporte por email (2 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 4,
          "nome": "Portal Institucional",
          "categoria": "Corporativo",
          "nicho": "Instituições Públicas",
          "paginas": 20,
          "preco": 125000,
          "descricao": "Portal robusto para instituições governamentais e organizações",
          "caracteristicas": [
            "Design institucional profissional",
            "20 páginas incluídas",
            "Domínio .gov.mz ou .org.mz",
            "Email profissional ilimitado",
            "Certificado SSL avançado",
            "Painel administrativo multi-utilizador",
            "Sistema de notícias e comunicados",
            "Área de downloads (documentos)",
            "Sistema de eventos/calendário",
            "Portal de transparência",
            "Acessibilidade WCAG",
            "Sistema de busca avançado",
            "Integração com redes sociais",
            "Backup automático diário",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 5,
          "nome": "E-commerce Starter",
          "categoria": "Loja Online",
          "nicho": "Comércio Eletrônico",
          "paginas": 8,
          "preco": 95000,
          "descricao": "Loja virtual completa para começar a vender online",
          "caracteristicas": [
            "Design de loja moderna",
            "Até 50 produtos",
            "8 páginas base incluídas",
            "Domínio .co.mz (1 ano)",
            "Email profissional (10 contas)",
            "Certificado SSL",
            "Painel de gestão de produtos",
            "Carrinho de compras",
            "Gateway de pagamento (M-Pesa/E-Mola)",
            "Sistema de categorias",
            "Gestão de stock básica",
            "Relatórios de vendas",
            "Integração redes sociais",
            "Suporte prioritário (6 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 6,
          "nome": "Website Restaurante",
          "categoria": "Especializado",
          "nicho": "Restauração",
          "paginas": 7,
          "preco": 55000,
          "descricao": "Website especializado para restaurantes e cafés",
          "caracteristicas": [
            "Design gastronômico atraente",
            "7 páginas incluídas",
            "Menu digital interativo",
            "Domínio incluído (1 ano)",
            "Email profissional (8 contas)",
            "Certificado SSL",
            "Galeria de pratos",
            "Sistema de reservas online",
            "Localização e horários",
            "Integração WhatsApp",
            "Botão de encomendas",
            "Redes sociais integradas",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 7,
          "nome": "Portfólio Criativo",
          "categoria": "Pessoal",
          "nicho": "Profissionais Criativos",
          "paginas": 6,
          "preco": 42000,
          "descricao": "Showcase profissional para designers, fotógrafos e artistas",
          "caracteristicas": [
            "Design minimalista elegante",
            "6 páginas personalizadas",
            "Galeria de trabalhos",
            "Domínio pessoal (1 ano)",
            "Email profissional (5 contas)",
            "Certificado SSL",
            "Sistema de categorias de projetos",
            "Lightbox para imagens",
            "Página de contacto",
            "Integração com Behance/Instagram",
            "Animações suaves",
            "Suporte (3 meses)"
          ],
          "destaque": false,
          "cor": "secondary"
        },
        {
          "id": 8,
          "nome": "Website Educacional",
          "categoria": "Especializado",
          "nicho": "Escolas e Formação",
          "paginas": 15,
          "preco": 85000,
          "descricao": "Plataforma completa para instituições de ensino",
          "caracteristicas": [
            "Design educacional moderno",
            "15 páginas incluídas",
            "Domínio .edu.mz ou .co.mz",
            "Email profissional (20 contas)",
            "Certificado SSL",
            "Portal do aluno/encarregado",
            "Calendário académico",
            "Sistema de notícias",
            "Galeria de eventos",
            "Área de downloads",
            "Formulário de inscrições",
            "Integração pagamentos",
            "Blog educativo",
            "Suporte (8 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 9,
          "nome": "Website Imobiliário",
          "categoria": "Especializado",
          "nicho": "Imobiliárias",
          "paginas": 12,
          "preco": 98000,
          "descricao": "Portal especializado para agências imobiliárias",
          "caracteristicas": [
            "Design imobiliário profissional",
            "12 páginas incluídas",
            "Sistema de listagem de propriedades",
            "Filtros de busca avançados",
            "Domínio incluído (1 ano)",
            "Email profissional (15 contas)",
            "Certificado SSL",
            "Galeria de fotos HD",
            "Tour virtual 360° (básico)",
            "Mapa de localização",
            "Formulário de contacto por imóvel",
            "Painel de gestão de anúncios",
            "Integração WhatsApp",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "success"
        },
        {
          "id": 10,
          "nome": "Website Clínica/Saúde",
          "categoria": "Especializado",
          "nicho": "Saúde",
          "paginas": 10,
          "preco": 78000,
          "descricao": "Website profissional para clínicas e profissionais de saúde",
          "caracteristicas": [
            "Design médico profissional",
            "10 páginas incluídas",
            "Sistema de marcação de consultas",
            "Domínio incluído (1 ano)",
            "Email profissional (12 contas)",
            "Certificado SSL",
            "Perfil de médicos/especialidades",
            "Horários de atendimento",
            "Informações de serviços",
            "Blog de saúde",
            "Formulário de contacto",
            "Integração WhatsApp",
            "Conformidade com RGPD",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 11,
          "nome": "Blog Profissional",
          "categoria": "Conteúdo",
          "nicho": "Bloggers e Influencers",
          "paginas": 8,
          "preco": 48000,
          "descricao": "Plataforma de blog otimizada para criadores de conteúdo",
          "caracteristicas": [
            "Design de blog moderno",
            "8 páginas base",
            "Sistema de publicação ilimitado",
            "Domínio incluído (1 ano)",
            "Email profissional (5 contas)",
            "Certificado SSL",
            "Categorias e tags",
            "Comentários de leitores",
            "Partilha social automática",
            "Newsletter integrada",
            "SEO otimizado",
            "Google Analytics",
            "Área de autor",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 12,
          "nome": "Website ONG/Associação",
          "categoria": "Social",
          "nicho": "Organizações sem fins lucrativos",
          "paginas": 12,
          "preco": 65000,
          "descricao": "Website para ONGs e organizações da sociedade civil",
          "caracteristicas": [
            "Design institucional solidário",
            "12 páginas incluídas",
            "Domínio .org.mz (1 ano)",
            "Email profissional (10 contas)",
            "Certificado SSL",
            "Sistema de doações online",
            "Portal de transparência",
            "Galeria de projetos",
            "Blog de notícias",
            "Área de voluntariado",
            "Relatórios anuais",
            "Integração redes sociais",
            "Formulários de contacto",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 13,
          "nome": "Website Premium Custom",
          "categoria": "Exclusivo",
          "nicho": "Todos os Sectores",
          "paginas": 30,
          "preco": 195000,
          "descricao": "Solução completamente personalizada para grandes empresas",
          "caracteristicas": [
            "Design 100% personalizado",
            "Até 30 páginas",
            "Domínio premium incluído",
            "Email profissional ilimitado",
            "Certificado SSL avançado",
            "Painel administrativo customizado",
            "Sistema de gestão de conteúdo",
            "Funcionalidades sob medida",
            "Integração com sistemas externos",
            "API personalizada",
            "Área de membros/clientes",
            "SEO avançado",
            "Performance otimizada",
            "Backup automático",
            "Segurança avançada",
            "Suporte VIP (12 meses)",
            "Manutenção mensal incluída",
            "Formação da equipa"
          ],
          "destaque": true,
          "cor": "primary"
        }
      ]
    }';
    
    $dados = json_decode($json_string, true);
    
    if ($dados && $dados['sucesso'] === true && !empty($dados['data'])) {
        return $dados;
    }
    
    return null;
}

// Buscar dados dos websites
$dados_websites = buscarDadosWebsites();

// Header
get_part('includes/header.php'); 
?>

<!-- Hero Section: Start -->
<section class="section-py landing-hero-websites position-relative">
    <div class="container position-relative">
        <div class="hero-text-box text-center">
            <div class="hero-badge mx-auto mb-4">
                <span class="badge-icon">🌐</span>
                <span class="badge-text">CRIAÇÃO DE WEBSITES</span>
            </div>
            <h1 class="hero-title text-primary mb-3">
                Presença Digital<br>
                <span class="text-gradient">Profissional</span>
            </h1>
            <p class="hero-subtitle mb-5 mx-auto">
                Websites modernos, responsivos e otimizados para o seu negócio.<br>
                Soluções completas a partir de <strong class="text-primary">38.000,00 MT</strong>
            </p>
            <a href="#websitesList" class="btn btn-primary btn-lg">
                <span>Ver Pacotes</span>
                <i class="ri-arrow-down-line ms-2"></i>
            </a>
        </div>
    </div>
</section>

<!-- Websites List: Start -->
<?php if ($dados_websites): ?>
<section class="section-py landing-websites-list" id="websitesList">
    <div class="container">
        
        <!-- Filtros -->
        <div class="filters-wrapper mb-5">
            <div class="text-center mb-4">
                <h6 class="filter-label">Filtrar por Categoria:</h6>
            </div>
            <div class="filters-buttons text-center">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="Básico">Básico</button>
                <button class="filter-btn" data-filter="Profissional">Profissional</button>
                <button class="filter-btn" data-filter="Especializado">Especializado</button>
                <button class="filter-btn" data-filter="Loja Online">E-commerce</button>
                <button class="filter-btn" data-filter="Corporativo">Corporativo</button>
            </div>
        </div>

        <!-- Grid de Websites -->
        <div class="row g-4" id="websitesGrid">
            <?php foreach ($dados_websites['data'] as $website): ?>
                <div class="col-lg-4 col-md-6 website-item" data-category="<?php echo htmlspecialchars($website['categoria']); ?>">
                    <div class="website-card <?php echo $website['destaque'] ? 'featured' : ''; ?>">
                        
                        <?php if ($website['destaque']): ?>
                            <div class="featured-badge">
                                <i class="ri-star-fill"></i>
                                <span>Mais Popular</span>
                            </div>
                        <?php endif; ?>
                        
                        <div class="card-header-custom">
                            <div class="category-badge badge-<?php echo htmlspecialchars($website['cor']); ?>">
                                <?php echo htmlspecialchars($website['categoria']); ?>
                            </div>
                            <h4 class="website-name"><?php echo htmlspecialchars($website['nome']); ?></h4>
                            <p class="website-nicho"><?php echo htmlspecialchars($website['nicho']); ?></p>
                        </div>

                        <div class="card-pricing">
                            <div class="price-wrapper">
                                <span class="price-label">A partir de</span>
                                <div class="price-value">
                                    <?php echo number_format($website['preco'], 2, ',', '.'); ?>
                                    <span class="currency">MT</span>
                                </div>
                            </div>
                            <div class="pages-info">
                                <i class="ri-file-list-3-line"></i>
                                <span><?php echo $website['paginas']; ?> página<?php echo $website['paginas'] > 1 ? 's' : ''; ?></span>
                            </div>
                        </div>

                        <div class="card-description">
                            <p><?php echo htmlspecialchars($website['descricao']); ?></p>
                        </div>

                        <div class="card-features">
                            <h6 class="features-title">Inclui:</h6>
                            <ul class="features-list">
                                <?php 
                                $features_to_show = array_slice($website['caracteristicas'], 0, 5);
                                foreach ($features_to_show as $feature): 
                                ?>
                                    <li>
                                        <i class="ri-check-line"></i>
                                        <?php echo htmlspecialchars($feature); ?>
                                    </li>
                                <?php endforeach; ?>
                                <?php if (count($website['caracteristicas']) > 5): ?>
                                    <li class="more-features">
                                        <i class="ri-add-line"></i>
                                        E mais <?php echo count($website['caracteristicas']) - 5; ?> funcionalidades
                                    </li>
                                <?php endif; ?>
                            </ul>
                        </div>

                        <div class="card-actions">
                            <button class="btn-details" onclick="showWebsiteDetails(<?php echo $website['id']; ?>)">
                                <span>Ver Detalhes</span>
                                <i class="ri-eye-line"></i>
                            </button>
                            <a href="#landingContact" class="btn-order">
                                <span>Encomendar</span>
                                <i class="ri-shopping-cart-line"></i>
                            </a>
                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<!-- Modal de Detalhes -->
<div class="modal fade" id="websiteDetailsModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalWebsiteName"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="modalWebsiteContent">
                <!-- Conteúdo será inserido via JavaScript -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                <a href="#landingContact" class="btn btn-primary" data-bs-dismiss="modal">
                    Solicitar Orçamento
                </a>
            </div>
        </div>
    </div>
</div>

<script>
// Dados dos websites para JavaScript
const websitesData = <?php echo json_encode($dados_websites['data']); ?>;

// Filtros
document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
        // Remover active de todos
        document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
        // Adicionar active ao clicado
        this.classList.add('active');
        
        const filter = this.getAttribute('data-filter');
        const items = document.querySelectorAll('.website-item');
        
        items.forEach(item => {
            if (filter === 'all' || item.getAttribute('data-category') === filter) {
                item.style.display = 'block';
                setTimeout(() => item.style.opacity = '1', 10);
            } else {
                item.style.opacity = '0';
                setTimeout(() => item.style.display = 'none', 300);
            }
        });
    });
});

// Mostrar detalhes do website
function showWebsiteDetails(id) {
    const website = websitesData.find(w => w.id === id);
    if (!website) return;
    
    document.getElementById('modalWebsiteName').textContent = website.nome;
    
    let featuresHTML = '<ul class="list-unstyled">';
    website.caracteristicas.forEach(feature => {
        featuresHTML += `<li class="mb-2"><i class="ri-check-double-line text-success me-2"></i>${feature}</li>`;
    });
    featuresHTML += '</ul>';
    
    document.getElementById('modalWebsiteContent').innerHTML = `
        <div class="row">
            <div class="col-md-6">
                <h6 class="fw-bold mb-3">Informações Gerais</h6>
                <p><strong>Categoria:</strong> ${website.categoria}</p>
                <p><strong>Nicho:</strong> ${website.nicho}</p>
                <p><strong>Páginas:</strong> ${website.paginas}</p>
                <p><strong>Preço:</strong> ${website.preco.toLocaleString('pt-MZ')} MT</p>
            </div>
            <div class="col-md-6">
                <h6 class="fw-bold mb-3">Descrição</h6>
                <p>${website.descricao}</p>
            </div>
            <div class="col-12 mt-4">
                <h6 class="fw-bold mb-3">Todas as Características</h6>
                ${featuresHTML}
            </div>
        </div>
    `;
    
    const modal = new bootstrap.Modal(document.getElementById('websiteDetailsModal'));
    modal.show();
}
</script>

<?php else: ?>
<div class="container my-5 py-5">
    <div class="alert alert-danger text-center">
        <i class="ri-error-warning-line me-2"></i>
        Erro ao carregar os pacotes de websites.
    </div>
</div>
<?php endif; ?>

<style>
/* Hero Section */
.landing-hero-websites {
    background: linear-gradient(135deg, #fdf9f6 0%, #fff5eb 100%);
    padding: 6rem 0 4rem;
}

.hero-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    background: rgba(217, 118, 56, 0.1);
    border: 1px solid rgba(217, 118, 56, 0.3);
    border-radius: 50px;
}

.hero-title {
    font-size: 3rem;
    font-weight: 700;
}

.text-gradient {
    background: linear-gradient(135deg, #d97638, #c66b3d);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}

.hero-subtitle {
    font-size: 1.2rem;
    color: #74523d;
    max-width: 700px;
}

/* Filtros */
.filters-wrapper {
    background: #fffdfb;
    padding: 2rem;
    border-radius: 12px;
    border: 1px solid rgba(217, 118, 56, 0.2);
}

.filter-label {
    color: #5a3a28;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
}

.filters-buttons {
    display: flex;
    flex-wrap: wrap;
    gap: 0.75rem;
    justify-content: center;
}

.filter-btn {
    padding: 0.6rem 1.5rem;
    background: white;
    border: 1px solid rgba(217, 118, 56, 0.3);
    border-radius: 25px;
    color: #74523d;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.filter-btn:hover,
.filter-btn.active {
    background: #d97638;
    color: white;
    transform: translateY(-2px);
}

/* Website Cards */
.landing-websites-list {
    background: #fdf9f6;
}

.website-item {
    opacity: 1;
    transition: opacity 0.3s ease;
}

.website-card {
    background: #fffdfb;
    border: 1px solid rgba(217, 118, 56, 0.2);
    border-radius: 16px;
    padding: 2rem;
    height: 100%;
    display: flex;
    flex-direction: column;
    position: relative;
    transition: all 0.3s ease;
}

.website-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 40px rgba(217, 118, 56, 0.15);
}

.website-card.featured {
    border: 2px solid #d97638;
}

.featured-badge {
    position: absolute;
    top: -12px;
    right: 20px;
    background: linear-gradient(135deg, #d97638, #c66b3d);
    color: white;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.875rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.card-header-custom {
    text-align: center;
    margin-bottom: 1.5rem;
}

.category-badge {
    display: inline-block;
    padding: 0.35rem 1rem;
    border-radius: 20px;
    font-size: 0.75rem;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
}

.badge-primary { background: rgba(217, 118, 56, 0.15); color: #d97638; }
.badge-success { background: rgba(25, 135, 84, 0.15); color: #198754; }
.badge-warning { background: rgba(255, 193, 7, 0.15); color: #c29400; }
.badge-info { background: rgba(13, 202, 240, 0.15); color: #0dcaf0; }
.badge-danger { background: rgba(220, 53, 69, 0.15); color: #dc3545; }
.badge-secondary { background: rgba(108, 117, 125, 0.15); color: #6c757d; }

.website-name {
    font-size: 1.5rem;
    font-weight: 700;
    color: #5a3a28;
    margin-bottom: 0.5rem;
}

.website-nicho {
    color: #8a6850;
    font-size: 0.95rem;
    margin: 0;
}

.card-pricing {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.08), rgba(184, 95, 48, 0.05));
    padding: 1.5rem;
    border-radius: 12px;
    margin-bottom: 1.5rem;
}

.price-wrapper {
    text-align: center;
}

.price-label {
    display: block;
    font-size: 0.875rem;
    color: #8a6850;
    margin-bottom: 0.5rem;
}

.price-value {
    font-size: 2.5rem;
    font-weight: 700;
    color: #d97638;
}

.currency {
    font-size: 1.25rem;
    font-weight: 500;
    margin-left: 0.25rem;
}

.pages-info {
    text-align: center;
    margin-top: 1rem;
    color: #74523d;
    font-weight: 500;
}

.pages-info i {
    color: #d97638;
    margin-right: 0.5rem;
}

.card-description {
    margin-bottom: 1.5rem;
    color: #74523d;
    line-height: 1.6;
}

.card-features {
    flex-grow: 1;
    margin-bottom: 1.5rem;
}

.features-title {
    font-size: 0.95rem;
    font-weight: 600;
    color: #5a3a28;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 1rem;
}

.features-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.features-list li {
    padding: 0.5rem 0;
    color: #74523d;
    font-size: 0.9rem;
    display: flex;
    align-items: flex-start;
    gap: 0.75rem;
}

.features-list i {
    color: #d97638;
    font-size: 1.1rem;
    margin-top: 0.15rem;
}

.more-features {
    color: #d97638 !important;
    font-weight: 600;
}

.card-actions {
    display: flex;
    gap: 0.75rem;
}

.btn-details,
.btn-order {
    flex: 1;
    padding: 0.875rem 1.5rem;
    border-radius: 8px;
    font-weight: 600;
    text-decoration: none;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
    border: none;
    cursor: pointer;
}

.btn-details {
    background: white;
    color: #d97638;
    border: 2px solid #d97638;
}

.btn-details:hover {
    background: #d97638;
    color: white;
    transform: translateY(-2px);
}

.btn-order {
    background: linear-gradient(135deg, #d97638, #c66b3d);
    color: white;
}

.btn-order:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(217, 118, 56, 0.3);
}

/* Modal */
.modal-content {
    border-radius: 16px;
    border: 1px solid rgba(217, 118, 56, 0.2);
}

.modal-header {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.08), rgba(184, 95, 48, 0.05));
    border-bottom: 1px solid rgba(217, 118, 56, 0.2);
    border-radius: 16px 16px 0 0;
}

.modal-title {
    color: #5a3a28;
    font-weight: 700;
}

/* Responsivo */
@media (max-width: 768px) {
    .hero-title {
        font-size: 2rem;
    }
    
    .filters-buttons {
        flex-direction: column;
    }
    
    .filter-btn {
        width: 100%;
    }
    
    .card-actions {
        flex-direction: column;
    }
}

@media (prefers-color-scheme: dark) {
    .landing-hero-websites {
        background: linear-gradient(135deg, #1a1410 0%, #2a1f1a 100%);
    }
    
    .filters-wrapper {
        background: #2a1f1a;
        border-color: rgba(255, 140, 74, 0.15);
    }
    
    .website-card {
        background: #2a1f1a;
        border-color: rgba(255, 140, 74, 0.15);
    }
    
    .landing-websites-list {
        background: #1a1410;
    }
}
</style>

<?php 
// Footer
get_part('includes/footer.php'); 
?>
