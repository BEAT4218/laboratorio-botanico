<?php
$titolo_pagina = 'Oli Essenziali';
$pagina_attiva = 'botanica';
$root = '../../../';
$breadcrumb = [
  ['label' => 'Botanica', 'url' => '../index.php'],
  ['label' => 'Oli Essenziali']
];
include '../../head.php';
?>

<section class="hero" style="padding:3rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Oli Essenziali</div>
    <h1>L'<em>anima aromatica</em><br>della pianta</h1>
    <p>Distillati in corrente di vapore, 100% puri e naturali. Nessun additivo, nessuna diluizione.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>I Nostri Oli Essenziali</h2>
    </div>
    <div class="griglia griglia-3">

      <div class="card">
        <div class="scheda-immagine" style="font-size:3rem;">💜</div>
        <h3 style="margin-top:1rem;">Olio Essenziale di Lavanda</h3>
        <p><em>Lavandula angustifolia</em> — Parte usata: sommità fiorite</p>
        <div class="proprieta">
          <span class="tag">Rilassante</span>
          <span class="tag">Cicatrizzante</span>
          <span class="tag">Antisettico</span>
        </div>
        <table style="width:100%; font-size:0.82rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:45%;">Metodo</th><td>Distillazione vapore</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Formato</th><td>10 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Origine</th><td>Italia / Francia</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine" style="font-size:3rem;">🌲</div>
        <h3 style="margin-top:1rem;">Olio Essenziale di Tea Tree</h3>
        <p><em>Melaleuca alternifolia</em> — Parte usata: foglie e ramoscelli</p>
        <div class="proprieta">
          <span class="tag">Antibatterico</span>
          <span class="tag">Antimicotico</span>
          <span class="tag">Purificante</span>
        </div>
        <table style="width:100%; font-size:0.82rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:45%;">Metodo</th><td>Distillazione vapore</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Formato</th><td>10 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Origine</th><td>Australia</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine" style="font-size:3rem;">🍊</div>
        <h3 style="margin-top:1rem;">Olio Essenziale di Arancio</h3>
        <p><em>Citrus sinensis</em> — Parte usata: scorze</p>
        <div class="proprieta">
          <span class="tag">Tonico</span>
          <span class="tag">Antidepressivo</span>
          <span class="tag">Digestivo</span>
        </div>
        <table style="width:100%; font-size:0.82rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:45%;">Metodo</th><td>Spremitura a freddo</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Formato</th><td>10 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Origine</th><td>Sicilia, Italia</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

    </div>
  </div>
</section>

<?php include '../../foot.php'; ?>
