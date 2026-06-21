<?php
$titolo_pagina = 'Cosmetica Viso';
$pagina_attiva = 'cosmetica';
$root = '../../../';
$breadcrumb = [
  ['label' => 'Cosmetica', 'url' => '../index.php'],
  ['label' => 'Viso']
];
include '../../head.php';
?>

<section class="hero" style="padding:3rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Linea Viso</div>
    <h1>Pelle del viso:<br><em>botanica e scienza</em></h1>
    <p>Formulazioni delicate per rispettare e nutrire la pelle del viso, ad ogni età.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>I Prodotti Viso</h2>
    </div>
    <div class="griglia griglia-3">

      <div class="card">
        <div class="scheda-immagine">✨</div>
        <h3 style="margin-top:1rem;">Siero Vitamina C Botanica</h3>
        <p>Estratto di rosa canina, camu camu e ácido ialuronico. Luminosità e antiossidante.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>30 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Uso</th><td>Mattino</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine">🌙</div>
        <h3 style="margin-top:1rem;">Crema Notte Rigenerante</h3>
        <p>Olio di rosa mosqueta, bakuchiol (retinolo botanico) e burro di illipé. Rinnova la pelle durante il sonno.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>50 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Uso</th><td>Sera</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine">☀️</div>
        <h3 style="margin-top:1rem;">Crema Giorno Idratante</h3>
        <p>Idrolato di lavanda, acido ialuronico vegetale e olio di jojoba. Idratazione leggera per il giorno.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>50 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Uso</th><td>Mattino</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine">👁️</div>
        <h3 style="margin-top:1rem;">Contorno Occhi</h3>
        <p>Estratto di edera, caffeina vegetale e peptidi botanici. Riduce gonfiore e occhiaie.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>15 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Uso</th><td>Mattino e sera</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine">🫧</div>
        <h3 style="margin-top:1rem;">Detergente Viso Delicato</h3>
        <p>Tensioattivi vegetali, estratto di calendula e aloe vera. Detersione rispettosa del film idrolipidico.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>100 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Tipo</th><td>Gel delicato</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine">🌿</div>
        <h3 style="margin-top:1rem;">Maschera all'Argilla Verde</h3>
        <p>Argilla verde, estratto di tè verde e olio essenziale di tea tree. Purificante per pelli miste e acneiche.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>75 g</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Uso</th><td>1-2 volte/settimana</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

    </div>
  </div>
</section>

<?php include '../../foot.php'; ?>
