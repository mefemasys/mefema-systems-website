<section class="section-py" id="portfolioCTA">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8 text-center">
        <h2 class="fw-bold mb-4">Tem um Projeto em Mente?</h2>
        <p class="text-muted mb-5">
          Vimos que temos experiência em diversos sectores e tecnologias. Vamos trabalhar juntos para transformar a sua ideia em realidade.
        </p>
        <div class="d-flex gap-3 justify-content-center flex-wrap">
          <a href="#landingContact" class="btn btn-primary btn-lg">
            <i class="ri-mail-line me-2"></i>Solicitar Orçamento
          </a>
          <a href="tel:+258840000000" class="btn btn-outline-primary btn-lg">
            <i class="ri-phone-line me-2"></i>Ligar Agora
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  /* ================================
     NOVOS GRADIENTES POR COR
  ================================= */

  /* Azul */
  .bg-gradient-azul {
    background: linear-gradient(135deg, #007BFF 0%, #0056D2 100%) !important;
  }
  .text-gradient-azul {
    color: #007BFF !important;
  }
  .border-gradient-azul {
    border-color: #007BFF !important;
  }

  /* Laranja */
  .bg-gradient-laranja {
    background: linear-gradient(135deg, #FF8A00 0%, #FF6A00 100%) !important;
  }
  .text-gradient-laranja {
    color: #FF8A00 !important;
  }
  .border-gradient-laranja {
    border-color: #FF8A00 !important;
  }

  /* Verde */
  .bg-gradient-verde {
    background: linear-gradient(135deg, #10B981 0%, #059669 100%) !important;
  }
  .text-gradient-verde {
    color: #10B981 !important;
  }
  .border-gradient-verde {
    border-color: #10B981 !important;
  }

  /* Castanho */
  .bg-gradient-castanho {
    background: linear-gradient(135deg, #8B5A2B 0%, #5C3C1B 100%) !important;
  }
  .text-gradient-castanho {
    color: #8B5A2B !important;
  }
  .border-gradient-castanho {
    border-color: #8B5A2B !important;
  }


  /* =========================================
     OS ESTILOS QUE VOCÊ JÁ TINHA (sem mudar)
     ========================================= */

  .carousel-item {
    padding: 3rem 0;
  }

  .carousel-control-prev,
  .carousel-control-next {
    width: auto;
    height: auto;
    top: 50%;
    transform: translateY(-50%);
    background: none;
    border: none;
    opacity: 1;
  }

  .carousel-control-prev-icon,
  .carousel-control-next-icon {
    width: 3rem;
    height: 3rem;
    background-color: rgba(0, 0, 0, 0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .carousel-control-prev:hover .carousel-control-prev-icon,
  .carousel-control-next:hover .carousel-control-next-icon {
    background-color: rgba(0, 0, 0, 0.4);
  }

  .portfolio-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .portfolio-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 1rem 3rem rgba(0, 0, 0, 0.15) !important;
  }

  .filter-btn {
    transition: all 0.3s ease;
  }

  .filter-btn.active {
    background-color: #007BFF; /* Azul – pode trocar pela cor da categoria */
    color: white;
    border-color: #007BFF;
  }

  .portfolio-item {
    animation: fadeIn 0.5s ease;
  }

  @keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
  }

  .portfolio-item.hidden {
    display: none;
  }
</style>


<script>
  // Filtro de Projetos por Categoria
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function() {
      const filter = this.getAttribute('data-filter');
      
      // Atualizar botão ativo
      document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      // Filtrar projetos
      document.querySelectorAll('.portfolio-item').forEach(item => {
        const category = item.getAttribute('data-category');
        
        if (filter === 'all' || category === filter) {
          item.classList.remove('hidden');
          item.style.display = 'block';
        } else {
          item.classList.add('hidden');
          item.style.display = 'none';
        }
      });
    });
  });
</script>