<?php
/*
Template Name: Forms Boas Praticas KB
Description: Guia de boas práticas para solicitações de KB e Macros com efeito Dropdown
*/
$logo_url = get_template_directory_uri() . '/ativos/img/guia-configuracao/img_jpeg_1.jpg';
$form_url = home_url('/forms-solicitacao/');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Boas práticas — Gestão de Conhecimento</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=DM+Serif+Display&display=swap" rel="stylesheet">
<style>
    *,*::before,*::after{box-sizing:border-box;margin:0;padding:0}
    body{font-family:'DM Sans',sans-serif;background:#f0ede8;min-height:100vh;padding:40px 16px 60px;}
    .card{background:#fff;border-radius:18px;width:100%;max-width:760px;margin:0 auto;padding:36px 44px 48px;box-shadow:0 2px 24px rgba(0,0,0,0.07);}
    .header{display:flex;align-items:flex-start;justify-content:space-between;margin-bottom:24px;}
    .logo-box{width:130px;height:52px;display:flex;align-items:center;}
    .logo-box img{width:100%;height:100%;object-fit:contain;object-position:left center;}
    .header-label{font-size:11px;font-weight:600;letter-spacing:0.12em;color:#E8612A;text-transform:uppercase;text-align:right;padding-top:4px;}
    hr.divider{border:none;border-top:1px solid #ece9e3;margin-bottom:28px;}
    .btn-voltar{display:inline-flex;align-items:center;gap:6px;color:#E8612A;font-size:13px;font-weight:600;text-decoration:none;margin-bottom:20px;transition:opacity .15s;}
    .btn-voltar:hover{opacity:.75;}
    .page-title{font-family:'DM Serif Display',serif;font-size:26px;font-weight:400;color:#1a1916;line-height:1.3;margin-bottom:8px;}
    .page-title span{color:#E8612A;}
    .page-subtitle{font-size:14px;color:#7a7672;margin-bottom:36px;line-height:1.6;}

    /* Estilos do Dropdown (Accordion) */
    .section {
        margin-bottom: 12px;
        border: 1px solid #ece9e3;
        border-radius: 12px;
        overflow: hidden;
        background: #fff;
    }
    .section-header {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 16px;
        background: #fff;
        cursor: pointer;
        list-style: none; /* Remove seta padrão no Firefox */
        position: relative;
        transition: background 0.2s;
    }
    .section-header::-webkit-details-marker { display: none; } /* Remove seta padrão no Chrome */
    
    .section-header:hover { background: #faf8f5; }

    /* Seta personalizada */
    .section-header::after {
        content: '❯';
        position: absolute;
        right: 20px;
        font-size: 12px;
        color: #E8612A;
        transition: transform 0.3s;
    }
    details[open] .section-header::after {
        transform: rotate(90deg);
    }
    details[open] .section-header {
        border-bottom: 1px solid #f0ede8;
    }

    .section-icon{font-size:20px;}
    .section-title{font-size:16px;font-weight:700;color:#1a1916;}
    
    /* Conteúdo interno */
    .section-content { padding: 20px 16px; background: #fff; }

    .items-grid{display:flex;flex-direction:column;gap:14px;}
    .item{display:flex;align-items:flex-start;gap:14px;padding:14px 16px;background:#faf8f5;border-radius:10px;border:1px solid #ece9e3;}
    .item-icon{font-size:20px;flex-shrink:0;margin-top:2px;}
    .item-title{font-size:14px;font-weight:600;color:#1a1916;margin-bottom:4px;}
    .item-desc{font-size:13px;color:#7a7672;line-height:1.6;}
    .item-desc ul{padding-left:16px;margin-top:4px;}
    .item-desc li{margin-bottom:2px;}
    .avoid-list{display:flex;flex-direction:column;gap:8px;}
    .avoid-item{display:flex;align-items:flex-start;gap:10px;font-size:13.5px;color:#4a4744;padding:8px 0;border-bottom:1px solid #f0ede8;}
    .avoid-item:last-child{border-bottom:none;}
    .avoid-x{color:#d93025;font-weight:700;flex-shrink:0;font-size:15px;}
    .examples{display:flex;flex-direction:column;gap:20px;}
    .example-card{border:1px solid #e8e4de;border-radius:12px;overflow:hidden;}
    .example-header{display:flex;align-items:center;gap:10px;padding:12px 16px;background:#faf8f5;border-bottom:1px solid #e8e4de;}
    .example-badge{padding:3px 10px;border-radius:99px;font-size:11px;font-weight:600;}
    .badge-artigo{background:#eef3fd;color:#1e40af;}
    .badge-macro{background:#f0faf4;color:#1e7e3e;}
    .badge-urgencia{background:#fefce8;color:#78350f;}
    .example-title-text{font-size:13px;font-weight:600;color:#1a1916;}
    .example-body{padding:16px;}
    .example-fields{display:grid;grid-template-columns:1fr 1fr;gap:10px 20px;}
    .example-field label{display:block;font-size:10px;font-weight:700;letter-spacing:.07em;text-transform:uppercase;color:#9a9690;margin-bottom:3px;}
    .example-field .val{font-size:13px;color:#1a1916;line-height:1.5;}
    .example-field.full{grid-column:1/-1;}
    .example-why{margin-top:14px;padding:10px 14px;background:#f0faf4;border-radius:8px;font-size:12.5px;color:#1e7e3e;line-height:1.6;}
    .footer-note{text-align:center;padding:24px 0 0;font-size:13.5px;color:#7a7672;line-height:1.7;border-top:1px solid #ece9e3;margin-top:36px;}
    @media(max-width:560px){.card{padding:24px 20px 36px;}.example-fields{grid-template-columns:1fr;}}
</style>
</head>
<body>
<div class="card">
  <div class="header">
    <div class="logo-box">
      <img src="<?php echo esc_url($logo_url); ?>" alt="Logo" />
    </div>
    <div class="header-label">Gestão de Conhecimento</div>
  </div>
  <hr class="divider">

  <a href="<?php echo esc_url($form_url); ?>" class="btn-voltar">← Voltar ao formulário</a>

  <h1 class="page-title">Boas práticas para solicitações<br>de <span>KB e Macros</span></h1>
  <p class="page-subtitle">Este guia orienta como preencher corretamente cada solicitação, garantindo que as demandas sejam atendidas com agilidade e sem retrabalho.</p>

  <details class="section">
    <summary class="section-header">
      <span class="section-icon">📋</span>
      <span class="section-title">Regras gerais</span>
    </summary>
    <div class="section-content">
        <div class="items-grid">
          <div class="item">
            <span class="item-icon">📧</span>
            <div>
              <div class="item-title">Use sempre seu e-mail corporativo</div>
              <div class="item-desc">Somente endereços @hotmart.com são aceitos. Isso garante rastreabilidade e facilita o contato para dúvidas.</div>
            </div>
          </div>
          <div class="item">
            <span class="item-icon">🎯</span>
            <div>
              <div class="item-title">Escolha a urgência com critério</div>
              <div class="item-desc">
                <ul>
                  <li><strong>Baixa</strong> — rotina, sem impacto imediato (5–7 dias úteis)</li>
                  <li><strong>Média</strong> — necessária em breve, sem bloquear operação (3–5 dias úteis)</li>
                  <li><strong>Alta</strong> — impacto direto na operação (1–2 dias úteis)</li>
                  <li><strong>Crítica</strong> — paralisação ou bug grave, exige atenção imediata</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <span class="item-icon">📂</span>
            <div>
              <div class="item-title">Selecione os tópicos corretos</div>
              <div class="item-desc">Os tópicos ajudam a direcionar a solicitação para o responsável certo. Se nenhum se encaixar, use <strong>Outro</strong> e descreva na especificação.</div>
            </div>
          </div>
          <div class="item">
            <span class="item-icon">📎</span>
            <div>
              <div class="item-title">Anexos: até 35 KB por arquivo</div>
              <div class="item-desc">Imagens são comprimidas automaticamente. Para documentos maiores, faça o upload no Google Drive, copie o link de compartilhamento e cole no campo Conteúdo Detalhado.</div>
            </div>
          </div>
        </div>
    </div>
  </details>

  <details class="section">
    <summary class="section-header">
      <span class="section-icon">📝</span>
      <span class="section-title">Solicitações de Artigo (KB)</span>
    </summary>
    <div class="section-content">
        <div class="items-grid">
          <div class="item">
            <span class="item-icon">🏷️</span>
            <div>
              <div class="item-title">Título claro e descritivo</div>
              <div class="item-desc">O título deve indicar exatamente o tema do artigo. Se for uma alteração, use o título atual e inclua o link do artigo no campo Conteúdo Detalhado.</div>
            </div>
          </div>
          <div class="item">
            <span class="item-icon">🔗</span>
            <div>
              <div class="item-title">Inclua links de artigos relacionados</div>
              <div class="item-desc">Se a solicitação envolve junção, revisão ou complemento de artigos existentes, cole os links diretamente no campo Conteúdo Detalhado. Isso evita retrabalho e garante que o analista entenda o contexto completo.</div>
            </div>
          </div>
          <div class="item">
            <span class="item-icon">✍️</span>
            <div>
              <div class="item-title">Descreva o conteúdo com profundidade</div>
              <div class="item-desc">Explique o que precisa conter o artigo, por que é necessário e para quem é destinado. Quanto mais contexto, menor o risco de o artigo sair incompleto.</div>
            </div>
          </div>
        </div>
    </div>
  </details>

  <details class="section">
    <summary class="section-header">
      <span class="section-icon">💬</span>
      <span class="section-title">Solicitações de Macro</span>
    </summary>
    <div class="section-content">
        <div class="items-grid">
          <div class="item">
            <span class="item-icon">🏷️</span>
            <div>
              <div class="item-title">Nome da macro deve refletir o uso</div>
              <div class="item-desc">Escolha um nome que qualquer analista entenda sem precisar abrir a macro. Ex: <em>"Encerramento de ticket — falta de interação"</em> é mais claro do que <em>"Macro falta interação"</em>.</div>
            </div>
          </div>
          <div class="item">
            <span class="item-icon">📄</span>
            <div>
              <div class="item-title">Inclua o texto completo da macro</div>
              <div class="item-desc">Cole no campo Conteúdo Detalhado o texto exato que deseja na macro. Quanto mais completo, menos idas e vindas.</div>
            </div>
          </div>
          <div class="item">
            <span class="item-icon">🔄</span>
            <div>
              <div class="item-title">Para alteração de macro existente</div>
              <div class="item-desc">Informe o título atual da macro e descreva exatamente o que deve mudar.</div>
            </div>
          </div>
        </div>
    </div>
  </details>

  <details class="section">
    <summary class="section-header">
      <span class="section-icon">🚫</span>
      <span class="section-title">O que evitar</span>
    </summary>
    <div class="section-content">
        <div class="avoid-list">
          <div class="avoid-item"><span class="avoid-x">✗</span> Descrições vagas como "atualizar o artigo" sem especificar o quê</div>
          <div class="avoid-item"><span class="avoid-x">✗</span> Urgência Alta ou Crítica para demandas de rotina — isso atrasa quem realmente tem emergência</div>
          <div class="avoid-item"><span class="avoid-x">✗</span> Solicitar múltiplos artigos em uma única solicitação — abra uma por artigo</div>
          <div class="avoid-item"><span class="avoid-x">✗</span> Omitir o link do artigo quando a solicitação é de alteração</div>
          <div class="avoid-item"><span class="avoid-x">✗</span> Enviar arquivos grandes sem link do Google Drive — o sistema não armazenará o arquivo</div>
        </div>
    </div>
  </details>

  <details class="section">
    <summary class="section-header">
      <span class="section-icon">✅</span>
      <span class="section-title">Exemplos de solicitações ideais</span>
    </summary>
    <div class="section-content">
      <div class="examples">

        <!-- Exemplo 1: Artigo -->
        <div class="example-card">
          <div class="example-header">
            <span class="example-badge badge-artigo">Artigo</span>
            <span class="example-badge badge-urgencia">Baixa</span>
            <span class="example-title-text">Junção de artigos / campo observação das notas</span>
          </div>
          <div class="example-body">
            <div class="example-fields">
              <div class="example-field">
                <label>Área</label>
                <div class="val">eNotas – Suporte/Onboarding</div>
              </div>
              <div class="example-field">
                <label>Tipo de Solicitação</label>
                <div class="val">Inclusão / Alteração de artigo</div>
              </div>
              <div class="example-field">
                <label>Tópico(s) de Abrangência</label>
                <div class="val">Menu Vendas (App Emissor)</div>
              </div>
              <div class="example-field">
                <label>Urgência</label>
                <div class="val">Baixa (5–7 dias úteis)</div>
              </div>
              <div class="example-field full">
                <label>Título do Artigo</label>
                <div class="val">Junção de artigos / campo observação das notas</div>
              </div>
              <div class="example-field full">
                <label>Conteúdo Detalhado</label>
                <div class="val" style="white-space:pre-wrap;">Seria possível unificar esses três artigos em um único material, separando claramente onde ajustar os campos em cada tipo de nota (NF-e e NFS-e)? A ideia é facilitar para clientes que utilizam ambos os modelos.

Também queria ver com você se dá para deixar mais explícito se as informações implementadas nas notas ficam salvas de forma fixa ou se precisam ser ajustadas manualmente a cada emissão. Notei que isso não está muito claro nos artigos atuais.

https://atendimento.enotas.com.br/hc/pt-br/articles/35773500257421
https://atendimento.enotas.com.br/hc/pt-br/articles/35773505514125
https://atendimento.enotas.com.br/hc/pt-br/articles/35773483414413</div>
              </div>
            </div>
            <div class="example-why">
              ✓ <strong>Por que é uma boa solicitação:</strong> descreve claramente o objetivo, explica o contexto, aponta o problema atual e inclui os links dos artigos a serem unificados — sem deixar nada para suposição.
            </div>
          </div>
        </div>

        <!-- Exemplo 2: Macro -->
        <div class="example-card">
          <div class="example-header">
            <span class="example-badge badge-macro">Macro</span>
            <span class="example-badge badge-urgencia">Baixa</span>
            <span class="example-title-text">Encerramento de ticket por falta de interação</span>
          </div>
          <div class="example-body">
            <div class="example-fields">
              <div class="example-field">
                <label>Área</label>
                <div class="val">eNotas – Financeiro</div>
              </div>
              <div class="example-field">
                <label>Tipo de Solicitação</label>
                <div class="val">Inclusão / Alteração de macro</div>
              </div>
              <div class="example-field">
                <label>Tópico(s) de Abrangência</label>
                <div class="val">Outro</div>
              </div>
              <div class="example-field">
                <label>Especificação do Tópico "Outro"</label>
                <div class="val">Encerramento de ticket por falta de interação</div>
              </div>
              <div class="example-field full">
                <label>Urgência</label>
                <div class="val">Baixa (5–7 dias úteis)</div>
              </div>
              <div class="example-field full">
                <label>Conteúdo Detalhado</label>
                <div class="val" style="white-space:pre-wrap;">Solicito a criação desta macro para que possamos aplicá-la nos casos em que precisarmos encerrar o ticket por falta de interação.

Segue abaixo a sugestão de texto:

"Olá, xxx
Espero que este email o encontre bem!

Estou passando para informar que, devido à falta de interação recente, este chamado está sendo encerrado.

Mas não se preocupe, caso sua dúvida persista, sinta-se à vontade para entrar em contato conosco novamente, por meio dos nossos canais oficiais.

Fico à disposição para qualquer dúvida.

Atenciosamente,
(Nome do analista)
Analista Financeira | eNotas"</div>
              </div>
            </div>
            <div class="example-why">
              ✓ <strong>Por que é uma boa solicitação:</strong> explica o cenário de uso da macro, inclui o texto completo e pronto para uso, e usa urgência Baixa corretamente pois não há impacto imediato na operação.
            </div>
          </div>
        </div>

      </div>
    </div>
  </details>

  <div class="footer-note">
    Dúvidas sobre como preencher?<br>
    Entre em contato com o responsável pela Gestão de Conhecimento antes de abrir a solicitação.
  </div>

  <div style="text-align:center;margin-top:28px;">
    <a href="<?php echo esc_url($form_url); ?>" class="btn-voltar">← Voltar ao formulário</a>
  </div>

</div>
</body>
</html>