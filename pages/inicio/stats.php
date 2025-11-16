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
          "cor_badge": "bg-label-primary",
          "valor": "50+",
          "descricao": "Projectos Entregues"
        },
        {
          "icone": "ri-user-smile-line",
          "cor_badge": "bg-label-success",
          "valor": "100+",
          "descricao": "Clientes Satisfeitos"
        },
        {
          "icone": "ri-team-line",
          "cor_badge": "bg-label-warning",
          "valor": "15+",
          "descricao": "Profissionais Especializados"
        },
        {
          "icone": "ri-award-line",
          "cor_badge": "bg-label-info",
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

<?php if ($dados_api): ?>
<section class="section-py bg-body landing-fun-facts py-12 my-4" id="landingFunFacts">
    <div class="container">
        <h6 class="text-center d-flex justify-content-center align-items-center mb-5">
            <img alt="section title icon" class="me-3" height="24"
                src="assets/img/icons/section-title-icon.png" />
            <span class="text-uppercase"><?php echo htmlspecialchars($dados_api['titulo_secao']); ?></span>
        </h6>
        
        <div class="row gx-0 gy-5 gx-sm-6">
            <?php foreach ($dados_api['data'] as $item): ?>
                <div class="col-md-3 col-sm-6 text-center">
                    <span class="badge rounded-pill <?php echo htmlspecialchars($item['cor_badge']); ?> bg-label-hover fun-facts-icon mb-6 p-5">
                        <i class="icon-base ri <?php echo htmlspecialchars($item['icone']); ?> icon-42px"></i>
                    </span>
                    <h2 class="fw-bold mb-0 fun-facts-text"><?php echo htmlspecialchars($item['valor']); ?></h2>
                    <h6 class="mb-0 text-body"><?php echo htmlspecialchars($item['descricao']); ?></h6>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php else: ?>
    <p class="text-center text-danger">Erro ao carregar os números da API.</p>
<?php endif; ?>