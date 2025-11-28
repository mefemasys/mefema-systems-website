<section class="section-py bg-body landing-team" id="landingStrategy">
    <div class="container bg-icon-right position-relative">
        <img alt="section icon" class="position-absolute top-0 end-0"
             data-app-dark-img="icons/bg-right-icon-dark.png"
             data-app-light-img="icons/bg-right-icon-light.png" data-speed="1"
             src="assets/img/icons/bg-right-icon-light.png" />
        
        <h6 class="text-center d-flex justify-content-center align-items-center mb-6">
            <img alt="section title icon" class="me-3" height="24"
                 src="assets/img/icons/section-title-icon.png" />
            <span class="text-uppercase">Nossa Estratégia para Transformação Digital: MEFEMA</span>
        </h6>
        
        <p class="text-center mb-5 lead text-muted">
            Construímos o futuro digital de Moçambique com base em seis pilares essenciais: 
            <strong>M</strong>oderno, <strong>E</strong>specializado, <strong>F</strong>lexível, 
            <strong>E</strong>ficiente, <strong>M</strong>ultifuncional e <strong>A</strong>cessível.
        </p>

        <div class="row gy-4 mt-2 justify-content-center">

            <div class="col-lg-3 col-md-6 col-sm-10">
                <div class="card card-hover-border-primary h-100 shadow-none strategy-card">
                    <div class="card-img-top-wrapper bg-label-primary">
                        <img src="assets/img/landing-page/especializado.png" alt="Especializado e Flexível" class="img-fluid floating-img">
                    </div>
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title mb-2">Especialização Sob Medida</h5>
                        <p class="card-text flex-grow-1">
                            Soluções <strong>Especializadas</strong> e <strong>Flexíveis</strong>. 
                            Escolha um produto <i>pronto a usar</i> ou encomende um sistema exclusivo, 
                            100% personalizado aos seus desafios únicos.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-10">
                <div class="card card-hover-border-success h-100 shadow-none strategy-card">
                    <div class="card-img-top-wrapper bg-label-success">
                        <img src="assets/img/landing-page/moderno.png" alt="Moderno e Eficiente" class="img-fluid floating-img">
                    </div>
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title mb-2">Moderno e Eficiente</h5>
                        <p class="card-text flex-grow-1">
                            Garantimos a sua <strong>Transformação Digital</strong> com tecnologias de ponta. 
                            Sistemas <strong>Modernos</strong> que asseguram a máxima performance, 
                            segurança e <strong>Eficiência</strong> operacional.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-10">
                <div class="card card-hover-border-info h-100 shadow-none strategy-card">
                    <div class="card-img-top-wrapper bg-label-info">
                        <img src="assets/img/landing-page/acessiveis.png" alt="Multifuncional e Acessível" class="img-fluid floating-img">
                    </div>
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title mb-2">Multifuncional e Acessível</h5>
                        <p class="card-text flex-grow-1">
                            Entregamos valor com produtos <strong>Multifuncionais</strong> que se adaptam 
                            ao seu orçamento. Soluções de TI completas (Infraestrutura e Software) 
                            que são <strong>Acessíveis</strong> para PMEs.
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 col-sm-10">
                <div class="card card-hover-border-warning h-100 shadow-none strategy-card">
                    <div class="card-img-top-wrapper bg-label-warning">
                        <img src="assets/img/landing-page/suporte.png" alt="Apoio Completo ao Cliente" class="img-fluid floating-img">
                    </div>
                    <div class="card-body text-center d-flex flex-column">
                        <h5 class="card-title mb-2">Apoio Completo ao Cliente</h5>
                        <p class="card-text flex-grow-1">
                            O nosso foco vai além do código. Oferecemos <strong>Consultoria</strong> 
                            e <strong>Formação</strong> essenciais para garantir a adoção e o sucesso 
                            duradouro da sua equipa com a nova tecnologia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .strategy-card {
        border-radius: 10px;
        overflow: hidden;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        display: flex;
        flex-direction: column;
        justify-content: space-between; /* Para manter o espaçamento entre cards */
    }

    .strategy-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .card-img-top-wrapper {
        min-height: 180px; /* Ajuste conforme a altura desejada para a área da imagem */
        display: flex;
        align-items: center;
        justify-content: center;
        padding-top: 20px; /* Espaço para a imagem "sair" do card */
        position: relative;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05); /* Separador sutil */
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .floating-img {
        max-height: 150px; /* Altura máxima da imagem */
        width: auto;
        display: block;
        position: absolute;
        bottom: -20px; /* Puxa a imagem para baixo para "sair" do card */
        left: 50%;
        transform: translateX(-50%) translateY(-10px); /* Ajuste inicial e um pouco para cima */
        transition: transform 0.3s ease-in-out;
    }

    .strategy-card:hover .floating-img {
        transform: translateX(-50%) translateY(-25px); /* Efeito de "sacar" mais a imagem */
    }

    .card-body {
        padding-top: 30px; /* Espaço para a imagem que invadiu o corpo */
    }

    /* Cores de fundo para as wrappers das imagens */
    .card-hover-border-primary .card-img-top-wrapper {
        background-color: #e0f2f7; /* Um tom mais claro de azul para combinar com o primary */
    }
    .card-hover-border-success .card-img-top-wrapper {
        background-color: #e6faed; /* Um tom mais claro de verde para combinar com o success */
    }
    .card-hover-border-info .card-img-top-wrapper {
        background-color: #e3f7f7; /* Um tom mais claro de ciano para combinar com o info */
    }
    .card-hover-border-warning .card-img-top-wrapper {
        background-color: #fff4e6; /* Um tom mais claro de amarelo para combinar com o warning */
    }
</style>
