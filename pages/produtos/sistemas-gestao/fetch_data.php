<?php

function buscarDadosSistemas() {
    $json_string = '{
      "sucesso": true,
      "total": 12,
      "data": [
        {
          "id": 1,
          "nome": "ERP Completo",
          "categoria": "Empresarial",
          "nicho": "PMEs e Grandes Empresas",
          "paginas": "Módulos Ilimitados",
          "preco": 150000,
          "descricao": "Sistema integrado de gestão empresarial (ERP) para controlar finanças, stock, vendas, RH e mais",
          "screenshots": [
            "/assets/img/sistemas/erp-dashboard.jpg",
            "/assets/img/sistemas/erp-financas.jpg",
            "/assets/img/sistemas/erp-stock.jpg",
            "/assets/img/sistemas/erp-relatorios.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/erp",
          "caracteristicas": [
            "Gestão financeira e contabilidade",
            "Controlo de stock e inventário",
            "Módulo de vendas e facturação",
            "Gestão de recursos humanos (RH)",
            "Compras e fornecedores",
            "Produção e logística",
            "Relatórios avançados e BI",
            "Integração com e-fatura AT",
            "Multi-utilizador e acessos por perfil",
            "Backup automático e segurança",
            "Suporte prioritário (12 meses)"
          ],
          "destaque": true,
          "cor": "success"
        },
        {
          "id": 2,
          "nome": "CRM Avançado",
          "categoria": "Vendas e Clientes",
          "nicho": "Equipas Comerciais",
          "paginas": "Dashboard + Funis",
          "preco": 75000,
          "descricao": "Gestão de relacionamento com clientes para aumentar vendas e fidelização",
          "screenshots": [
            "/assets/img/sistemas/crm-dashboard.jpg",
            "/assets/img/sistemas/crm-funil.jpg",
            "/assets/img/sistemas/crm-contactos.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/crm",
          "caracteristicas": [
            "Funil de vendas personalizado",
            "Gestão de leads e oportunidades",
            "Automação de email e WhatsApp",
            "Histórico de interações",
            "Relatórios de performance",
            "Integração com calendar e tarefas",
            "Campanhas de marketing",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 3,
          "nome": "Gestão de Stock",
          "categoria": "Logística",
          "nicho": "Comércio e Armazéns",
          "paginas": "Inventário Completo",
          "preco": 55000,
          "descricao": "Controlo total de stock, entradas/saídas e alertas de reposição",
          "screenshots": [
            "/assets/img/sistemas/stock-dashboard.jpg",
            "/assets/img/sistemas/stock-movimentos.jpg",
            "/assets/img/sistemas/stock-alertas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/stock",
          "caracteristicas": [
            "Registo de entradas e saídas",
            "Códigos de barras e lotes",
            "Alertas de stock mínimo/máximo",
            "Multi-armazém",
            "Valoração de stock (PEPS, UEPS)",
            "Integração com vendas",
            "Relatórios de movimentação",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 4,
          "nome": "POS + Facturação",
          "categoria": "Vendas",
          "nicho": "Lojas e Retalho",
          "paginas": "Ponto de Venda",
          "preco": 45000,
          "descricao": "Sistema de ponto de venda com facturação certificada AT",
          "screenshots": [
            "/assets/img/sistemas/pos-venda.jpg",
            "/assets/img/sistemas/pos-relatorio.jpg",
            "/assets/img/sistemas/pos-produtos.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/pos",
          "caracteristicas": [
            "Talão de venda rápido",
            "Facturação electrónica AT",
            "Gestão de produtos e categorias",
            "Pagamentos M-Pesa/E-Mola",
            "Controlo de caixa diário",
            "Relatórios de vendas",
            "Integração stock",
            "Suporte (3 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 5,
          "nome": "Gestão Escolar",
          "categoria": "Educação",
          "nicho": "Escolas e Universidades",
          "paginas": "Portal Aluno/Professor",
          "preco": 95000,
          "descricao": "Sistema completo para gestão académica, propinas e comunicação",
          "screenshots": [
            "/assets/img/sistemas/escolar-dashboard.jpg",
            "/assets/img/sistemas/escolar-alunos.jpg",
            "/assets/img/sistemas/escolar-propinas.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/escolar",
          "caracteristicas": [
            "Matrículas e inscrições",
            "Gestão de turmas e horários",
            "Propinas e pagamentos",
            "Notas e pautas",
            "Portal para encarregados",
            "Relatórios académicos",
            "Comunicados e SMS",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 6,
          "nome": "Gestão Hospitalar/Clínica",
          "categoria": "Saúde",
          "nicho": "Hospitais e Clínicas",
          "paginas": "Agenda + Registos",
          "preco": 180000,
          "descricao": "Sistema robusto para gestão de pacientes, consultas e internamentos",
          "screenshots": [
            "/assets/img/sistemas/hospital-dashboard.jpg",
            "/assets/img/sistemas/hospital-agenda.jpg",
            "/assets/img/sistemas/hospital-pacientes.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/hospital",
          "caracteristicas": [
            "Agenda de consultas",
            "Registo clínico electrónico",
            "Gestão de internamentos",
            "Farmácia interna",
            "Facturação e seguros",
            "Relatórios médicos",
            "Integração laboratórios",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "success"
        },
        {
          "id": 7,
          "nome": "Gestão de Restaurante",
          "categoria": "Restauração",
          "nicho": "Restaurantes e Cafés",
          "paginas": "Mesas + Comandas",
          "preco": 65000,
          "descricao": "Controlo de mesas, comandas e stock de cozinha em tempo real",
          "screenshots": [
            "/assets/img/sistemas/restaurante-mesas.jpg",
            "/assets/img/sistemas/restaurante-comanda.jpg",
            "/assets/img/sistemas/restaurante-relatorio.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/restaurante",
          "caracteristicas": [
            "Mapa de mesas interactivo",
            "Comandas digitais",
            "Gestão de menu e stock",
            "Pagamentos integrados",
            "Relatórios de vendas",
            "Integração delivery",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 8,
          "nome": "Gestão Hoteleira",
          "categoria": "Hotelaria",
          "nicho": "Hotéis e Alojamentos",
          "paginas": "Reservas + Check-in",
          "preco": 120000,
          "descricao": "Sistema PMS para reservas, check-in/out e housekeeping",
          "screenshots": [
            "/assets/img/sistemas/hotel-reservas.jpg",
            "/assets/img/sistemas/hotel-checkin.jpg",
            "/assets/img/sistemas/hotel-dashboard.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/hotel",
          "caracteristicas": [
            "Motor de reservas online",
            "Check-in/out rápido",
            "Gestão de quartos e housekeeping",
            "Facturação e POS",
            "Channel manager",
            "Relatórios de ocupação",
            "Suporte (9 meses)"
          ],
          "destaque": false,
          "cor": "warning"
        },
        {
          "id": 9,
          "nome": "Gestão de Farmácia",
          "categoria": "Saúde",
          "nicho": "Farmácias",
          "paginas": "Stock + Vendas",
          "preco": 60000,
          "descricao": "Controlo de medicamentos, validade e vendas com receita",
          "screenshots": [
            "/assets/img/sistemas/farmacia-stock.jpg",
            "/assets/img/sistemas/farmacia-venda.jpg",
            "/assets/img/sistemas/farmacia-relatorio.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/farmacia",
          "caracteristicas": [
            "Gestão de stock e validade",
            "Vendas com receita médica",
            "Integração POS",
            "Relatórios regulatórios",
            "Alertas de stock baixo",
            "Multi-balção",
            "Suporte (4 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 10,
          "nome": "Gestão Financeira",
          "categoria": "Financeiro",
          "nicho": "Contabilidade",
          "paginas": "Contas + Relatórios",
          "preco": 80000,
          "descricao": "Módulo completo de contabilidade, tesouraria e relatórios fiscais",
          "screenshots": [
            "/assets/img/sistemas/financeiro-dashboard.jpg",
            "/assets/img/sistemas/financeiro-contas.jpg",
            "/assets/img/sistemas/financeiro-fiscal.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/financeiro",
          "caracteristicas": [
            "Contabilidade geral",
            "Contas a pagar/receber",
            "Reconciliação bancária",
            "Declarações fiscais AT",
            "Fluxo de caixa previsional",
            "Relatórios personalizados",
            "Suporte (6 meses)"
          ],
          "destaque": false,
          "cor": "info"
        }
      ]
    }';
    
    $dados = json_decode($json_string, true);
    return $dados && $dados['sucesso'] === true ? $dados : null;
}
?>