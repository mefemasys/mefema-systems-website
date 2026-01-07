<style>
/* ========================================
   VARIÁVEIS DA ESTRATÉGIA - REVISADAS
   ======================================== */

:root {
    --strategy-primary: #d97638;
    --strategy-secondary: #c66b3d;
    --strategy-tertiary: #b85f30;
    --strategy-quaternary: #8a4a2e;
    
    /* FUNDO: Um creme bem suave com toque de laranja/castanho */
    --strategy-bg: #fdf9f6; 
    --strategy-card-bg: #ffffff;
    
    /* TEXTO: Castanho profundo ao invés de preto */
    --strategy-text: #432818; 
    --strategy-text-muted: #6b4d3c;
    
    /* BORDAS: Mais visíveis com tom de terra cozida */
    --strategy-border: rgba(138, 74, 46, 0.25); 
    
    --strategy-shadow: rgba(217, 118, 56, 0.08);
    --strategy-shadow-hover: rgba(138, 74, 46, 0.15);
}

/* MANTER MODO DARK COMO ESTAVA */
@media (prefers-color-scheme: dark) {
    :root {
        --strategy-primary: #ff8c4a;
        --strategy-secondary: #ffa366;
        --strategy-tertiary: #d97638;
        --strategy-quaternary: #c66b3d;
        
        --strategy-bg: #1a1410;
        --strategy-card-bg: #2a1f1a;
        --strategy-text: #f5ede6;
        --strategy-text-muted: #c4b5a8;
        --strategy-border: rgba(255, 140, 74, 0.15);
        
        --strategy-shadow: rgba(0, 0, 0, 0.2);
        --strategy-shadow-hover: rgba(255, 140, 74, 0.2);
    }
}

/* Suporte para Bootstrap Dark/Light Mode */
[data-bs-theme="light"] {
    --strategy-bg: #fdf9f6;
    --strategy-card-bg: #ffffff;
    --strategy-text: #432818;
    --strategy-text-muted: #6b4d3c;
    --strategy-border: rgba(138, 74, 46, 0.25);
}

[data-bs-theme="dark"] {
    --strategy-bg: #1a1410;
    --strategy-card-bg: #2a1f1a;
    --strategy-text: #f5ede6;
    --strategy-text-muted: #c4b5a8;
}

/* ========================================
   REFINAMENTO DOS CARDS (MODO CLARO)
   ======================================== */

.strategy-card {
    background: var(--strategy-card-bg);
    border-radius: 12px; /* Arredondei um pouco mais para suavidade */
    padding: 2.5rem 1.5rem;
    height: 100%;
    /* Borda ligeiramente mais espessa no modo claro para visibilidade */
    border: 1.5px solid var(--strategy-border); 
    transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
    position: relative;
    overflow: hidden;
    box-shadow: 0 4px 15px var(--strategy-shadow);
}

.strategy-card:hover {
    transform: translateY(-10px);
    border-color: var(--strategy-primary);
    box-shadow: 0 20px 40px var(--strategy-shadow-hover);
}

.card-title {
    font-size: 1.25rem;
    font-weight: 700;
    color: var(--strategy-text);
    margin-bottom: 1rem;
}

.card-description {
    font-size: 0.95rem;
    color: var(--strategy-text-muted);
    line-height: 1.6;
}

/* Destaque das palavras em negrito com a cor principal laranja */
.card-description strong {
    color: var(--strategy-primary);
    font-weight: 700;
}

.strategy-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    /* Badge com fundo mais "quente" */
    background: rgba(217, 118, 56, 0.08);
    border: 1px solid var(--strategy-border);
    border-radius: 10px;
}

.strategy-subtitle {
    max-width: 700px;
    font-size: 1.1rem;
    color: var(--strategy-text-muted);
    font-weight: 500;
}

/* ... Mantendo o restante das animações e ícones ... */
</style>
