#!/usr/bin/env bash

# Pasta de destino (relativa à raiz do projeto)
DEST_DIR="assets/img/websites"
mkdir -p "$DEST_DIR"

cd "$DEST_DIR" || { echo "Erro: não foi possível entrar em $DEST_DIR"; exit 1; }

echo "Downloading real website page screenshots/mockups..."
echo "Destino: $(pwd)"
echo ""

# Básico - Website Essencial (clean small business pages with menu/buttons)
wget -O essencial-home.jpg     "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer.jpg.webp"     # header + hero + menu
wget -O essencial-sobre.jpg    "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer-2.jpg.webp"   # about/services section
wget -O essencial-contacto.jpg "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer-3.jpg.webp"   # contact-like layout

# Profissional - Website Empresarial (corporate with services/portfolio/blog)
wget -O empresarial-home.jpg     "https://www.mrandmrsleads.com/wp-content/uploads/2025/02/Web-Design-Colorado-Springs-scaled.webp"   # full homepage
wget -O empresarial-servicos.jpg "https://kelleycreate.com/wp-content/uploads/2019/12/portfolio-web-luna-cafe.png"                   # services/interior page
wget -O empresarial-portfolio.jpg "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer-5.jpg.webp" # portfolio style
wget -O empresarial-blog.jpg     "https://liveyourmessage.com/wp-content/uploads/2021/07/website-blog-header-pdf.jpg"               # blog/news section

# Marketing - Landing Page Conversão (hero + features + CTA heavy)
wget -O landing-hero.jpg    "https://liveyourmessage.com/wp-content/uploads/2021/07/website-blog-header-pdf.jpg"               # strong hero + CTA
wget -O landing-features.jpg "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer-2.jpg.webp"   # features/buttons
wget -O landing-cta.jpg     "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer.jpg.webp"     # CTA/form focus

# Loja Online - E-commerce Starter (products + cart + checkout)
wget -O ecommerce-home.jpg     "https://www.sitesnstores.com.au/wp-content/uploads/0.-Best-Practices-for-Ecommerce-Website-Design-Development-scaled.jpg"   # shop homepage
wget -O ecommerce-produtos.jpg "https://www.sitesnstores.com.au/wp-content/uploads/03.-Your-Ecommerce-Success-Starts-Here-scaled.jpg"               # product grid
wget -O ecommerce-carrinho.jpg "https://lirp.cdn-website.com/53d6ba3a/dms3rep/multi/opt/templates-a64ebd7a-1920w.png"                               # cart/products
wget -O ecommerce-checkout.jpg "https://www.sitesnstores.com.au/wp-content/uploads/0.-Best-Practices-for-Ecommerce-Website-Design-Development-scaled.jpg" # checkout style

# Restaurante (menu + gallery + home)
wget -O restaurante-home.jpg   "https://kelleycreate.com/wp-content/uploads/2019/12/portfolio-web-luna-cafe.png"                   # restaurant-style home
wget -O restaurante-menu.jpg   "https://liveandletsfly.com/wp-content/uploads/2024/09/United-Airlines-Digital-Menu-02.jpg"         # digital menu example
wget -O restaurante-galeria.jpg "https://trustmedia.io/wp-content/uploads/2025/09/8a654bc5-06f6-4e97-9ef9-1f1c1519724a-1.jpg"   # food gallery/menu

# Hotel & Turismo (rooms + gallery + booking)
wget -O hotel-home.jpg     "https://otsegoclub.com/wp-content/uploads/2025/10/tyrol.jpg"               # hotel home/booking
wget -O hotel-quartos.jpg  "https://otsegoclub.com/wp-content/uploads/2025/10/tyrol-gal-12.jpg.webp"   # rooms/gallery
wget -O hotel-galeria.jpg  "https://otsegoclub.com/wp-content/uploads/2025/10/loft-gal-14.jpg.webp"    # facilities/gallery

# Clínica & Saúde (services + team + home) – usei placeholders semelhantes
wget -O clinica-home.jpg     "https://www.mrandmrsleads.com/wp-content/uploads/2025/02/Web-Design-Colorado-Springs-scaled.webp"   # clean professional home
wget -O clinica-servicos.jpg "https://kelleycreate.com/wp-content/uploads/2019/12/portfolio-web-luna-cafe.png"                   # services
wget -O clinica-equipa.jpg   "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer-5.jpg.webp" # team/about

# Advocacia (serious corporate)
wget -O advocacia-home.jpg   "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer.jpg.webp"
wget -O advocacia-areas.jpg  "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer-2.jpg.webp"
wget -O advocacia-equipa.jpg "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer-3.jpg.webp"

# Consultoria (professional services)
wget -O consultoria-home.jpg     "https://www.mrandmrsleads.com/wp-content/uploads/2025/02/Web-Design-Colorado-Springs-scaled.webp"
wget -O consultoria-servicos.jpg "https://liveyourmessage.com/wp-content/uploads/2021/07/website-blog-header-pdf.jpg"
wget -O consultoria-casos.jpg    "https://www.newmanwebsolutions.com/wp-content/uploads/2024/02/website-header-and-footer-5.jpg.webp"

# Agência Viagens (destinations + packages)
wget -O viagens-home.jpg      "https://otsegoclub.com/wp-content/uploads/2025/10/tyrol.jpg"               # travel-style home
wget -O viagens-destinos.jpg  "https://otsegoclub.com/wp-content/uploads/2025/10/tyrol-gal-12.jpg.webp"   # destinations/gallery
wget -O viagens-pacotes.jpg   "https://otsegoclub.com/wp-content/uploads/2025/10/loft-gal-14.jpg.webp"    # packages/booking

echo ""
echo "Download finalizado! Verifica os ficheiros:"
ls -la
echo ""
echo "Dica: abre o site no browser e recarrega (Ctrl+F5) para ver as imagens novas."