<?php

$portfolio_data = [
    [
        'id' => 1,
        'title' => 'Sistema de Gestão de Clientes (CRM)',
        'category' => 'dev', // Mapeia para bg-gradient-dev
        'type' => 'Desenvolvimento de Software',
        'client' => 'MozTelecom, S.A.',
        'date' => '2024-08-15',
        'rating' => 5.0,
        'description' => 'Desenvolvimento de um CRM personalizado para gestão de leads, acompanhamento de vendas e emissão de relatórios de performance.',
        'image' => 'assets/img/portfolio/crm_moztelecom.jpg',
        'tags' => ['PHP', 'Laravel', 'MySQL', 'CRM'],
    ],
    [
        'id' => 2,
        'title' => 'Implementação de Rede Corporativa Segura',
        'category' => 'infra', // Mapeia para bg-gradient-infra
        'type' => 'Infraestrutura e Redes',
        'client' => 'Banco Nacional de Moçambique',
        'date' => '2023-11-20',
        'rating' => 4.8,
        'description' => 'Instalação e configuração de uma rede corporativa com redundância, firewall de última geração e VPN para acesso remoto seguro.',
        'image' => 'assets/img/portfolio/network_bnm.jpg',
        'tags' => ['Cisco', 'Firewall', 'VPN', 'Segurança'],
    ],
    [
        'id' => 3,
        'title' => 'Formação em Cibersegurança para Colaboradores',
        'category' => 'consult', // Mapeia para bg-gradient-consult
        'type' => 'Consultoria e Formação',
        'client' => 'PetroMoz Lda.',
        'date' => '2024-03-10',
        'rating' => 4.9,
        'description' => 'Sessões de formação prática e teórica sobre as melhores práticas de cibersegurança, phishing e proteção de dados para toda a equipa.',
        'image' => 'assets/img/portfolio/training_petromoz.jpg',
        'tags' => ['Formação', 'Cibersegurança', 'Conscientização', 'GDPR'],
    ],
    [
        'id' => 4,
        'title' => 'Website Institucional Moderno',
        'category' => 'dev',
        'type' => 'Desenvolvimento Web',
        'client' => 'Agência de Viagens Sol',
        'date' => '2024-06-01',
        'rating' => 5.0,
        'description' => 'Criação de um website institucional responsivo, otimizado para SEO e com integração de sistema de reservas de terceiros.',
        'image' => 'assets/img/portfolio/website_sol.jpg',
        'tags' => ['Website', 'SEO', 'Responsivo', 'Bootstrap'],
    ],
    [
        'id' => 5,
        'title' => 'Auditoria de Sistemas e Plano de Migração Cloud',
        'category' => 'infra',
        'type' => 'Consultoria de IT',
        'client' => 'Fábrica de Têxteis do Norte',
        'date' => '2023-09-05',
        'rating' => 4.7,
        'description' => 'Auditoria completa da infraestrutura de IT e elaboração de um plano detalhado para migração de servidores locais para a Cloud AWS.',
        'image' => 'assets/img/portfolio/cloud_migration.jpg',
        'tags' => ['Auditoria', 'Cloud', 'AWS', 'Migração'],
    ],
    [
        'id' => 6,
        'title' => 'Desenvolvimento de Aplicação Móvel para Entregas',
        'category' => 'dev',
        'type' => 'Desenvolvimento de Software',
        'client' => 'Entrega Rápida Lda.',
        'date' => '2024-01-25',
        'rating' => 4.9,
        'description' => 'Aplicação móvel (Android e iOS) para gestão de entregas, rastreamento em tempo real e comunicação entre estafetas e clientes.',
        'image' => 'assets/img/portfolio/app_entrega.jpg',
        'tags' => ['Mobile', 'Android', 'iOS', 'Rastreamento'],
    ],
];

// Mapeamento de categorias para classes de cor
$category_map = [
    'dev' => [
        'bg' => 'bg-gradient-dev',
        'text' => 'text-gradient-dev',
        'border' => 'border-gradient-dev',
        'icon' => 'ri-code-box-line',
    ],
    'infra' => [
        'bg' => 'bg-gradient-infra',
        'text' => 'text-gradient-infra',
        'border' => 'border-gradient-infra',
        'icon' => 'ri-server-line',
    ],
    'consult' => [
        'bg' => 'bg-gradient-consult',
        'text' => 'text-gradient-consult',
        'border' => 'border-gradient-consult',
        'icon' => 'ri-lightbulb-line',
    ],
];

?>
