#!/usr/bin/env bash

# Pasta de destino (ajusta se necessário)
DEST_DIR="assets/img/websites"
mkdir -p "$DEST_DIR"

cd "$DEST_DIR" || exit 1

echo "A fazer download e renomear imagens para o projeto MEFEMA Systems..."

# Básico - Website Essencial (3 imagens)
wget -O essencial-home.jpg     "https://images.unsplash.com/photo-1460925898913-fffba18a9e09?w=1200"   # clean business home
wget -O essencial-sobre.jpg    "https://images.unsplash.com/photo-1557426272-fc91fdb8f385?w=1200"   # about/services section
wget -O essencial-contacto.jpg "https://images.unsplash.com/photo-1552581401-9b1d641a6e8a?w=1200"   # contact form style

# Profissional - Website Empresarial (4 imagens)
wget -O empresarial-home.jpg     "https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1200"   # corporate home
wget -O empresarial-servicos.jpg "https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=1200"   # services
wget -O empresarial-portfolio.jpg "https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=1200"  # portfolio/cases
wget -O empresarial-blog.jpg     "https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1200" # blog/news

# Marketing - Landing Page Conversão (3 imagens)
wget -O landing-hero.jpg    "https://images.unsplash.com/photo-1556155099-490a1ba16284?w=1200"   # strong hero/CTA
wget -O landing-features.jpg "https://images.unsplash.com/photo-1551288049-b1f4d2e91a2f?w=1200"  # features section
wget -O landing-cta.jpg     "https://images.unsplash.com/photo-1556740714-a8395b3a74dd?w=1200"   # call-to-action/form

# Corporativo - Portal Institucional (4 imagens)
wget -O portal-home.jpg        "https://images.unsplash.com/photo-1554224155-6726b3ff338f?w=1200"   # institutional/government style
wget -O portal-noticias.jpg    "https://images.unsplash.com/photo-1504711434969-e33886168f5c?w=1200" # news/articles
wget -O portal-documentos.jpg  "https://images.unsplash.com/photo-1589829545856-d10d7d1719f8?w=1200" # documents/downloads
wget -O portal-transparencia.jpg "https://images.unsplash.com/photo-1557800636-894a64c1696f?w=1200" # transparency/reports

# Loja Online - E-commerce Starter (4 imagens)
wget -O ecommerce-home.jpg     "https://images.unsplash.com/photo-1574063346896-b98f22e51f1d?w=1200"   # shop home
wget -O ecommerce-produtos.jpg "https://images.unsplash.com/photo-1607082349566-187342771e6f?w=1200"   # product grid
wget -O ecommerce-carrinho.jpg "https://images.unsplash.com/photo-1607082349566-187342771e6f?w=1200"   # cart (reuse or similar)
wget -O ecommerce-checkout.jpg "https://images.unsplash.com/photo-1607082349566-187342771e6f?w=1200"   # checkout (similar)

# Especializado - Website Restaurante (3 imagens)
wget -O restaurante-home.jpg   "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200"   # restaurant home
wget -O restaurante-menu.jpg   "https://images.unsplash.com/photo-1515003197210-e0cd71810b5f?w=1200"   # menu/food gallery
wget -O restaurante-galeria.jpg "https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=1200"  # dishes/gallery

# Especializado - Website Hotel & Turismo (3 imagens)
wget -O hotel-home.jpg     "https://images.unsplash.com/photo-1566073771259-6a8506099945?w=1200"   # hotel lobby/home
wget -O hotel-quartos.jpg  "https://images.unsplash.com/photo-1578683015146-b644c6f0c78a?w=1200"   # rooms
wget -O hotel-galeria.jpg  "https://images.unsplash.com/photo-1571896349842-33c89424de2d?w=1200"   # gallery/facilities

# Especializado - Website Clínica & Saúde (3 imagens)
wget -O clinica-home.jpg     "https://images.unsplash.com/photo-1584982751601-97dcc096659c?w=1200"   # medical/clinic home
wget -O clinica-servicos.jpg "https://images.unsplash.com/photo-1586776976031-6c0a66e85d4c?w=1200"   # services
wget -O clinica-equipa.jpg   "https://images.unsplash.com/photo-1559839734-2b71ea197ec2?w=1200"     # team/doctors

# Profissional - Website Advocacia (3 imagens)
wget -O advocacia-home.jpg   "https://images.unsplash.com/photo-1589829545856-d10d7d1719f8?w=1200"   # law firm serious
wget -O advocacia-areas.jpg  "https://images.unsplash.com/photo-1589829545856-d10d7d1719f8?w=1200"   # areas/practice
wget -O advocacia-equipa.jpg "https://images.unsplash.com/photo-1551836022-d5d88e9218df?w=1200"     # lawyers/team

# Profissional - Website Consultoria (3 imagens)
wget -O consultoria-home.jpg     "https://images.unsplash.com/photo-1557804506-669a67965ba0?w=1200"   # consulting home
wget -O consultoria-servicos.jpg "https://images.unsplash.com/photo-1556761175-5973dc0f32e7?w=1200"   # services/portfolio
wget -O consultoria-casos.jpg    "https://images.unsplash.com/photo-1499750310107-5fef28a66643?w=1200" # cases/studies

# Especializado - Website Agência Viagens (3 imagens)
wget -O viagens-home.jpg      "https://images.unsplash.com/photo-1501785888041-af3ef285b470?w=1200"   # travel home/destinations
wget -O viagens-destinos.jpg  "https://images.unsplash.com/photo-1507525428034-b723cf961d3e?w=1200"   # destinations
wget -O viagens-pacotes.jpg   "https://images.unsplash.com/photo-1516483638261-f4dbaf036963?w=1200"   # packages/offers

echo "Download concluído!"
echo "Verifica a pasta $DEST_DIR"
ls -la
