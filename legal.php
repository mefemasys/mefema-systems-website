<?php $pageTitle = "Documentos Legais - MEFEMA Systems"; ?>
<?php include 'includes/header.php'; ?>

<style>
    .legal-docs { max-width: 1000px; margin: 0 auto; padding: 2rem; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.7; }
    .doc-section { margin-bottom: 3rem; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.05); }
    .doc-header { background: #003087; color: white; padding: 1rem 1.5rem; font-weight: 600; font-size: 1.1rem; }
    .doc-content { padding: 2rem; background: #f9f9f9; display: none; }
    .doc-content.active { display: block; }
    .toggle-btn { background: none; border: none; color: white; font-size: 1.2rem; float: right; cursor: pointer; }
    .back-to-top { text-align: center; margin: 2rem 0; }
    .back-to-top a { color: #003087; text-decoration: none; font-weight: 500; }
    h1, h2, h3, h4 { color: #003087; }
    table { width: 100%; border-collapse: collapse; margin: 1rem 0; }
    table, th, td { border: 1px solid #ccc; }
    th, td { padding: 0.8rem; text-align: left; }
    th { background-color: #f0f0f0; }
    .highlight { background-color: #fff8e1; padding: 0.2rem 0.4rem; border-radius: 4px; }
</style>

<section id="legal" class="legal-docs">
    <h1 style="text-align: center; margin-bottom: 2.5rem; color: #003087;">Documentos Legais da MEFEMA Systems, LDA</h1>
    <p style="text-align: center; color: #555; margin-bottom: 3rem;">
        Última revisão: <strong>13 de Novembro de 2025</strong> | Versão: <strong>1.0</strong> (excepto Política de Privacidade v2.0)
    </p>

    <!-- Ícones de Acesso Rápido -->
    <div class="services-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem; margin-bottom: 3rem;">
        <div class="service-card" onclick="openDoc('eula')">
            <div class="service-icon">📱</div>
            <h3>EULA - App Móvel</h3>
            <p>Licença de uso da aplicação móvel</p>
        </div>
        <div class="service-card" onclick="openDoc('website')">
            <div class="service-icon">🌐</div>
            <h3>Termos do Website</h3>
            <p>Regras de uso do site institucional</p>
        </div>
        <div class="service-card" onclick="openDoc('saas')">
            <div class="service-icon">☁️</div>
            <h3>Termos do SaaS</h3>
            <p>Condições do sistema de gestão</p>
        </div>
        <div class="service-card" onclick="openDoc('privacidade')">
            <div class="service-icon">🔒</div>
            <h3>Política de Privacidade</h3>
            <p>Proteção dos seus dados</p>
        </div>
    </div>

    <!-- Documento 1: EULA -->
    <div class="doc-section" id="doc-eula">
        <div class="doc-header">
            Contrato de Licença de Utilizador Final (EULA) da Aplicação Móvel
            <button class="toggle-btn" onclick="toggleDoc('eula')">−</button>
        </div>
        <div class="doc-content active" id="content-eula">
            <?php include 'documents/Contrato_de_Licença_de_Utilizador_Final_(EULA)_da_.md'; ?>
        </div>
    </div>

    <!-- Documento 2: Termos Website -->
    <div class="doc-section" id="doc-website">
        <div class="doc-header">
            Termos de Uso do Website Institucional
            <button class="toggle-btn" onclick="toggleDoc('website')">−</button>
        </div>
        <div class="doc-content" id="content-website">
            <?php include 'documents/Termos_de_Uso_do_Website_Institucional_da_MEFEMA_S.md'; ?>
        </div>
    </div>

    <!-- Documento 3: Termos SaaS -->
    <div class="doc-section" id="doc-saas">
        <div class="doc-header">
            Termos de Uso do Sistema de Gestão (SaaS)
            <button class="toggle-btn" onclick="toggleDoc('saas')">−</button>
        </div>
        <div class="doc-content" id="content-saas">
            <?php include 'documents/Termos_de_Uso_do_Sistema_de_Gestão_(SaaS)_da_MEFEM.md'; ?>
        </div>
    </div>

    <!-- Documento 4: Política de Privacidade -->
    <div class="doc-section" id="doc-privacidade">
        <div class="doc-header">
            Política de Privacidade
            <button class="toggle-btn" onclick="toggleDoc('privacidade')">−</button>
        </div>
        <div class="doc-content" id="content-privacidade">
            <?php include 'documents/Política_de_Privacidade_da_MEFEMA_Systems,_LDA.md'; ?>
        </div>
    </div>

    <div class="back-to-top">
        <p><a href="#">↑ Voltar ao topo</a></p>
        <p style="font-size: 0.9rem; color: #666;">
            MEFEMA Systems, LDA<br>
            Maputo, Moçambique | NUIT: [Inserir] | Contacto: [Inserir e-mail]
        </p>
    </div>
</section>

<script>
function openDoc(id) {
    document.querySelectorAll('.doc-content').forEach(c => c.classList.remove('active'));
    document.getElementById('content-' + id).classList.add('active');
    document.getElementById('doc-' + id).scrollIntoView({ behavior: 'smooth' });
}

function toggleDoc(id) {
    const content = document.getElementById('content-' + id);
    const btn = document.querySelector(`#doc-${id} .toggle-btn`);
    if (content.classList.contains('active')) {
        content.classList.remove('active');
        btn.textContent = '+';
    } else {
        document.querySelectorAll('.doc-content').forEach(c => c.classList.remove('active'));
        content.classList.add('active');
        btn.textContent = '−';
    }
}

// Abrir primeiro documento por padrão
document.addEventListener("DOMContentLoaded", () => {
    document.getElementById('content-eula').classList.add('active');
});
</script>

<?php include 'includes/footer.php'; ?>
