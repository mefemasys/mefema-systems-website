/**
 * Main - Front Pages
 */
'use strict';

(function () {
    const sliderPricing = document.getElementById('slider-pricing'),
        swiperLogos = document.getElementById('swiper-clients-logos'),
        swiperReviews = document.getElementById('swiper-reviews');

    // Hero
    const mediaQueryXL = '1200';
    const width = screen.width;
    if (width >= mediaQueryXL) {
        document.addEventListener('mousemove', function parallax(e) {
            this.querySelectorAll('.animation-img').forEach(layer => {
                let speed = layer.getAttribute('data-speed');
                let x = (window.innerWidth - e.pageX * speed) / 100;
                let y = (window.innerWidth - e.pageY * speed) / 100;
                layer.style.transform = `translate(${x}px, ${y}px)`;
            });
        });
    }

    // noUiSlider
    // Pricing slider
    // -----------------------------------
    if (sliderPricing) {
        noUiSlider.create(sliderPricing, {
            start: [458],
            step: 1,
            connect: [true, false],
            behaviour: 'tap-drag',
            direction: isRtl ? 'rtl' : 'ltr',
            tooltips: [
                {
                    to: function (value) {
                        return parseFloat(value).toLocaleString('en-EN', {minimumFractionDigits: 0}) + '+';
                    }
                }
            ],
            range: {
                min: 0,
                max: 916
            }
        });
    }

    // swiper carousel
    // Customers reviews
    // -----------------------------------
    if (swiperReviews) {
        new Swiper(swiperReviews, {
            slidesPerView: 1,
            spaceBetween: 5,
            centeredSlides: true,
            grabCursor: true,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            loop: true,
            loopAdditionalSlides: 1,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            breakpoints: {
                992: {
                    slidesPerView: 4,
                    spaceBetween: 24
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 24
                }
            }
        });
    }

    // Review client logo
    // -----------------------------------
    if (swiperLogos) {
        new Swiper(swiperLogos, {
            slidesPerView: 2,
            autoplay: {
                delay: 3000,
                disableOnInteraction: false
            },
            breakpoints: {
                992: {
                    slidesPerView: 5
                },
                768: {
                    slidesPerView: 3
                }
            }
        });
    }
})();

  (function() {
  "use strict";

  // Elementos
  const themeBtn = document.getElementById("themeToggleBtn");
  const themeIcon = document.getElementById("themeIcon");

  // Mapeamento: tema → ícone
  const themeIcons = {
  system: "ri-computer-line", // Mantido para referência, mas não será ciclado
  light: "ri-sun-line",
  dark: "ri-moon-clear-line",
};

  // *** MODIFICAÇÃO: Apenas 'light' e 'dark' são temas válidos para ciclo e inicialização ***
  const validThemes = ["light", "dark"];
  let currentTheme = "light"; // Define um valor padrão que não seja 'system'

  // Obtém tema do sistema (não é mais usado para definir o tema inicial/ciclo)
  function getSystemTheme() {
  return window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
}

  // Aplica tema
  function applyTheme(theme) {
  // Se tentar aplicar 'system', forçamos para o padrão ou um válido
  const themeToApply = theme === "system" ? "light" : theme;

  currentTheme = themeToApply;
  const appliedTheme = themeToApply; // O tema aplicado é o próprio themeToApply ('light' ou 'dark')

  // Aplica ao HTML
  document.documentElement.setAttribute("data-bs-theme", appliedTheme);

  // Atualiza ícone: usa o ícone do tema aplicado ('light' ou 'dark')
  // Se por algum motivo 'system' for passado, cai no light (ou você pode preferir o ícone 'dark')
  const iconKey = themeToApply;
  themeIcon.className = `icon-base ri ${themeIcons[iconKey]} icon-24px`;


  // Salva no localStorage
  const layoutName = document.documentElement.getAttribute("data-template");
  if (layoutName) {
  try {
  // Salva apenas 'light' ou 'dark'
  localStorage.setItem(`templateCustomizer-${layoutName}--Theme`, currentTheme);
} catch (e) {
  console.warn("Erro ao salvar tema:", e);
}
}

  // Atualiza imagens sensíveis ao tema
  updateThemeImages(appliedTheme);

  // Sincroniza com Helpers (se existir)
  if (window.Helpers?.syncThemeToggles) {
  window.Helpers.syncThemeToggles(appliedTheme);
}
}

  // Atualiza imagens com data-app-light/dark-img
  function updateThemeImages(theme) {
  document.querySelectorAll("[data-app-light-img][data-app-dark-img]").forEach(img => {
  const lightImg = img.getAttribute("data-app-light-img");
  const darkImg = img.getAttribute("data-app-dark-img");
  img.src = theme === "dark" && darkImg
  ? `assets/img/${darkImg}`
  : `assets/img/${lightImg}`;
});
}

  // Cicla para o próximo tema
  function cycleTheme() {
  // *** MODIFICAÇÃO CHAVE: Apenas 'light' e 'dark' ***
  const themes = validThemes;
  const currentIndex = themes.indexOf(currentTheme);

  // Se o currentTheme for 'system' ou inválido por algum motivo,
  // ele vai para 'light' (índice 0).
  const nextIndex = (currentIndex === -1 || currentIndex === 1) ? 0 : 1;

  applyTheme(themes[nextIndex]);
}

  // Carrega tema salvo ou usa 'light'
  function initTheme() {
  const layoutName = document.documentElement.getAttribute("data-template");
  let saved = "light"; // Padrão se nada for salvo
  if (layoutName) {
  try {
  const savedTheme = localStorage.getItem(`templateCustomizer-${layoutName}--Theme`);
  // Se o tema salvo for válido ('light' ou 'dark'), usa ele. Senão, usa 'light'.
  if (savedTheme && validThemes.includes(savedTheme)) {
  saved = savedTheme;
}
} catch (e) {
}
}
  applyTheme(saved);
}

  // Listener para mudanças no tema do sistema (Removido ou Inutilizado)
  // Esta função não é mais relevante pois o tema 'system' foi removido do ciclo.
  function setupSystemListener() {
  // Pode ser removida ou deixada vazia, pois não precisamos mais reagir
  // à mudança do tema do sistema se não vamos usá-lo.
}

  // Inicialização
  function init() {
  if (!themeBtn || !themeIcon) return;

  themeBtn.addEventListener("click", cycleTheme);
  initTheme();
  // setupSystemListener(); // Opcional: remover esta chamada
}

  // Executa quando DOM estiver pronto
  document.readyState === "loading"
  ? document.addEventListener("DOMContentLoaded", init)
  : init();
})();


