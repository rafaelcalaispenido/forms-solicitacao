<?php
/*
Template Name: Forms Solicitacao KB
Description: Formulário de solicitação de inclusão/alteração de artigo (KB) / Macros
*/
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Solicitação de Inclusão/Alteração de Artigo(KB)/Macros</title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600&family=DM+Serif+Display&display=swap" rel="stylesheet">
<style>
*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
body {font-family: 'DM Sans', sans-serif;background: #f0ede8;min-height: 100vh;display: flex;align-items: flex-start;justify-content: center;padding: 40px 16px 60px;}
.card {background: #fff;border-radius: 18px;width: 100%;max-width: 700px;padding: 36px 44px 48px;box-shadow: 0 2px 24px rgba(0,0,0,0.07);}
.header {display: flex;align-items: flex-start;justify-content: space-between;margin-bottom: 24px;}
.logo-box {width: 130px;height: 52px;display: flex;align-items: center;}
.logo-box img {width: 100%;height: 100%;object-fit: contain;object-position: left center;}
.header-label {font-size: 11px;font-weight: 600;letter-spacing: 0.12em;color: #E8612A;text-transform: uppercase;text-align: right;padding-top: 4px;display:flex;flex-direction:column;align-items:flex-end;gap:8px;}
.btn-boas-praticas {display:inline-block;border:1.5px solid #E8612A;color:#E8612A;border-radius:8px;padding:6px 14px;font-size:12px;font-weight:600;text-decoration:none;letter-spacing:0.04em;text-transform:none;transition:background .15s,color .15s;}
.btn-boas-praticas:hover {background:#E8612A;color:#fff;}
hr.divider {border: none;border-top: 1px solid #ece9e3;margin-bottom: 24px;}
.form-title {font-family: 'DM Serif Display', serif;font-size: 24px;font-weight: 400;color: #1a1916;line-height: 1.3;margin-bottom: 8px;}
.form-title span {color: #E8612A;}
.form-subtitle {font-size: 13.5px;color: #7a7672;margin-bottom: 6px;line-height: 1.5;}
.form-notice {font-size: 12.5px;color: #7a7672;margin-bottom: 32px;padding: 10px 14px;background: #faf8f5;border-radius: 8px;border-left: 3px solid #E8612A;}
.field-group {margin-bottom: 24px;}
label.field-label {display: block;font-size: 14px;font-weight: 600;color: #1a1916;margin-bottom: 5px;}
label.field-label .req {color: #E8612A;margin-left: 2px;}
.field-hint {font-size: 12px;color: #9a9690;margin-bottom: 8px;}
input[type="text"],input[type="email"],textarea {width: 100%;padding: 10px 14px;border: 1px solid #ddd9d2;border-radius: 8px;font-family: 'DM Sans', sans-serif;font-size: 14px;color: #1a1916;background: #fff;transition: border-color 0.18s, box-shadow 0.18s;outline: none;}
input[type="text"]:focus,input[type="email"]:focus,textarea:focus {border-color: #E8612A;box-shadow: 0 0 0 3px rgba(232,97,42,0.10);}
input.error,textarea.error {border-color: #d93025;box-shadow: 0 0 0 3px rgba(217,48,37,0.08);}
textarea {min-height: 120px;resize: vertical;line-height: 1.6;}
.error-msg {font-size: 12px;color: #d93025;margin-top: 5px;display: none;}
.error-msg.visible {display: block;}
.options-list {display: flex;flex-direction: column;gap: 10px;}
.option-item {display: flex;align-items: center;gap: 10px;padding: 11px 14px;border: 1px solid #ddd9d2;border-radius: 8px;cursor: pointer;transition: border-color 0.15s, background 0.15s;user-select: none;}
.option-item:hover {border-color: #E8612A;background: #fdf6f2;}
.option-item input[type="radio"],.option-item input[type="checkbox"] {accent-color: #E8612A;width: 16px;height: 16px;cursor: pointer;flex-shrink: 0;}
.option-item input[type="radio"]:checked + .option-label,.option-item input[type="checkbox"]:checked + .option-label {color: #E8612A;font-weight: 500;}
.option-item:has(input:checked) {border-color: #E8612A;background: #fdf6f2;}
.option-label {font-size: 14px;color: #1a1916;transition: color 0.15s;}
.option-sublabel {font-size: 12px;color: #9a9690;margin-top: 1px;}
.file-upload-area {border: 2px dashed #ddd9d2;border-radius: 10px;padding: 28px 20px;text-align: center;cursor: pointer;transition: border-color 0.18s, background 0.18s;position: relative;}
.file-upload-area:hover {border-color: #E8612A;background: #fdf6f2;}
.file-upload-area input[type="file"] {position: absolute;inset: 0;opacity: 0;cursor: pointer;width: 100%;height: 100%;}
.file-upload-icon {font-size: 28px;margin-bottom: 8px;display: block;}
.file-upload-text {font-size: 14px;color: #4a4744;font-weight: 500;}
.file-upload-hint {font-size: 12px;color: #9a9690;margin-top: 4px;}
.file-list {margin-top: 10px;display: flex;flex-direction: column;gap: 6px;}
.file-chip {display: flex;align-items: center;gap: 8px;padding: 7px 12px;background: #faf8f5;border: 1px solid #ece9e3;border-radius: 6px;font-size: 13px;color: #1a1916;}
.file-chip .remove-file {margin-left: auto;cursor: pointer;color: #9a9690;font-size: 16px;line-height: 1;transition: color 0.15s;}
.file-chip .remove-file:hover {color: #d93025;}
.conditional-field {display: none;}
.conditional-field.visible {display: block;}
.submit-btn {width: 100%;padding: 14px;background: #E8612A;color: #fff;border: none;border-radius: 10px;font-family: 'DM Sans', sans-serif;font-size: 15px;font-weight: 600;cursor: pointer;transition: background 0.18s, transform 0.1s;margin-top: 8px;letter-spacing: 0.01em;}
.submit-btn:hover {background: #d4531f;}
.submit-btn:active {transform: scale(0.99);}
.progress-wrap {display: none;margin-top: 14px;background: #f0ede8;border-radius: 99px;height: 6px;overflow: hidden;}
.progress-wrap.visible { display: block; }
.progress-bar {height: 100%;background: #E8612A;border-radius: 99px;width: 0%;transition: width 0.4s ease;}
.progress-label {font-size: 12px;color: #9a9690;margin-top: 6px;text-align: center;display: none;}
.progress-label.visible { display: block; }
.success-banner {display: none;background: #f0faf4;border: 1px solid #7ecba1;border-radius: 10px;padding: 16px 20px;text-align: center;margin-top: 20px;font-size: 14px;color: #1a5c35;font-weight: 500;}
.success-banner.visible {display: block;}
@media (max-width: 560px) {.card { padding: 24px 20px 36px; }.form-title { font-size: 20px; }}
</style>
</head>
<body>
<div class="card">
  <div class="header">
    <div class="logo-box">
      <img src="<?php echo get_template_directory_uri(); ?>/ativos/img/guia-configuracao/img_jpeg_1.jpg" alt="Logo" />
    </div>
    <div class="header-label">
      Gestão de Conhecimento
      <a href="<?php echo esc_url(home_url('/forms-solicitacao-help/')); ?>" class="btn-boas-praticas" target="_blank">✦ Boas práticas</a>
    </div>
  </div>
  <hr class="divider">
  <h1 class="form-title">Solicitação de <span>Inclusão/Alteração</span><br>de Artigo (KB) / Macros</h1>
  <p class="form-subtitle">Preencha os campos abaixo para registrar sua solicitação.</p>
  <p class="form-notice">Campos marcados com <strong style="color:#E8612A;">*</strong> são obrigatórios.</p>

  <form id="mainForm" novalidate>

    <div class="field-group">
      <label class="field-label" for="email">E-mail <span class="req">*</span></label>
      <p class="field-hint">Utilize seu e-mail corporativo (@hotmart.com).</p>
      <input type="email" id="email" placeholder="seunome@hotmart.com" autocomplete="off" />
      <p class="error-msg" id="email-error">Informe o e-mail de acesso (@hotmart.com).</p>
    </div>

    <div class="field-group">
      <label class="field-label">Área <span class="req">*</span></label>
      <p class="field-hint">Selecione apenas uma opção.</p>
      <div class="options-list" id="area-solicitacao">
        <label class="option-item">
          <input type="radio" name="area" value="suporte" onchange="handleArea()" />
          <div><div class="option-label">eNotas - Suporte/Onboarding</div></div>
        </label>
        <label class="option-item">
          <input type="radio" name="area" value="financeiro" onchange="handleArea()" />
          <div><div class="option-label">eNotas - Financeiro</div></div>
        </label>
        <label class="option-item">
          <input type="radio" name="area" value="dg" onchange="handleArea()" />
          <div><div class="option-label">Demand Generation (DG)</div></div>
        </label>
      </div>
      <p class="error-msg" id="area-error">Selecione a área.</p>
    </div>

    <div class="field-group">
      <label class="field-label">Tipo de solicitação <span class="req">*</span></label>
      <p class="field-hint">Selecione apenas uma opção.</p>
      <div class="options-list" id="tipo-solicitacao">
        <label class="option-item">
          <input type="radio" name="tipo" value="artigo" onchange="handleTipo()" />
          <div><div class="option-label">Inclusão / Alteração de artigo</div></div>
        </label>
        <label class="option-item">
          <input type="radio" name="tipo" value="macro" onchange="handleTipo()" />
          <div><div class="option-label">Inclusão / Alteração de macro</div></div>
        </label>
      </div>
      <p class="error-msg" id="tipo-error">Selecione o tipo de solicitação.</p>
    </div>

    <div class="field-group">
      <label class="field-label">Selecione o(s) tópico(s) de abrangência do artigo ou macro <span class="req">*</span></label>
      <p class="field-hint">Pode selecionar múltiplas opções.</p>
      <div class="options-list" id="topicos-list">
        <!-- preenchido dinamicamente por handleArea() -->
      </div>
      <p class="error-msg" id="topicos-error">Selecione pelo menos um tópico.</p>
    </div>

    <div class="field-group conditional-field" id="campo-outro">
      <label class="field-label" for="outro-texto">Especifique o tópico "Outro"</label>
      <p class="field-hint">Descreva o tópico que não está listado acima.</p>
      <input type="text" id="outro-texto" placeholder="Descreva o tópico..." />
    </div>

    <div class="field-group conditional-field" id="campo-artigo">
      <label class="field-label" for="titulo-artigo">Título proposto para o artigo <span class="req">*</span></label>
      <p class="field-hint">Se for alteração, use o título atual e informe o link do artigo existente.</p>
      <input type="text" id="titulo-artigo" placeholder="Ex: Como emitir NFS-e no eNotas" />
      <p class="error-msg" id="titulo-artigo-error">Informe o título do artigo.</p>
    </div>

    <div class="field-group conditional-field" id="campo-macro">
      <label class="field-label" for="titulo-macro">Título da macro existente (se for alteração)</label>
      <p class="field-hint">Se for inclusão de nova macro, deixe em branco.</p>
      <input type="text" id="titulo-macro" placeholder="Ex: Macro - Erro ao emitir NFS-e" />
    </div>

    <div class="field-group">
      <label class="field-label" for="descricao">Descreva o conteúdo detalhado</label>
      <p class="field-hint">Inclua contexto, passos, exemplos ou qualquer detalhe relevante.</p>
      <textarea id="descricao" placeholder="Descreva aqui o conteúdo completo que deverá constar no artigo ou macro..."></textarea>
    </div>

    <div class="field-group">
      <label class="field-label">Qual a urgência desta Inclusão/Alteração? <span class="req">*</span></label>
      <div class="options-list">
        <label class="option-item"><input type="radio" name="urgencia" value="baixa" /><div><div class="option-label">Baixa</div><div class="option-sublabel">Rotina — prazo de 5 a 7 dias úteis</div></div></label>
        <label class="option-item"><input type="radio" name="urgencia" value="media" /><div><div class="option-label">Média</div><div class="option-sublabel">Necessária em breve — prazo de 3 a 5 dias úteis</div></div></label>
        <label class="option-item"><input type="radio" name="urgencia" value="alta" /><div><div class="option-label">Alta</div><div class="option-sublabel">Impacto imediato na operação — prazo de 1 a 2 dias úteis</div></div></label>
        <label class="option-item"><input type="radio" name="urgencia" value="critica" /><div><div class="option-label">Crítica</div><div class="option-sublabel">Paralisação / Bug grave — exige atenção imediata</div></div></label>
      </div>
      <p class="error-msg" id="urgencia-error">Selecione o nível de urgência.</p>
    </div>

    <div class="field-group">
      <label class="field-label">Anexo de Suporte</label>
      <p class="field-hint">Imagens são comprimidas automaticamente. Documentos (PDF, XML, DOCX etc.): limite de <strong>35 KB</strong> por arquivo.</p>
      <div style="background:#fef9ec;border:1px solid #f5c518;border-radius:8px;padding:10px 14px;margin-bottom:10px;font-size:12.5px;color:#7a6010;line-height:1.6;">
        <strong>Arquivo maior que 35 KB?</strong> Faça o upload no Google Drive, copie o link de compartilhamento e cole no campo <em>Conteúdo Detalhado</em>.
      </div>
      <div class="file-upload-area" id="dropArea">
        <input type="file" id="fileInput" multiple onchange="handleFiles(this.files)" />
        <span class="file-upload-icon">📎</span>
        <div class="file-upload-text">Clique para selecionar ou arraste os arquivos aqui</div>
        <div class="file-upload-hint">Imagens: comprimidas automaticamente • Documentos: até 35 KB por arquivo</div>
      </div>
      <div class="file-list" id="fileList"></div>
    </div>

    <button type="submit" class="submit-btn">Enviar solicitação</button>
    <div class="progress-wrap" id="progressWrap"><div class="progress-bar" id="progressBar"></div></div>
    <p class="progress-label" id="progressLabel"></p>
    <div class="success-banner" id="successBanner">Solicitação enviada com sucesso! Em breve entraremos em contato.</div>

  </form>
</div>

<script>
const topicosPorArea = {
  suporte: [
    'Menu Vendas (App Emissor)',
    'Menu Gerenciar (App Emissor)',
    'Menu Empresa (App Emissor)',
    'Dashboard (App Emissor)',
    'Embed',
    'GW',
    'Outro'
  ],
  financeiro: [
    'Pagamento',
    'Troca de plano',
    'Reativação de plano',
    'Cancelamento de plano',
    'Outro'
  ],
  dg: [
    'Pages',
    'Send',
    'Outro'
  ]
};

function handleArea() {
  const area = document.querySelector('input[name="area"]:checked')?.value;
  const list = document.getElementById('topicos-list');
  list.innerHTML = '';
  document.getElementById('campo-outro').classList.remove('visible');
  if (!area) return;
  (topicosPorArea[area] || []).forEach(topico => {
    const lbl = document.createElement('label');
    lbl.className = 'option-item';
    const isOutro = topico === 'Outro';
    lbl.innerHTML = `<input type="checkbox" name="topico" value="${topico}" ${isOutro ? 'id="check-outro"' : ''} onchange="${isOutro ? 'handleOutro()' : ''}" /><span class="option-label">${topico}</span>`;
    list.appendChild(lbl);
  });
}

function handleTipo() {
  const val = document.querySelector('input[name="tipo"]:checked')?.value;
  document.getElementById('campo-artigo').classList.toggle('visible', val === 'artigo');
  document.getElementById('campo-macro').classList.toggle('visible', val === 'macro');
}

function handleOutro() {
  const checked = document.getElementById('check-outro')?.checked;
  document.getElementById('campo-outro').classList.toggle('visible', !!checked);
}

const selectedFiles = [];
const MAX_DOC_KB = 35;

function isOversized(file) {
  if (file.type.startsWith("image/")) return false;
  return file.size > MAX_DOC_KB * 1024;
}

function handleFiles(fileList) {
  const rejected = [];
  Array.from(fileList).forEach(file => {
    if (isOversized(file)) { rejected.push(file.name + " (" + (file.size / 1024).toFixed(0) + " KB)"); return; }
    if (!selectedFiles.find(f => f.name === file.name && f.size === file.size)) selectedFiles.push(file);
  });
  if (rejected.length > 0) {
    alert("Arquivo(s) não adicionado(s) por exceder o limite de " + MAX_DOC_KB + " KB:\n\n" + rejected.map(n => "• " + n).join("\n") + "\n\nPara arquivos maiores, faça o upload no Google Drive, copie o link e cole no campo Conteúdo Detalhado.");
  }
  renderFiles();
}

function renderFiles() {
  const list = document.getElementById('fileList');
  list.innerHTML = '';
  selectedFiles.forEach((file, i) => {
    const size = file.size > 1048576 ? (file.size / 1048576).toFixed(1) + ' MB' : (file.size / 1024).toFixed(0) + ' KB';
    const chip = document.createElement('div');
    chip.className = 'file-chip';
    chip.innerHTML = `<span>📄</span><span>${file.name}</span><span style="color:#9a9690;font-size:12px;">${size}</span><span class="remove-file" onclick="removeFile(${i})" title="Remover">&times;</span>`;
    list.appendChild(chip);
  });
}

function removeFile(index) {
  selectedFiles.splice(index, 1);
  renderFiles();
}

const dropArea = document.getElementById('dropArea');
dropArea.addEventListener('dragover', e => { e.preventDefault(); dropArea.style.borderColor = '#E8612A'; });
dropArea.addEventListener('dragleave', () => { dropArea.style.borderColor = '#ddd9d2'; });
dropArea.addEventListener('drop', e => { e.preventDefault(); dropArea.style.borderColor = '#ddd9d2'; handleFiles(e.dataTransfer.files); });

const SHEETDB_URL = "https://sheetdb.io/api/v1/l177y1jebi4sl";

document.getElementById('mainForm').addEventListener('submit', async function(e) {
  e.preventDefault();
  let valid = true;

  const email = document.getElementById('email');
  const emailVal = email.value.trim();
  if (!emailVal || !emailVal.toLowerCase().endsWith('@hotmart.com')) {
    email.classList.add('error'); document.getElementById('email-error').classList.add('visible'); valid = false;
  } else { email.classList.remove('error'); document.getElementById('email-error').classList.remove('visible'); }

  const area = document.querySelector('input[name="area"]:checked');
  if (!area) { document.getElementById('area-error').classList.add('visible'); valid = false; }
  else { document.getElementById('area-error').classList.remove('visible'); }

  const tipo = document.querySelector('input[name="tipo"]:checked');
  if (!tipo) { document.getElementById('tipo-error').classList.add('visible'); valid = false; }
  else { document.getElementById('tipo-error').classList.remove('visible'); }

  const topicos = document.querySelectorAll('input[name="topico"]:checked');
  if (topicos.length === 0) { document.getElementById('topicos-error').classList.add('visible'); valid = false; }
  else { document.getElementById('topicos-error').classList.remove('visible'); }

  if (tipo && tipo.value === 'artigo') {
    const tArt = document.getElementById('titulo-artigo');
    if (!tArt.value.trim()) { tArt.classList.add('error'); document.getElementById('titulo-artigo-error').classList.add('visible'); valid = false; }
    else { tArt.classList.remove('error'); document.getElementById('titulo-artigo-error').classList.remove('visible'); }
  }

  if (tipo && tipo.value === 'outro_tipo') {
    const tOutro = document.getElementById('tipo-outro-texto');
    if (!tOutro.value.trim()) { tOutro.classList.add('error'); document.getElementById('tipo-outro-error').classList.add('visible'); valid = false; }
    else { tOutro.classList.remove('error'); document.getElementById('tipo-outro-error').classList.remove('visible'); }
  }

  const urgencia = document.querySelector('input[name="urgencia"]:checked');
  if (!urgencia) { document.getElementById('urgencia-error').classList.add('visible'); valid = false; }
  else { document.getElementById('urgencia-error').classList.remove('visible'); }

  if (!valid) {
    const firstError = document.querySelector('.error-msg.visible');
    if (firstError) firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
    return;
  }

  const topicosSelecionados = Array.from(topicos).map(cb => cb.value).join(", ");
  const urgenciaLabels = { baixa: "Baixa (5-7 dias úteis)", media: "Média (3-5 dias úteis)", alta: "Alta (1-2 dias úteis)", critica: "Crítica (atenção imediata)" };
  const tipoLabels = { artigo: "Inclusão / Alteração de artigo", macro: "Inclusão / Alteração de macro" };
  const tipoValor = tipoLabels[tipo.value] || tipo.value;

  const btn = document.querySelector('.submit-btn');
  btn.disabled = true; btn.textContent = "Enviando..."; btn.style.background = "#b0aca7";

  try {
    const MAX_DOC_BYTES = 35 * 1024;
    const SHEETS_MAX_CHARS = 47000;
    const progressWrap = document.getElementById('progressWrap');
    const progressBar  = document.getElementById('progressBar');
    const progressLbl  = document.getElementById('progressLabel');
    const nomes = selectedFiles.map(f => f.name);
    const b64List = [];

    async function compressImage(file) {
      return new Promise((resolve) => {
        const img = new Image();
        const url = URL.createObjectURL(file);
        img.onload = () => {
          URL.revokeObjectURL(url);
          let quality = 0.75, maxDim = 1000, result = "";
          for (let t = 0; t < 7; t++) {
            let w = img.width, h = img.height;
            if (w > maxDim || h > maxDim) { const r = Math.min(maxDim/w, maxDim/h); w = Math.round(w*r); h = Math.round(h*r); }
            const c = document.createElement("canvas"); c.width = w; c.height = h;
            c.getContext("2d").drawImage(img, 0, 0, w, h);
            result = c.toDataURL("image/jpeg", quality);
            if (result.length <= SHEETS_MAX_CHARS) break;
            quality = Math.max(0.15, quality - 0.12); maxDim = Math.round(maxDim * 0.7);
          }
          resolve(result.length <= SHEETS_MAX_CHARS ? result : "");
        };
        img.onerror = () => resolve(""); img.src = url;
      });
    }

    async function readAsBase64(file) {
      return new Promise((resolve) => { const r = new FileReader(); r.onload = () => resolve(r.result); r.onerror = () => resolve(""); r.readAsDataURL(file); });
    }

    if (selectedFiles.length > 0) {
      progressWrap.classList.add('visible'); progressLbl.classList.add('visible');
      for (let i = 0; i < selectedFiles.length; i++) {
        const file = selectedFiles[i];
        progressLbl.textContent = "Processando " + (i+1) + " de " + selectedFiles.length + ": " + file.name;
        progressBar.style.width = Math.round((i / selectedFiles.length) * 80) + "%";
        if (file.type.startsWith("image/")) {
          const data = await compressImage(file);
          b64List.push(JSON.stringify({ name: file.name, data: data || "" }));
        } else if (file.size <= MAX_DOC_BYTES) {
          const data = await readAsBase64(file);
          const ok = data && data.length <= SHEETS_MAX_CHARS;
          b64List.push(JSON.stringify({ name: file.name, data: ok ? data : "" }));
        } else {
          b64List.push(JSON.stringify({ name: file.name, data: "" }));
        }
      }
      progressBar.style.width = "90%"; progressLbl.textContent = "Registrando solicitação na planilha...";
    }

    const qtd = nomes.length;
    const nomesFinal = qtd === 0 ? "Sem anexos" : qtd === 1 ? "1 anexo: " + nomes[0] : qtd + " anexos: " + nomes.join(", ");
    const b64Final = b64List.length ? "||" + b64List.join("||") : "";

    let submissionId = "";
    try {
      const [resE, resD] = await Promise.all([
        fetch(SHEETDB_URL + "?limit=9999&sheet=eNotas"),
        fetch(SHEETDB_URL + "?limit=9999&sheet=DG")
      ]);
      const rows = [...(await resE.json()), ...(await resD.json())];
      const year = new Date().getFullYear();
      const yearRows = rows.filter(r => (r["ID"]||"").startsWith(year + "_"));
      const maxN = yearRows.reduce((max, r) => { const n = parseInt((r["ID"]||"").split("_")[1]||"0"); return n > max ? n : max; }, 0);
      submissionId = year + "_" + (maxN + 1);
    } catch(e) { submissionId = new Date().getFullYear() + "_" + Date.now().toString().slice(-4); }

    const areaLabels = { suporte: "eNotas - Suporte/Onboarding", financeiro: "eNotas - Financeiro", dg: "Demand Generation (DG)" };
    const sheetPayload = {
      "ID": submissionId,
      "Data/Hora": new Date().toLocaleString("pt-BR"),
      "E-mail": emailVal,
      "Area": areaLabels[area.value] || area.value,
      "Tipo de Solicitacao": tipoValor,
      "Topico(s) de Abrangencia": topicosSelecionados,
      "Especificacao do Topico Outro": document.getElementById('check-outro')?.checked ? document.getElementById('outro-texto').value.trim() : "",
      "Titulo do Artigo (se artigo)": tipo.value === 'artigo' ? document.getElementById('titulo-artigo').value.trim() : "",
      "Titulo da Macro (se macro)": tipo.value === 'macro' ? document.getElementById('titulo-macro').value.trim() : "",
      "Conteudo Detalhado": document.getElementById('descricao').value.trim(),
      "Urgencia": urgenciaLabels[urgencia.value] || urgencia.value,
      "Anexos": nomesFinal,
      "Anexos_Data": b64Final,
      "Status": "Pendente"
    };

    const sheetName = area.value === 'dg' ? 'DG' : 'eNotas';
    const res = await fetch(SHEETDB_URL, {
      method: "POST",
      headers: { "Content-Type": "application/json", "Accept": "application/json" },
      body: JSON.stringify({ data: sheetPayload, sheet: sheetName })
    });
    if (!res.ok) throw new Error("Status " + res.status);
    progressBar.style.width = '100%'; progressLbl.textContent = 'Concluído!';
    showSuccess();
  } catch (err) {
    btn.disabled = false; btn.textContent = "Enviar solicitação"; btn.style.background = "#E8612A";
    alert("Erro ao enviar. Verifique sua conexão e tente novamente.\n\nDetalhe: " + err.message);
  }
});

function showSuccess() {
  document.getElementById('successBanner').classList.add('visible');
  window.scrollTo({ top: document.body.scrollHeight, behavior: 'smooth' });
}
</script>
</body>
</html>
