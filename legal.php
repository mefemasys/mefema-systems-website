<?php $pageTitle = "Documentos Legais - MEFEMA Systems"; ?>
<?php include 'includes/header.php'; ?>

<!-- Estilos -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-markdown-css/5.2.0/github-markdown.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/github.min.css">
<style>
    .legal-container { max-width: 1000px; margin: 0 auto; padding: 2rem; font-family: 'Segoe UI', Tahoma, sans-serif; }
    .page-header { text-align: center; margin-bottom: 3rem; }
    .page-header h1 { color: #003087; margin-bottom: 0.5rem; }
    .page-header p { color: #555; font-size: 1.1rem; }

    .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
        gap: 1.5rem;
        margin-bottom: 3rem;
    }
    .service-card {
        background: #fff;
        border: 1px solid #ddd;
        border-radius: 8px;
        padding: 1.5rem;
        text-align: center;
        cursor: pointer;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(0,0,0,0.05);
    }
    .service-card:hover { transform: translateY(-4px); box-shadow: 0 8px 16px rgba(0,0,0,0.1); }
    .service-icon { font-size: 2.5rem; margin-bottom: 0.8rem; }
    .service-card h3 { margin: 0.5rem 0; color: #003087; }
    .service-card p { font-size: 0.95rem; color: #555; margin-bottom: 1rem; }

    .doc-section { margin-bottom: 2rem; border: 1px solid #e1e4e8; border-radius: 8px; overflow: hidden; }
    .doc-header {
        background: #003087; color: white; padding: 1rem 1.5rem;
        font-weight: 600; font-size: 1.1rem; display: flex; justify-content: space-between; align-items: center;
        cursor: pointer;
    }
    .doc-header .toggle { font-size: 1.4rem; font-weight: bold; }
    .doc-content { display: none; padding: 0; }
    .doc-content.active { display: block; }
    .markdown-body { padding: 2rem !important; }

    .back-to-top { text-align: center; margin: 3rem 0 1rem; }
    .back-to-top a { color: #003087; text-decoration: none; font-weight: 500; }

    @media (max-width: 768px) {
        .legal-container { padding: 1rem; }
        .doc-header { font-size: 1rem; }
    }
</style>

<section class="legal-container">
    <div class="page-header">
        <h1>Documentos Legais</h1>
        <p>Última revisão: <strong>13 de Novembro de 2025</strong></p>
    </div>

    <!-- Cards de Acesso Rápido -->
    <div class="services-grid">
        <div class="service-card" onclick="openDoc('eula')">
            <div class="service-icon">Mobile</div>
            <h3>EULA - App Móvel</h3>
            <p>Contrato de Licença de Utilizador Final</p>
        </div>
        <div class="service-card" onclick="openDoc('website')">
            <div class="service-icon">Document</div>
            <h3>Termos do Website</h3>
            <p>Regras de uso do site institucional</p>
        </div>
        <div class="service-card" onclick="openDoc('saas')">
            <div class="service-icon">Cloud</div>
            <h3>Termos do SaaS</h3>
            <p>Sistema de Gestão em Nuvem</p>
        </div>
        <div class="service-card" onclick="openDoc('privacidade')">
            <div class="service-icon">Lock</div>
            <h3>Política de Privacidade</h3>
            <p>Proteção total dos seus dados</p>
        </div>
    </div>

    <!-- Documentos com Preview Markdown -->
    <div id="documents-container">
        <!-- EULA -->
        <div class="doc-section" id="doc-eula">
            <div class="doc-header" onclick="toggleDoc('eula')">
                <span>Contrato de Licença de Utilizador Final (EULA) da Aplicação Móvel</span>
                <span class="toggle">−</span>
            </div>
            <div class="doc-content active" id="content-eula">
                <article class="markdown-body">
                    <?php
                    $eula = file_get_contents('documents/Contrato_de_Licença_de_Utilizador_Final_(EULA)_da_.md');
                    echo htmlspecialchars($eula); // será renderizado pelo JS
                    ?>
                </article>
            </div>
        </div>

        <!-- Termos Website -->
        <div class="doc-section" id="doc-website">
            <div class="doc-header" onclick="toggleDoc('website')">
                <span>Termos de Uso do Website Institucional</span>
                <span class="toggle">−</span>
            </div>
            <div class="doc-content" id="content-website">
                <article class="markdown-body">
                    <?php
                    $website = file_get_contents('documents/Termos_de_Uso_do_Website_Institucional_da_MEFEMA_S.md');
                    echo htmlspecialchars($website);
                    ?>
                </article>
            </div>
        </div>

        <!-- Termos SaaS -->
        <div class="doc-section" id="doc-saas">
            <div class="doc-header" onclick="toggleDoc('saas')">
                <span>Termos de Uso do Sistema de Gestão (SaaS)</span>
                <span class="toggle">−</span>
            </div>
            <div class="doc-content" id="content-saas">
                <article class="markdown-body">
                    <?php
                    $saas = file_get_contents('documents/Termos_de_Uso_do_Sistema_de_Gestão_(SaaS)_da_MEFEM.md');
                    echo htmlspecialchars($saas);
                    ?>
                </article>
            </div>
        </div>

        <!-- Política de Privacidade -->
        <div class="doc-section" id="doc-privacidade">
            <div class="doc-header" onclick="toggleDoc('privacidade')">
                <span>Política de Privacidade</span>
                <span class="toggle">−</span>
            </div>
            <div class="doc-content" id="content-privacidade">
                <article class="markdown-body">
                    <?php
                    $privacy = file_get_contents('documents/Política_de_Privacidade_da_MEFEMA_Systems,_LDA.md');
                    echo htmlspecialchars($privacy);
                    ?>
                </article>
            </div>
        </div>
    </div>

    <div class="back-to-top">
        <p><a href="#">↑ Voltar ao topo</a></p>
        <p style="font-size: 0.9rem; color: #666; margin-top: 1rem;">
            MEFEMA Systems, LDA | Maputo, Moçambique<br>
            NUIT: [Inserir] | Contacto: [Inserir e-mail]
        </p>
    </div>
</section>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/marked/marked.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/highlight.js@11.9.0/lib/highlight.min.js"></script>

<script>
    // Configuração do marked
    marked.setOptions({
        highlight: function(code, lang) {
            if (lang && hljs.getLanguage(lang)) {
                return hljs.highlight(code, { language: lang }).value;
            }
            return hljs.highlightAuto(code).value;
        },
        breaks: true,
        gfm: true
    });

    // Renderiza todos os artigos .markdown-body
    function renderMarkdown() {
        document.querySelectorAll('.markdown-body').forEach(article => {
            const raw = article.innerHTML;
            article.innerHTML = marked.parse(raw);
            article.classList.add('markdown-preview');
        });
    }

    // Toggle de documentos
    function toggleDoc(id) {
        const content = document.getElementById('content-' + id);
        const toggle = document.querySelector(`#doc-${id} .toggle`);
        const isActive = content.classList.contains('active');

        // Fecha todos
        document.querySelectorAll('.doc-content').forEach(c => c.classList.remove('active'));
        document.querySelectorAll('.doc-header .toggle').forEach(t => t.textContent = '+');

        // Abre o clicado (se não estava ativo)
        if (!isActive) {
            content.classList.add('active');
            toggle.textContent = '−';
        }
    }

    // Abre documento específico
    function openDoc(id) {
        toggleDoc(id);
        document.getElementById('doc-' + id).scrollIntoView({ behavior: 'smooth' });
    }

    // Inicialização
    document.addEventListener('DOMContentLoaded', () => {
        renderMarkdown();
        // Abre o primeiro por padrão
        document.getElementById('content-eula').classList.add('active');
        document.querySelector('#doc-eula .toggle').textContent = '−';
    });
</script>

<?php include 'includes/footer.php'; ?>
