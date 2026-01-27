
/**
 * Função para simular busca de dados da API de Soluções IA + IoT
 */
function buscarDadosIAIoT() {
    $json_string = '{
      "sucesso": true,
      "total": 8,
      "data": [
        {
          "id": 1,
          "nome": "Chatbot WhatsApp Business",
          "categoria": "Inteligência Artificial",
          "nicho": "Atendimento ao Cliente",
          "modulos": 3,
          "preco": 45000,
          "descricao": "Chatbot inteligente para automatizar atendimento via WhatsApp com IA conversacional",
          "screenshots": [
            "/assets/img/ia-iot/chatbot-whatsapp-home.jpg",
            "/assets/img/ia-iot/chatbot-whatsapp-conversas.jpg",
            "/assets/img/ia-iot/chatbot-whatsapp-dashboard.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/chatbot-whatsapp",
          "caracteristicas": [
            "IA conversacional avançada (GPT)",
            "Integração WhatsApp Business API",
            "Respostas automáticas inteligentes",
            "Aprendizado contínuo",
            "Suporte multi-idioma (PT, EN)",
            "Dashboard de métricas",
            "Histórico de conversas",
            "Integração com CRM",
            "Notificações em tempo real",
            "Base de conhecimento customizável",
            "Suporte técnico (6 meses)"
          ],
          "destaque": true,
          "cor": "success"
        },
        {
          "id": 2,
          "nome": "Chatbot para Website",
          "categoria": "Inteligência Artificial",
          "nicho": "Suporte Online",
          "modulos": 2,
          "preco": 35000,
          "descricao": "Assistente virtual inteligente para seu website com IA e respostas contextuais",
          "screenshots": [
            "/assets/img/ia-iot/chatbot-web-home.jpg",
            "/assets/img/ia-iot/chatbot-web-interface.jpg",
            "/assets/img/ia-iot/chatbot-web-config.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/chatbot-web",
          "caracteristicas": [
            "Widget personalizável",
            "IA conversacional",
            "Respostas contextuais",
            "Integração com site existente",
            "Análise de sentimento",
            "Captura de leads",
            "Transferência para humano",
            "Relatórios de interação",
            "Design responsivo",
            "Suporte técnico (4 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 3,
          "nome": "Sistema de Monitorização IoT",
          "categoria": "Internet das Coisas",
          "nicho": "Indústria e Logística",
          "modulos": 5,
          "preco": 85000,
          "descricao": "Plataforma completa para monitorização remota de equipamentos e sensores IoT",
          "screenshots": [
            "/assets/img/ia-iot/iot-monitoring-dashboard.jpg",
            "/assets/img/ia-iot/iot-monitoring-sensors.jpg",
            "/assets/img/ia-iot/iot-monitoring-alerts.jpg",
            "/assets/img/ia-iot/iot-monitoring-reports.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/iot-monitoring",
          "caracteristicas": [
            "Dashboard em tempo real",
            "Integração com sensores IoT",
            "Monitorização remota 24/7",
            "Alertas automáticos (SMS/Email)",
            "Histórico de dados",
            "Gráficos e análises",
            "Gestão de dispositivos",
            "API REST para integração",
            "Aplicação mobile (Android/iOS)",
            "Relatórios customizáveis",
            "Sistema de notificações",
            "Backup automático",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 4,
          "nome": "Dashboard Preditivo com IA",
          "categoria": "Inteligência Artificial",
          "nicho": "Análise de Dados",
          "modulos": 4,
          "preco": 95000,
          "descricao": "Dashboard inteligente com análise preditiva e insights automáticos usando Machine Learning",
          "screenshots": [
            "/assets/img/ia-iot/dashboard-preditivo-home.jpg",
            "/assets/img/ia-iot/dashboard-preditivo-graficos.jpg",
            "/assets/img/ia-iot/dashboard-preditivo-previsoes.jpg",
            "/assets/img/ia-iot/dashboard-preditivo-insights.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/dashboard-preditivo",
          "caracteristicas": [
            "Machine Learning integrado",
            "Análise preditiva avançada",
            "Previsão de tendências",
            "Insights automáticos com IA",
            "Visualizações interactivas",
            "Processamento de Big Data",
            "Relatórios automatizados",
            "Integração com múltiplas fontes",
            "Alertas inteligentes",
            "Exportação de dados (CSV, Excel, PDF)",
            "Painel personalizável",
            "Suporte prioritário (9 meses)"
          ],
          "destaque": true,
          "cor": "warning"
        },
        {
          "id": 5,
          "nome": "Automação Residencial IoT",
          "categoria": "Internet das Coisas",
          "nicho": "Casa Inteligente",
          "modulos": 6,
          "preco": 125000,
          "descricao": "Sistema completo de automação residencial com controle via app e comandos de voz",
          "screenshots": [
            "/assets/img/ia-iot/automacao-residencial-home.jpg",
            "/assets/img/ia-iot/automacao-residencial-dispositivos.jpg",
            "/assets/img/ia-iot/automacao-residencial-cenarios.jpg",
            "/assets/img/ia-iot/automacao-residencial-mobile.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/automacao-residencial",
          "caracteristicas": [
            "Controle de iluminação inteligente",
            "Gestão de climatização",
            "Sistema de segurança integrado",
            "Controle de acesso",
            "Comandos de voz (Google/Alexa)",
            "Aplicação móvel iOS/Android",
            "Automação de cenários",
            "Sensores de presença",
            "Monitorização de energia",
            "Câmeras de vigilância",
            "Integração com assistentes virtuais",
            "Notificações push",
            "Suporte técnico (12 meses)"
          ],
          "destaque": false,
          "cor": "danger"
        },
        {
          "id": 6,
          "nome": "Reconhecimento Facial IA",
          "categoria": "Inteligência Artificial",
          "nicho": "Segurança e Controle",
          "modulos": 3,
          "preco": 78000,
          "descricao": "Sistema de reconhecimento facial com IA para controle de acesso e segurança",
          "screenshots": [
            "/assets/img/ia-iot/reconhecimento-facial-home.jpg",
            "/assets/img/ia-iot/reconhecimento-facial-cadastro.jpg",
            "/assets/img/ia-iot/reconhecimento-facial-logs.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/reconhecimento-facial",
          "caracteristicas": [
            "Reconhecimento facial em tempo real",
            "Deep Learning para precisão",
            "Cadastro de pessoas",
            "Controle de acesso automatizado",
            "Detecção de múltiplas faces",
            "Registro de entrada/saída",
            "Alertas de segurança",
            "Integração com câmeras IP",
            "Dashboard de monitorização",
            "Relatórios de acessos",
            "API para integração",
            "Suporte técnico (6 meses)"
          ],
          "destaque": false,
          "cor": "primary"
        },
        {
          "id": 7,
          "nome": "Visão Computacional para Indústria",
          "categoria": "Inteligência Artificial",
          "nicho": "Controle de Qualidade",
          "modulos": 4,
          "preco": 150000,
          "descricao": "Sistema de visão computacional com IA para inspeção e controle de qualidade industrial",
          "screenshots": [
            "/assets/img/ia-iot/visao-computacional-home.jpg",
            "/assets/img/ia-iot/visao-computacional-inspecao.jpg",
            "/assets/img/ia-iot/visao-computacional-defeitos.jpg",
            "/assets/img/ia-iot/visao-computacional-relatorios.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/visao-computacional",
          "caracteristicas": [
            "Detecção automática de defeitos",
            "Inspeção de qualidade em tempo real",
            "Deep Learning para classificação",
            "Integração com linha de produção",
            "Análise de imagens de alta resolução",
            "Relatórios de conformidade",
            "Rastreabilidade de produtos",
            "Alertas de não-conformidade",
            "Dashboard de estatísticas",
            "Exportação de dados",
            "Treinamento de modelos customizados",
            "Suporte dedicado (12 meses)"
          ],
          "destaque": false,
          "cor": "info"
        },
        {
          "id": 8,
          "nome": "Plataforma IoT Agricultura Smart",
          "categoria": "Internet das Coisas",
          "nicho": "Agricultura de Precisão",
          "modulos": 7,
          "preco": 110000,
          "descricao": "Solução IoT completa para agricultura inteligente com sensores e análise de dados",
          "screenshots": [
            "/assets/img/ia-iot/agricultura-smart-home.jpg",
            "/assets/img/ia-iot/agricultura-smart-sensores.jpg",
            "/assets/img/ia-iot/agricultura-smart-irrigacao.jpg",
            "/assets/img/ia-iot/agricultura-smart-previsoes.jpg"
          ],
          "demo_url": "https://demo.mefemasystems.co.mz/agricultura-smart",
          "caracteristicas": [
            "Sensores de solo (humidade, pH, nutrientes)",
            "Monitorização climática",
            "Automação de irrigação",
            "Previsões meteorológicas",
            "Análise de crescimento de culturas",
            "Alertas de pragas e doenças",
            "Gestão de recursos hídricos",
            "Dashboard de produtividade",
            "Aplicação mobile",
            "Relatórios agronómicos",
            "Integração com drones",
            "Suporte técnico (10 meses)"
          ],
          "destaque": false,
          "cor": "success"
        }
      ]
    }';
    
    $dados = json_decode($json_string, true);
    return $dados && $dados['sucesso'] === true ? $dados : null;
}