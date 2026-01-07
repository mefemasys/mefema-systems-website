<!-- Contact Us: Start -->
<section class="section-py landing-contact" id="landingContact">
    <div class="container position-relative">
        
        <!-- Cabeçalho da Secção -->
        <div class="text-center mb-5 pb-3">
            <div class="contact-badge mx-auto mb-4">
                <span class="badge-icon">✉</span>
                <span class="badge-text">CONTACTE-NOS</span>
            </div>
            <h2 class="contact-title mb-4">
                Vamos Trabalhar<br>
                <span class="text-gradient">Juntos</span>
            </h2>
            <p class="contact-subtitle mx-auto">
                Tem alguma dúvida ou sugestão? Estamos prontos para transformar as suas ideias em realidade
            </p>
        </div>

        <!-- Grid Principal -->
        <div class="row g-4 justify-content-center">
            
            <!-- Informações de Contacto -->
            <div class="col-lg-4">
                <div class="contact-info-wrapper">
                    
                    <!-- Email -->
                    <div class="contact-info-card">
                        <div class="info-icon-wrapper">
                            <div class="info-icon email-icon">
                                <i class="ri-mail-line"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <h6 class="info-title">Email</h6>
                            <a href="mailto:comercial@mefemasys.co.mz" class="info-link">comercial@mefemasys.co.mz</a>
                        </div>
                    </div>

                    <!-- Telefone -->
                    <div class="contact-info-card">
                        <div class="info-icon-wrapper">
                            <div class="info-icon phone-icon">
                                <i class="ri-phone-line"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <h6 class="info-title">Telefone</h6>
                            <a href="tel:+258 86 192 4050" class="info-link">+258 86 192 4050</a>
                        </div>
                    </div>

                    <!-- Localização -->
                    <div class="contact-info-card">
                        <div class="info-icon-wrapper">
                            <div class="info-icon location-icon">
                                <i class="ri-map-pin-line"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <h6 class="info-title">Localização</h6>
                            <p class="info-text">Pemba, Moçambique</p>
                        </div>
                    </div>

                    <!-- Horário -->
                    <div class="contact-info-card">
                        <div class="info-icon-wrapper">
                            <div class="info-icon time-icon">
                                <i class="ri-time-line"></i>
                            </div>
                        </div>
                        <div class="info-content">
                            <h6 class="info-title">Horário</h6>
                            <p class="info-text">Seg - Sex: 9h - 16:30h</p>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Formulário de Contacto -->
            <div class="col-lg-8">
                <div class="contact-form-card">
                    <div class="form-header">
                        <h5 class="form-title">Partilhe as Suas Ideias</h5>
                        <p class="form-subtitle">Preencha o formulário e entraremos em contacto brevemente</p>
                    </div>
                    
                    <form class="contact-form">
                        <div class="row g-4">
                            
                            <!-- Nome -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-name" class="form-label">
                                        <i class="ri-user-line me-2"></i>Nome Completo
                                    </label>
                                    <input 
                                        type="text" 
                                        class="form-control form-control-modern" 
                                        id="contact-name" 
                                        placeholder="João Silva"
                                        required>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-email" class="form-label">
                                        <i class="ri-mail-line me-2"></i>Endereço de Email
                                    </label>
                                    <input 
                                        type="email" 
                                        class="form-control form-control-modern" 
                                        id="contact-email" 
                                        placeholder="seu.email@empresa.co.mz"
                                        required>
                                </div>
                            </div>

                            <!-- Telefone -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-phone" class="form-label">
                                        <i class="ri-phone-line me-2"></i>Telefone
                                    </label>
                                    <input 
                                        type="tel" 
                                        class="form-control form-control-modern" 
                                        id="contact-phone" 
                                        placeholder="+258 84 000 0000">
                                </div>
                            </div>

                            <!-- Assunto -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="contact-subject" class="form-label">
                                        <i class="ri-bookmark-line me-2"></i>Assunto
                                    </label>
                                    <select class="form-control form-control-modern" id="contact-subject" required>
                                        <option value="">Seleccione um assunto</option>
                                        <option value="desenvolvimento">Desenvolvimento de Software</option>
                                        <option value="infraestrutura">Infraestrutura de TI</option>
                                        <option value="consultoria">Consultoria Digital</option>
                                        <option value="formacao">Formação Corporativa</option>
                                        <option value="suporte">Suporte Técnico</option>
                                        <option value="outro">Outro</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Mensagem -->
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="contact-message" class="form-label">
                                        <i class="ri-message-3-line me-2"></i>Mensagem
                                    </label>
                                    <textarea 
                                        class="form-control form-control-modern" 
                                        id="contact-message" 
                                        rows="6" 
                                        placeholder="Descreva a sua necessidade ou projeto..."
                                        required></textarea>
                                </div>
                            </div>

                            <!-- Botão Submit -->
                            <div class="col-12">
                                <button type="submit" class="btn-submit">
                                    <span class="btn-text">Enviar Mensagem</span>
                                    <i class="ri-send-plane-fill btn-icon"></i>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
/* ========================================
   VARIÁVEIS CONTACTO
   ======================================== */

:root {
    --contact-primary: #d97638;
    --contact-secondary: #c66b3d;
    
    --contact-bg: #fdf9f6;
    --contact-card-bg: #fffdfb;
    --contact-text: #5a3a28;
    --contact-text-secondary: #74523d;
    --contact-text-muted: #8a6850;
    --contact-border: rgba(217, 118, 56, 0.35);
    --contact-input-bg: #ffffff;
    
    --contact-shadow: rgba(217, 118, 56, 0.08);
    --contact-shadow-hover: rgba(217, 118, 56, 0.15);
}

@media (prefers-color-scheme: dark) {
    :root {
        --contact-primary: #ff8c4a;
        --contact-secondary: #ffa366;
        
        --contact-bg: #1a1410;
        --contact-card-bg: #2a1f1a;
        --contact-text: #f5ede6;
        --contact-text-secondary: #d4c5b8;
        --contact-text-muted: #9a8d82;
        --contact-border: rgba(255, 140, 74, 0.15);
        --contact-input-bg: #1f1814;
        
        --contact-shadow: rgba(0, 0, 0, 0.3);
        --contact-shadow-hover: rgba(255, 140, 74, 0.25);
    }
}

[data-bs-theme="light"] {
    --contact-bg: #fdf9f6;
    --contact-card-bg: #fffdfb;
    --contact-input-bg: #ffffff;
}

[data-bs-theme="dark"] {
    --contact-bg: #1a1410;
    --contact-card-bg: #2a1f1a;
    --contact-input-bg: #1f1814;
}

/* ========================================
   SECÇÃO PRINCIPAL
   ======================================== */

.landing-contact {
    background: var(--contact-bg);
    position: relative;
}

/* ========================================
   CABEÇALHO
   ======================================== */

.contact-badge {
    display: inline-flex;
    align-items: center;
    gap: 0.75rem;
    padding: 0.75rem 1.5rem;
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.1), rgba(184, 95, 48, 0.08));
    border: 1px solid var(--contact-border);
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.badge-icon {
    color: var(--contact-primary);
    font-size: 1.25rem;
    animation: badgePulse 2s ease-in-out infinite;
}

.badge-text {
    color: var(--contact-primary);
    font-weight: 600;
    font-size: 0.875rem;
    letter-spacing: 1.5px;
}

.contact-title {
    font-size: 2.5rem;
    font-weight: 700;
    color: var(--contact-text);
    line-height: 1.2;
}

.text-gradient {
    background: linear-gradient(135deg, var(--contact-primary), var(--contact-secondary));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
}

.contact-subtitle {
    max-width: 700px;
    font-size: 1.1rem;
    color: var(--contact-text-muted);
    line-height: 1.7;
}

/* ========================================
   INFORMAÇÕES DE CONTACTO
   ======================================== */

.contact-info-wrapper {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.contact-info-card {
    background: var(--contact-card-bg);
    border-radius: 8px;
    padding: 1.5rem;
    border: 1px solid var(--contact-border);
    display: flex;
    align-items: center;
    gap: 1.25rem;
    transition: all 0.3s ease;
}

.contact-info-card:hover {
    transform: translateX(8px);
    box-shadow: 0 8px 24px var(--contact-shadow-hover);
}

.info-icon-wrapper {
    flex-shrink: 0;
}

.info-icon {
    width: 56px;
    height: 56px;
    border-radius: 8px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.75rem;
    transition: all 0.3s ease;
}

.contact-info-card:hover .info-icon {
    transform: scale(1.1) rotate(-5deg);
}

.email-icon {
    background: linear-gradient(135deg, rgba(217, 118, 56, 0.15), rgba(217, 118, 56, 0.05));
    color: var(--contact-primary);
}

.phone-icon {
    background: linear-gradient(135deg, rgba(25, 135, 84, 0.15), rgba(25, 135, 84, 0.05));
    color: #198754;
}

.location-icon {
    background: linear-gradient(135deg, rgba(13, 202, 240, 0.15), rgba(13, 202, 240, 0.05));
    color: #0dcaf0;
}

.time-icon {
    background: linear-gradient(135deg, rgba(255, 193, 7, 0.15), rgba(255, 193, 7, 0.05));
    color: #ffc107;
}

.info-content {
    flex-grow: 1;
}

.info-title {
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--contact-text-muted);
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 0.5rem;
}

.info-link {
    font-size: 1rem;
    font-weight: 600;
    color: var(--contact-text);
    text-decoration: none;
    transition: color 0.3s ease;
}

.info-link:hover {
    color: var(--contact-primary);
}

.info-text {
    font-size: 1rem;
    color: var(--contact-text-secondary);
    margin: 0;
}

/* ========================================
   FORMULÁRIO DE CONTACTO
   ======================================== */

.contact-form-card {
    background: var(--contact-card-bg);
    border-radius: 12px;
    padding: 2.5rem;
    border: 1px solid var(--contact-border);
    box-shadow: 0 4px 24px var(--contact-shadow);
}

.form-header {
    margin-bottom: 2rem;
    padding-bottom: 1.5rem;
    border-bottom: 1px solid var(--contact-border);
}

.form-title {
    font-size: 1.5rem;
    font-weight: 600;
    color: var(--contact-text);
    margin-bottom: 0.5rem;
}

.form-subtitle {
    font-size: 0.95rem;
    color: var(--contact-text-muted);
    margin: 0;
}

.form-group {
    position: relative;
}

.form-label {
    display: flex;
    align-items: center;
    font-size: 0.875rem;
    font-weight: 600;
    color: var(--contact-text-secondary);
    margin-bottom: 0.75rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.form-label i {
    color: var(--contact-primary);
}

.form-control-modern {
    width: 100%;
    padding: 0.875rem 1.25rem;
    font-size: 1rem;
    color: var(--contact-text);
    background: var(--contact-input-bg);
    border: 1px solid var(--contact-border);
    border-radius: 8px;
    transition: all 0.3s ease;
}

.form-control-modern:focus {
    outline: none;
    border-color: var(--contact-primary);
    box-shadow: 0 0 0 3px rgba(217, 118, 56, 0.1);
    background: var(--contact-card-bg);
}

.form-control-modern::placeholder {
    color: var(--contact-text-muted);
    opacity: 0.6;
}

textarea.form-control-modern {
    resize: vertical;
    min-height: 150px;
}

select.form-control-modern {
    cursor: pointer;
}

/* ========================================
   BOTÃO SUBMIT
   ======================================== */

.btn-submit {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 0.75rem;
    padding: 1rem 2.5rem;
    font-size: 1rem;
    font-weight: 600;
    color: white;
    background: linear-gradient(135deg, var(--contact-primary), var(--contact-secondary));
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.btn-submit::before {
    content: '';
    position: absolute;
    top: 0;
    left: -100%;
    width: 100%;
    height: 100%;
    background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
    transition: left 0.5s ease;
}

.btn-submit:hover::before {
    left: 100%;
}

.btn-submit:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 24px rgba(217, 118, 56, 0.3);
}

.btn-submit:active {
    transform: translateY(0);
}

.btn-icon {
    font-size: 1.25rem;
    transition: transform 0.3s ease;
}

.btn-submit:hover .btn-icon {
    transform: translateX(5px);
}

/* ========================================
   ANIMAÇÕES
   ======================================== */

@keyframes badgePulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

/* ========================================
   RESPONSIVIDADE
   ======================================== */

@media (max-width: 1199px) {
    .contact-title { font-size: 2rem; }
}

@media (max-width: 991px) {
    .contact-info-wrapper {
        flex-direction: row;
        flex-wrap: wrap;
    }
    
    .contact-info-card {
        flex: 1 1 calc(50% - 0.75rem);
    }
    
    .contact-form-card {
        margin-top: 1rem;
    }
}

@media (max-width: 767px) {
    .contact-title { font-size: 1.75rem; }
    .contact-subtitle { font-size: 1rem; }
    .contact-form-card { padding: 1.75rem; }
    
    .contact-info-card {
        flex: 1 1 100%;
    }
    
    .info-icon {
        width: 48px;
        height: 48px;
        font-size: 1.5rem;
    }
}

@media (max-width: 575px) {
    .badge-text { font-size: 0.75rem; }
    .contact-title { font-size: 1.5rem; }
    .contact-subtitle { font-size: 0.95rem; }
    .contact-form-card { padding: 1.5rem; }
    .btn-submit { width: 100%; }
}

/* ========================================
   MODO DARK
   ======================================== */

@media (prefers-color-scheme: dark) {
    .contact-info-card { box-shadow: 0 2px 12px var(--contact-shadow); }
    .contact-info-card:hover { box-shadow: 0 8px 24px var(--contact-shadow-hover); }
    .contact-form-card { box-shadow: 0 4px 24px var(--contact-shadow); }
    
    .email-icon { background: linear-gradient(135deg, rgba(255, 140, 74, 0.2), rgba(255, 140, 74, 0.08)); }
    .phone-icon { background: linear-gradient(135deg, rgba(117, 183, 152, 0.2), rgba(117, 183, 152, 0.08)); }
    .location-icon { background: linear-gradient(135deg, rgba(49, 210, 242, 0.2), rgba(49, 210, 242, 0.08)); }
    .time-icon { background: linear-gradient(135deg, rgba(255, 202, 44, 0.2), rgba(255, 202, 44, 0.08)); }
}
</style>
<!-- Contact Us: End -->
