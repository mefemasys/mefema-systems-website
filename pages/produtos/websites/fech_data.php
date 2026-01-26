<?php
/**
 * Função para simular busca de dados da API de Websites
 */
function buscarDadosWebsites() {
    $json_string = '{
      "sucesso": true,
      "total": 18,
      "data": [
        {
          "id": 1,
          "nome": "Website Essencial",
          "categoria": "Básico",
          "tipo_empresa": "PMEs Gerais",
          "nicho": "PMEs e Startups",
          "paginas": 5,
          "preco": 38000,
          "descricao": "Solução ideal para pequenos negócios que precisam de presença digital básica",
          "screenshots": [
            "/assets/img/websites/essencial-home.jpg",
            "/assets/img/websites/essencial-sobre.jpg",
            "/assets/img/websites/essencial-contacto.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/essencial",
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
          "tipo_empresa": "Empresas Estabelecidas",
          "nicho": "Empresas Estabelecidas",
          "paginas": 10,
          "preco": 68000,
          "descricao": "Website completo para empresas que querem transmitir profissionalismo",
          "screenshots": [
            "/assets/img/websites/empresarial-home.jpg",
            "/assets/img/websites/empresarial-servicos.jpg",
            "/assets/img/websites/empresarial-portfolio.jpg",
            "/assets/img/websites/empresarial-blog.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/empresarial",
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
            "SEO básico optimizado",
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
          "tipo_empresa": "Campanhas Marketing",
          "nicho": "Campanhas e Produtos",
          "paginas": 1,
          "preco": 25000,
          "descricao": "Página focada em conversão para campanhas específicas",
          "screenshots": [
            "/assets/img/websites/landing-hero.jpg",
            "/assets/img/websites/landing-features.jpg",
            "/assets/img/websites/landing-cta.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/landing",
          "caracteristicas": [
            "Design focado em conversão",
            "1 página optimizada",
            "Domínio incluído (1 ano)",
            "Certificado SSL",
            "Formulário de captura de leads",
            "Integração com email marketing",
            "Botões de acção estratégicos",
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
          "tipo_empresa": "Instituições Públicas",
          "nicho": "Instituições Públicas",
          "paginas": 20,
          "preco": 125000,
          "descricao": "Portal robusto para instituições governamentais e organizações",
          "screenshots": [
            "/assets/img/websites/portal-home.jpg",
            "/assets/img/websites/portal-noticias.jpg",
            "/assets/img/websites/portal-documentos.jpg",
            "/assets/img/websites/portal-transparencia.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/portal",
          "caracteristicas": [
            "Design institucional profissional",
            "20 páginas incluídas",
            "Domínio .gov.mz or .org.mz",
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
          "tipo_empresa": "Comércio Electrónico",
          "nicho": "Comércio Electrónico",
          "paginas": 8,
          "preco": 95000,
          "descricao": "Loja virtual completa para começar a vender online",
          "screenshots": [
            "/assets/img/websites/ecommerce-home.jpg",
            "/assets/img/websites/ecommerce-produtos.jpg",
            "/assets/img/websites/ecommerce-carrinho.jpg",
            "/assets/img/websites/ecommerce-checkout.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/ecommerce",
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
          "tipo_empresa": "Restauração",
          "nicho": "Restauração",
          "paginas": 7,
          "preco": 55000,
          "descricao": "Website especializado para restaurantes e cafés",
          "screenshots": [
            "/assets/img/websites/restaurante-home.jpg",
            "/assets/img/websites/restaurante-menu.jpg",
            "/assets/img/websites/restaurante-galeria.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/restaurante",
          "caracteristicas": [
            "Design gastronómico atractivo",
            "7 páginas incluídas",
            "Menu digital interactivo",
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
          "nome": "Website Hotel & Turismo",
          "categoria": "Especializado",
          "tipo_empresa": "Hotel",
          "nicho": "Hotelaria e Turismo",
          "paginas": 12,
          "preco": 85000,
          "descricao": "Solução completa para hotéis, lodges e estabelecimentos turísticos",
          "screenshots": [
            "/assets/img/websites/hotel-home.jpg",
            "/assets/img/websites/hotel-quartos.jpg",
            "/assets/img/websites/hotel-galeria.jpg"
          ],
          "demo_url": "https://demo-hotel-mefema.mefemasys.co.mz",
          "caracteristicas": [
            "Design premium para hotelaria",
            "12 páginas incluídas",
            "Sistema de reservas online",
            "Galeria de quartos e instalações",
            "Calendário de disponibilidade",
            "Integração com booking engines",
            "Tours virtuais 360°",
            "Sistema de avaliações",
            "Multi-idioma (PT/EN)",
            "Integração WhatsApp Business",
            "Blog de turismo",
            "Email profissional (20 contas)",
            "Suporte prioritário (6 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 8,
          "nome": "Website Clínica & Saúde",
          "categoria": "Especializado",
          "tipo_empresa": "Clínica",
          "nicho": "Saúde e Medicina",
          "paginas": 10,
          "preco": 75000,
          "descricao": "Website profissional para clínicas, consultórios e centros de saúde",
          "screenshots": [
            "/assets/img/websites/clinica-home.jpg",
            "/assets/img/websites/clinica-servicos.jpg",
            "/assets/img/websites/clinica-equipa.jpg"
          ],
          "demo_url": "https://demo-clinica.mefemasys.co.mz",
          "caracteristicas": [
            "Design clean e profissional",
            "10 páginas incluídas",
            "Sistema de marcação online",
            "Perfis de médicos e especialistas",
            "Área de serviços médicos",
            "Blog de saúde",
            "Formulário de triagem",
            "Integração com WhatsApp",
            "Horários de funcionamento",
            "Certificado SSL médico",
            "Email profissional (15 contas)",
            "Conformidade LGPD/GDPR",
            "Suporte (5 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 16,
          "nome": "Website Advocacia",
          "categoria": "Profissional",
          "tipo_empresa": "Escritório Advocacia",
          "nicho": "Serviços Jurídicos",
          "paginas": 10,
          "preco": 82000,
          "descricao": "Website profissional para escritórios de advocacia e consultoria jurídica",
          "screenshots": [
            "/assets/img/websites/advocacia-home.jpg",
            "/assets/img/websites/advocacia-areas.jpg",
            "/assets/img/websites/advocacia-equipa.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/advocacia",
          "caracteristicas": [
            "Design corporativo e sério",
            "10 páginas incluídas",
            "Áreas de atuação",
            "Perfis de advogados",
            "Blog jurídico",
            "Formulário de consulta",
            "Área de publicações",
            "Casos de sucesso",
            "Sistema de agendamento",
            "Certificado SSL avançado",
            "Email profissional (20 contas)",
            "Conformidade LGPD",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "secondary"
        },
        {
          "id": 17,
          "nome": "Website Consultoria",
          "categoria": "Profissional",
          "tipo_empresa": "Consultoria",
          "nicho": "Consultoria Empresarial",
          "paginas": 9,
          "preco": 70000,
          "descricao": "Website estratégico para empresas de consultoria e serviços profissionais",
          "screenshots": [
            "/assets/img/websites/consultoria-home.jpg",
            "/assets/img/websites/consultoria-servicos.jpg",
            "/assets/img/websites/consultoria-casos.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/consultoria",
          "caracteristicas": [
            "Design profissional e clean",
            "9 páginas incluídas",
            "Portfólio de serviços",
            "Estudos de caso",
            "Blog empresarial",
            "Perfis de consultores",
            "Formulário de contacto",
            "Área de recursos (downloads)",
            "Testemunhos de clientes",
            "Integração LinkedIn",
            "Email profissional (12 contas)",
            "Suporte (5 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 18,
          "nome": "Website Agência Viagens",
          "categoria": "Especializado",
          "tipo_empresa": "Agência Viagens",
          "nicho": "Turismo e Viagens",
          "paginas": 11,
          "preco": 78000,
          "descricao": "Plataforma completa para agências de viagens e operadores turísticos",
          "screenshots": [
            "/assets/img/websites/viagens-home.jpg",
            "/assets/img/websites/viagens-destinos.jpg",
            "/assets/img/websites/viagens-pacotes.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/viagens",
          "caracteristicas": [
            "Design inspirador e visual",
            "11 páginas incluídas",
            "Catálogo de destinos",
            "Pacotes de viagens",
            "Sistema de reservas",
            "Galeria de fotos",
            "Blog de viagens",
            "Formulário de orçamento",
            "Avaliações de clientes",
            "Multi-idioma (PT/EN)",
            "Integração redes sociais",
            "Email profissional (15 contas)",
            "Suporte (5 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        }
      ]
    }';
    
    $dados = json_decode($json_string, true);
    return $dados && $dados['sucesso'] === true ? $dados : null;
}
?>