<?php
/**
 * Função para simular a busca de dados de uma API (lê o JSON local)
 * Em um cenário real, você usaria 'curl' ou 'file_get_contents' para
 * acessar uma URL externa da API, como:
 * $json_data = file_get_contents('https://sua-api.com/numeros');
 */
function buscarDadosNumeros() {
    // Conteúdo do JSON fictício (pode ser lido de um arquivo, como 'api_numeros.json')
    $json_string = '{
      "sucesso": true,
      "titulo_secao": "Os nossos números",
      "data": [
        {
          "icone": "ri-briefcase-line",
          "cor_badge": "primary",
          "valor": "50+",
          "descricao": "Projectos Entregues"
        },
        {
          "icone": "ri-user-smile-line",
          "cor_badge": "secondary",
          "valor": "100+",
          "descricao": "Clientes Satisfeitos"
        },
        {
          "icone": "ri-team-line",
          "cor_badge": "tertiary",
          "valor": "15+",
          "descricao": "Profissionais Especializados"
        },
        {
          "icone": "ri-award-line",
          "cor_badge": "quaternary",
          "valor": "5+",
          "descricao": "Anos de Experiência"
        }
      ]
    }';
    
    // Decodifica o JSON para um objeto PHP
    $dados = json_decode($json_string, true);
    
    // Verifica se a decodificação foi bem-sucedida e se há dados
    if ($dados && $dados['sucesso'] === true && !empty($dados['data'])) {
        return $dados;
    }
    
    // Retorna array vazio ou null em caso de falha
    return null;
}
// Chama a função para obter os dados
$dados_api = buscarDadosNumeros();
?>

<!-- -->
<?php if ($dados_api): ?>
<!-- Secção de Estatísticas - Design Moderno -->
<section class="section-py landing-stats" id="landingFunFacts">
    <div class="container">
        
        <!-- Cabeçalho da Secção -->
        <div class="text-center mb-5 pb-3">
            <div class="stats-badge mx-auto mb-4">
                <span class="badge-icon">★</span>
                <span class="badge-text"><!-- -->
<?php echo strtoupper(htmlspecialchars($dados_api['titulo_secao'])); ?></span>
            </div>
            <h2 class="stats-title mb-4">
                Resultados que<br>
                <span class="text-gradient">Comprovam</span>
            </h2>
            <p class="stats-subtitle mx-auto">
                Números que reflectem o nosso compromisso com a excelência e inovação
            </p>
        </div>

        <!-- Grid de Estatísticas -->
        <div class="row g-4 justify-content-center">
            <!-- -->
<?php foreach ($dados_api['data'] as $index => $item): ?>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="stat-card stat-<!-- -->
<?php echo htmlspecialchars($item['cor_badge']); ?>">
                        <div class="stat-icon-wrapper">
                            <div class="stat-icon">
                                <i class="ri <!-- -->
<?php echo htmlspecialchars($item['icone']); ?>"></i>
                            </div>
                            <div class="stat-circle"></div>
                        </div>
                        <div class="stat-content">
                            <h3 class="stat-number" data-target="<!-- -->
<?php echo htmlspecialchars($item['valor']); ?>">
                                <!-- -->
<?php echo htmlspecialchars($item['valor']); ?>
                            </h3>
                            <p class="stat-label"><!-- -->
<?php echo htmlspecialchars($item['descricao']); ?></p>
                        </div>
                        <div class="stat-glow"></div>
                    </div>
                </div>
            <!-- -->
<?php endforeach; ?>
        </div>
    </div>
</section>

<style>
/* ========================================
   VARIÁVEIS DAS ESTATÍSTICAS
   ======================================== */

:root {
    --stats-primary: #d97638;
    --stats-secondary: #c66b3d;
    --stats-tertiary: #b85f30;
    --stats-quaternary: #8a4a2e;
    
    --stats-bg: #fdf8f4;
    --stats-card-bg: #fffdfb;
    --stats-text: #5a3a28;
    --stats-text-secondary: #74523d;
    --stats-text-muted: #8a6850;
    --stats-border: rgba(217, 118, 56, 0.35);
    
    --stats-shadow: rgba(217, 118, 56, 0.08);
    --stats-shadow-hover: rgba(217, 118, 56, 0.2);
}

@media (prefers-color-scheme: dark) {
    :root {
        --stats-primary: #ff8c4a;
        --stats-secondary: #ffa366;
        --stats-tertiary: #d97638;
        --stats-quaternary: #c66b3d;
        
        --stats-bg: #12100d;
        --stats-card-bg: #1f1814;
        --stats-text: #f5ede6;
        --stats-text-secondary: #d4c5b8;
        --stats-text-muted: #9a8d82;
        --stats-border: rgba(255, 140, 74, 0.15);
        
        --stats-shadow: rgba(0, 0, 0, 0.3);
        --stats-shadow-hover: rgba(255, 140, 74, 0.25);
    }
}

[data-bs-theme="light"] {
    --stats-bg: #fdf8f4;
    --stats-card-bg: #fffdfb;
    --stats-text: #5a3a28;
    --stats-text-secondary: #74523d;
    --stats-text-muted: #8a6850;
    --stats-border: rgba(217, 118, 56, 0.35);
}

[data-bs-theme="dark"] {
    --stats-bg: #12100d;
    --stats-card-bg: #1f1814;
}

/* ========================================
   SECÇÃO PRINCIPAL
   ======================================== */

.landing-stats {
    background: var(--stats-bg);
    position: relative;
    overflow: hidden;
}

/* ========================================
   CABEÇALHO
   ======================================== */

.stats-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.75rem;
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.12), rgba(184, 95, 48, 0.08));
    border: 1px solid var(--stats-border);
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.badge-icon {
    color: var(--stats-primary);
    font-size: 1.25rem;
    animation: badgeSpin 3s ease-in-out infinite;
}

.badge-text {
    color: var(--stats-primary);
    font-weight: 600;
    font-size: 0.875rem;
    letter-spacing: 1.5px;
}

.stats-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--stats-text);
    line-height: 1.2;
}

.text-gradient {
    background: linear-gradient(135deg, var(--stats-primary), var(--stats-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.stats-subtitle {
    max-width: 650px;
    font-size: 1.1rem;
    color: var(--stats-text-muted);
    line-height: 1.7;
}

/* ========================================
   CARDS DE ESTATÍSTICAS
   ======================================== */

.stat-card {
    background: var(--stats-card-bg);
    border-radius: 6px;
    padding: 2.5rem 1.5rem;
    text-align: center;
    border: 1px solid var(--stats-border);
    box-shadow: 0 4px 20px var(--stats-shadow);
    transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
}

.stat-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    height: 4px;
    background: linear-gradient(90deg, transparent, var(--stats-primary), transparent);
    opacity: 0;
    transition: opacity 0.4s ease;
}

.stat-card:hover {
    transform: translateY(-12px) scale(1.02);
    box-shadow: 0 20px 50px var(--stats-shadow-hover);
}

.stat-card:hover::before {
    opacity: 1;
}

/* ========================================
   ÍCONES
   ======================================== */

.stat-icon-wrapper {
    position: relative;
    display: inline-block;
    margin-bottom: 1.5rem;
}

.stat-icon {
    width: 80px;
    height: 80px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5%;
    font-size: 2.5rem;
    position: relative;
    z-index: 2;
    transition: all 0.4s ease;
}

.stat-circle {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 80px;
    height: 80px;
    border-radius: 5%;
    border: 2px solid currentColor;
    opacity: 0.2;
    transition: all 0.4s ease;
}

.stat-card:hover .stat-icon {
    transform: scale(1.15) rotate(10deg);
}

.stat-card:hover .stat-circle {
    width: 95px;
    height: 95px;
    opacity: 0;
}

/* Cores específicas por estatística */
.stat-card.stat-primary .stat-icon {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.2), rgba(217, 118, 56, 0.08));
    color: var(--stats-primary);
}

.stat-card.stat-primary .stat-circle {
    border-color: var(--stats-primary);
}

.stat-card.stat-secondary .stat-icon {
    background: linear-gradient(135deg, rgba(198, 107, 61, 0.2), rgba(198, 107, 61, 0.08));
    color: var(--stats-secondary);
}

.stat-card.stat-secondary .stat-circle {
    border-color: var(--stats-secondary);
}

.stat-card.stat-tertiary .stat-icon {
    background: linear-gradient(135deg, rgba(184, 95, 48, 0.2), rgba(184, 95, 48, 0.08));
    color: var(--stats-tertiary);
}

.stat-card.stat-tertiary .stat-circle {
    border-color: var(--stats-tertiary);
}

.stat-card.stat-quaternary .stat-icon {
    background: linear-gradient(135deg, rgba(138, 74, 46, 0.2), rgba(138, 74, 46, 0.08));
    color: var(--stats-quaternary);
}

.stat-card.stat-quaternary .stat-circle {
    border-color: var(--stats-quaternary);
}

/* ========================================
   CONTEÚDO
   ======================================== */

.stat-content {
    position: relative;
    z-index: 2;
}

.stat-number {
    font-size: 3rem;
    font-weight: 700;
    color: var(--stats-text);
    margin-bottom: 0.5rem;
    line-height: 1;
    transition: all 0.3s ease;
}

.stat-card:hover .stat-number {
    transform: scale(1.1);
}

.stat-card.stat-primary:hover .stat-number {
    color: var(--stats-primary);
}

.stat-card.stat-secondary:hover .stat-number {
    color: var(--stats-secondary);
}

.stat-card.stat-tertiary:hover .stat-number {
    color: var(--stats-tertiary);
}

.stat-card.stat-quaternary:hover .stat-number {
    color: var(--stats-quaternary);
}

.stat-label {
    font-size: 0.95rem;
    color: var(--stats-text-secondary);
    margin: 0;
    line-height: 1.5;
}

/* ========================================
   EFEITO GLOW
   ======================================== */

.stat-glow {
    position: absolute;
    bottom: -50%;
    left: 50%;
    transform: translateX(-50%);
    width: 150%;
    height: 150%;
    border-radius: 5%;
    opacity: 0;
    transition: all 0.5s ease;
}

.stat-card.stat-primary .stat-glow {
    background: radial-gradient(circle, rgba(217, 118, 56, 0.15) 0%, transparent 70%);
}

.stat-card.stat-secondary .stat-glow {
    background: radial-gradient(circle, rgba(198, 107, 61, 0.15) 0%, transparent 70%);
}

.stat-card.stat-tertiary .stat-glow {
    background: radial-gradient(circle, rgba(184, 95, 48, 0.15) 0%, transparent 70%);
}

.stat-card.stat-quaternary .stat-glow {
    background: radial-gradient(circle, rgba(138, 74, 46, 0.15) 0%, transparent 70%);
}

.stat-card:hover .stat-glow {
    opacity: 1;
    bottom: -20%;
}

/* ========================================
   ANIMAÇÕES
   ======================================== */

@keyframes badgeSpin {
    0%, 100% {
        transform: rotate(0deg);
    }
    50% {
        transform: rotate(180deg);
    }
}

/* ========================================
   RESPONSIVIDADE
   ======================================== */

@media (max-width: 1199px) {
    .stats-title {
        font-size: 2rem;
    }
    
    .stat-icon {
        width: 70px;
        height: 70px;
        font-size: 2.25rem;
    }
    
    .stat-circle {
        width: 70px;
        height: 70px;
    }
    
    .stat-number {
        font-size: 2.5rem;
    }
}

@media (max-width: 991px) {
    .stat-card {
        padding: 2rem 1.25rem;
    }
    
    .stat-icon {
        width: 65px;
        height: 65px;
        font-size: 2rem;
    }
    
    .stat-circle {
        width: 65px;
        height: 65px;
    }
}

@media (max-width: 767px) {
    .stats-title {
        font-size: 1.75rem;
    }
    
    .stats-subtitle {
        font-size: 1rem;
    }
    
    .stat-card {
        padding: 1.75rem 1rem;
    }
    
    .stat-number {
        font-size: 2.25rem;
    }
    
    .stat-label {
        font-size: 0.9rem;
    }
}

@media (max-width: 575px) {
    .badge-text {
        font-size: 0.75rem;
    }
    
    .stats-title {
        font-size: 1.5rem;
    }
    
    .stats-subtitle {
        font-size: 0.95rem;
    }
    
    .stat-icon {
        width: 60px;
        height: 60px;
        font-size: 1.75rem;
    }
    
    .stat-circle {
        width: 60px;
        height: 60px;
    }
    
    .stat-number {
        font-size: 2rem;
    }
}

/* ========================================
   MODO DARK - AJUSTES ESPECÍFICOS
   ======================================== */

@media (prefers-color-scheme: dark) {
    .stat-card {
        box-shadow: 0 4px 20px var(--stats-shadow);
    }
    
    .stat-card:hover {
        box-shadow: 0 20px 50px var(--stats-shadow-hover);
    }
    
    .stat-card.stat-primary .stat-icon {
        background: linear-gradient(135deg, rgba(255, 140, 74, 0.25), rgba(255, 140, 74, 0.1));
    }
    
    .stat-card.stat-secondary .stat-icon {
        background: linear-gradient(135deg, rgba(255, 163, 102, 0.25), rgba(255, 163, 102, 0.1));
    }
    
    .stat-card.stat-tertiary .stat-icon {
        background: linear-gradient(135deg, rgba(217, 118, 56, 0.25), rgba(217, 118, 56, 0.1));
    }
    
    .stat-card.stat-quaternary .stat-icon {
        background: linear-gradient(135deg, rgba(198, 107, 61, 0.25), rgba(198, 107, 61, 0.1));
    }
    
    .stat-card.stat-primary .stat-glow {
        background: radial-gradient(circle, rgba(255, 140, 74, 0.2) 0%, transparent 70%);
    }
    
    .stat-card.stat-secondary .stat-glow {
        background: radial-gradient(circle, rgba(255, 163, 102, 0.2) 0%, transparent 70%);
    }
    
    .stat-card.stat-tertiary .stat-glow {
        background: radial-gradient(circle, rgba(217, 118, 56, 0.2) 0%, transparent 70%);
    }
    
    .stat-card.stat-quaternary .stat-glow {
        background: radial-gradient(circle, rgba(198, 107, 61, 0.2) 0%, transparent 70%);
    }
}
</style>

<!-- -->
<?php else: ?>
    <div class="container my-5 py-5">
        <div class="alert alert-danger text-center" role="alert">
            <i class="ri ri-error-warning-line me-2"></i>
            Erro ao carregar os números da API.
        </div>
    </div>
<!-- -->
<?php endif; ?>
