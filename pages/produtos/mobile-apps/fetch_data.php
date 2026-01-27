<?php

function buscarDadosAppMoveis() {
    $json_string = '{
      "sucesso": true,
      "total": 10,
      "data": [
        {
          "id": 1,
          "nome": "App E-commerce Completo",
          "categoria": "Comércio",
          "nicho": "Lojas Online",
          "plataformas": ["Android", "iOS"],
          "preco": 125000,
          "descricao": "Aplicação móvel completa para e-commerce com carrinho, pagamentos e gestão de pedidos",
          "screenshots": [
            "/assets/img/apps/ecommerce-home.jpg",
            "/assets/img/apps/ecommerce-produtos.jpg",
            "/assets/img/apps/ecommerce-carrinho.jpg",
            "/assets/img/apps/ecommerce-perfil.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-ecommerce",
          "caracteristicas": [
            "Publicação Play Store e App Store",
            "Catálogo de produtos interactivo",
            "Carrinho de compras inteligente",
            "Pagamentos M-Pesa/E-Mola integrados",
            "Notificações push personalizadas",
            "Rastreamento de pedidos em tempo real",
            "Sistema de avaliações e reviews",
            "Wishlist e favoritos",
            "Geolocalização para entregas",
            "Funcionamento offline com sincronização",
            "UI/UX moderna e intuitiva",
            "Painel administrativo web",
            "Chat de suporte integrado",
            "Relatórios de vendas",
            "Suporte técnico (12 meses)"
          ],
          "destaque": true,
          "cor": "success"
        },
        {
          "id": 2,
          "nome": "App Delivery Restaurante",
          "categoria": "Alimentação",
          "nicho": "Restaurantes e Delivery",
          "plataformas": ["Android", "iOS"],
          "preco": 95000,
          "descricao": "App de delivery completo para restaurantes com rastreamento em tempo real",
          "screenshots": [
            "/assets/img/apps/delivery-home.jpg",
            "/assets/img/apps/delivery-menu.jpg",
            "/assets/img/apps/delivery-tracking.jpg",
            "/assets/img/apps/delivery-pedido.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-delivery",
          "caracteristicas": [
            "Publicação em ambas lojas",
            "Menu digital interactivo com fotos",
            "Sistema de pedidos em tempo real",
            "Pagamentos móveis integrados",
            "Rastreamento GPS do entregador",
            "Notificações de status do pedido",
            "Histórico de pedidos",
            "Sistema de cupons e promoções",
            "Avaliação de pedidos",
            "Geolocalização automática",
            "Funcionamento offline",
            "Chat com restaurante",
            "Painel para restaurante",
            "App para entregadores",
            "Suporte prioritário (10 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 3,
          "nome": "App Transportes e Taxi",
          "categoria": "Transporte",
          "nicho": "Mobilidade Urbana",
          "plataformas": ["Android", "iOS"],
          "preco": 150000,
          "descricao": "Aplicação completa tipo Uber para serviços de transporte e taxi",
          "screenshots": [
            "/assets/img/apps/taxi-home.jpg",
            "/assets/img/apps/taxi-mapa.jpg",
            "/assets/img/apps/taxi-viagem.jpg",
            "/assets/img/apps/taxi-pagamento.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-taxi",
          "caracteristicas": [
            "Publicação Google Play e App Store",
            "Geolocalização em tempo real",
            "Sistema de matching motorista/passageiro",
            "Cálculo automático de tarifas",
            "Múltiplos métodos de pagamento",
            "Rastreamento da viagem ao vivo",
            "Sistema de avaliações bilateral",
            "Notificações push instantâneas",
            "Histórico de viagens",
            "Chamadas de emergência",
            "App separado para motoristas",
            "Painel administrativo completo",
            "Sistema de comissões",
            "Relatórios financeiros",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": true,
          "cor": "warning"
        },
        {
          "id": 4,
          "nome": "App Fitness e Academia",
          "categoria": "Saúde",
          "nicho": "Fitness e Bem-estar",
          "plataformas": ["Android", "iOS"],
          "preco": 78000,
          "descricao": "Aplicação fitness com treinos, nutrição e acompanhamento personalizado",
          "screenshots": [
            "/assets/img/apps/fitness-home.jpg",
            "/assets/img/apps/fitness-treinos.jpg",
            "/assets/img/apps/fitness-progresso.jpg",
            "/assets/img/apps/fitness-nutricao.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-fitness",
          "caracteristicas": [
            "Publicação nas lojas oficiais",
            "Biblioteca de exercícios com vídeos",
            "Planos de treino personalizados",
            "Acompanhamento de progresso",
            "Calculadora de calorias",
            "Planos alimentares",
            "Notificações de treino",
            "Integração com wearables",
            "Estatísticas e gráficos",
            "Funcionamento offline",
            "UI/UX motivacional",
            "Sistema de metas",
            "Chat com personal trainer",
            "Suporte técnico (8 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 5,
          "nome": "App Gestão Escolar",
          "categoria": "Educação",
          "nicho": "Escolas e Universidades",
          "plataformas": ["Android", "iOS"],
          "preco": 110000,
          "descricao": "Sistema móvel completo para gestão escolar, alunos e comunicação com pais",
          "screenshots": [
            "/assets/img/apps/escolar-home.jpg",
            "/assets/img/apps/escolar-notas.jpg",
            "/assets/img/apps/escolar-horarios.jpg",
            "/assets/img/apps/escolar-comunicacao.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-escolar",
          "caracteristicas": [
            "Publicação Play Store e App Store",
            "Consulta de notas e faltas",
            "Horário de aulas interactivo",
            "Calendário escolar",
            "Notificações para pais",
            "Sistema de mensagens",
            "Pagamentos de propinas móveis",
            "Biblioteca digital",
            "Tarefas e trabalhos de casa",
            "Boletim electrónico",
            "Comunicados da escola",
            "Painel para professores",
            "Sincronização automática",
            "Suporte prioritário (10 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 6,
          "nome": "App Telemedicina",
          "categoria": "Saúde",
          "nicho": "Serviços Médicos",
          "plataformas": ["Android", "iOS"],
          "preco": 135000,
          "descricao": "Plataforma móvel para consultas médicas online e gestão de saúde",
          "screenshots": [
            "/assets/img/apps/telemedicina-home.jpg",
            "/assets/img/apps/telemedicina-consulta.jpg",
            "/assets/img/apps/telemedicina-historico.jpg",
            "/assets/img/apps/telemedicina-receitas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-telemedicina",
          "caracteristicas": [
            "Publicação em ambas lojas",
            "Videochamadas médicas HD",
            "Agendamento de consultas",
            "Prontuário electrónico",
            "Receitas digitais",
            "Pagamentos integrados",
            "Notificações de medicação",
            "Histórico médico completo",
            "Chat com médicos",
            "Resultados de exames",
            "Geolocalização de clínicas",
            "Sistema de emergência",
            "App para médicos",
            "Conformidade LGPD",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 7,
          "nome": "App Rede Social Nichada",
          "categoria": "Social",
          "nicho": "Comunidades e Networking",
          "plataformas": ["Android", "iOS"],
          "preco": 145000,
          "descricao": "Rede social móvel customizada para comunidades específicas",
          "screenshots": [
            "/assets/img/apps/social-feed.jpg",
            "/assets/img/apps/social-perfil.jpg",
            "/assets/img/apps/social-chat.jpg",
            "/assets/img/apps/social-grupos.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-social",
          "caracteristicas": [
            "Publicação Google Play e App Store",
            "Feed personalizado com algoritmo",
            "Sistema de posts multimídia",
            "Stories temporários",
            "Chat privado e em grupo",
            "Notificações push em tempo real",
            "Sistema de seguir/seguidores",
            "Grupos e comunidades",
            "Eventos e calendário",
            "Geolocalização de posts",
            "Sistema de moderação",
            "Reações e comentários",
            "Compartilhamento social",
            "Painel administrativo",
            "Suporte técnico (12 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 8,
          "nome": "App Imobiliária",
          "categoria": "Negócios",
          "nicho": "Imóveis e Propriedades",
          "plataformas": ["Android", "iOS"],
          "preco": 88000,
          "descricao": "Aplicação para compra, venda e arrendamento de imóveis",
          "screenshots": [
            "/assets/img/apps/imoveis-home.jpg",
            "/assets/img/apps/imoveis-listagem.jpg",
            "/assets/img/apps/imoveis-detalhes.jpg",
            "/assets/img/apps/imoveis-mapa.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-imoveis",
          "caracteristicas": [
            "Publicação nas lojas oficiais",
            "Catálogo de imóveis com fotos 360°",
            "Busca avançada por filtros",
            "Geolocalização e mapas",
            "Tour virtual dos imóveis",
            "Sistema de favoritos",
            "Notificações de novos imóveis",
            "Agendamento de visitas",
            "Chat com corretores",
            "Calculadora de financiamento",
            "Comparação de imóveis",
            "Funcionamento offline",
            "Painel para imobiliárias",
            "Suporte técnico (8 meses)"
          ],
          "destaque": false,
          "cor": "success"
        },
        {
          "id": 9,
          "nome": "App Gestão de Tarefas",
          "categoria": "Produtividade",
          "nicho": "Gestão e Organização",
          "plataformas": ["Android", "iOS"],
          "preco": 55000,
          "descricao": "App de produtividade para gestão de tarefas, projetos e equipas",
          "screenshots": [
            "/assets/img/apps/tarefas-home.jpg",
            "/assets/img/apps/tarefas-board.jpg",
            "/assets/img/apps/tarefas-calendario.jpg",
            "/assets/img/apps/tarefas-estatisticas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-tarefas",
          "caracteristicas": [
            "Publicação Play Store e App Store",
            "Criação de tarefas e subtarefas",
            "Quadros Kanban",
            "Calendário integrado",
            "Lembretes e notificações",
            "Colaboração em equipa",
            "Anexos e comentários",
            "Prioridades e etiquetas",
            "Estatísticas de produtividade",
            "Funcionamento offline completo",
            "Sincronização multi-dispositivo",
            "UI/UX minimalista",
            "Temas escuro e claro",
            "Suporte técnico (6 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 10,
          "nome": "App Marketplace Multi-vendedor",
          "categoria": "Comércio",
          "nicho": "Marketplace e Classificados",
          "plataformas": ["Android", "iOS"],
          "preco": 165000,
          "descricao": "Marketplace completo estilo OLX/Jumia para múltiplos vendedores",
          "screenshots": [
            "/assets/img/apps/marketplace-home.jpg",
            "/assets/img/apps/marketplace-categorias.jpg",
            "/assets/img/apps/marketplace-produto.jpg",
            "/assets/img/apps/marketplace-chat.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/app-marketplace",
          "caracteristicas": [
            "Publicação Google Play e App Store",
            "Sistema multi-vendedor",
            "Categorias ilimitadas",
            "Busca inteligente com filtros",
            "Pagamentos seguros integrados",
            "Sistema de comissões automático",
            "Chat entre compradores e vendedores",
            "Avaliações e reputação",
            "Notificações push personalizadas",
            "Geolocalização de produtos",
            "Painel vendedor e admin",
            "Sistema de denúncias",
            "Anúncios patrocinados",
            "Relatórios completos",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": true,
          "cor": "info"
        }
      ]
    }';
    
    $dados = json_decode($json_string, true);
    return $dados && $dados['sucesso'] === true ? $dados : null;
}

?>