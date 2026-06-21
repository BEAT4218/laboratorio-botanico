<?php
$titolo_pagina = 'Cosmetica Corpo';
$pagina_attiva = 'cosmetica';
$root = '../../../';
$breadcrumb = [
  ['label' => 'Cosmetica', 'url' => '../index.php'],
  ['label' => 'Corpo']
];
include '../../head.php';
?>

<section class="hero" style="padding:3rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Linea Corpo</div>
    <h1><em>Nutrire</em> la pelle<br>con la natura</h1>
    <p>Burri, creme, oli e scrub formulati con ingredienti vegetali di alta qualità.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>I Prodotti</h2>
    </div>
    <div class="griglia griglia-3">

      <!-- Scheda 1 -->
      <div class="card">
        <div class="scheda-immagine">🧴</div>
        <h3 style="margin-top:1rem;">Crema Corpo Idratante</h3>
        <p>Con burro di karitè, aloe vera e olio di mandorle dolci. Per pelli normali e secche.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>100 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Pelle</th><td>Normale / Secca</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Profumo</th><td>Lavanda e ylang-ylang</td></tr>
        </table>
        <a href="crema-corpo.php" class="btn-scheda">Scheda completa →</a>
      </div>

      <!-- Scheda 2 -->
      <div class="card">
        <div class="scheda-immagine">🫧</div>
        <h3 style="margin-top:1rem;">Burro Corpo al Cacao</h3>
        <p>Burro di cacao, olio di argan e vitamina E. Nutrimento intenso per pelli molto secche.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>80 g</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Pelle</th><td>Molto secca</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Profumo</th><td>Cacao e vaniglia</td></tr>
        </table>
        <a href="burro-cacao.php" class="btn-scheda">Scheda completa →</a>
      </div>

      <!-- Scheda 3 -->
      <div class="card">
        <div class="scheda-immagine">🌿</div>
        <h3 style="margin-top:1rem;">Scrub Corpo al Sale</h3>
        <p>Sale marino integrale, olio di jojoba ed estratto di rosmarino. Esfoliazione dolce e rigenerante.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>200 g</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Uso</th><td>1-2 volte/settimana</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Profumo</th><td>Rosmarino e menta</td></tr>
        </table>
        <a href="scrub-sale.php" class="btn-scheda">Scheda completa →</a>
      </div>

      <!-- Scheda 4 -->
      <div class="card">
        <div class="scheda-immagine">💧</div>
        <h3 style="margin-top:1rem;">Olio Secco Corpo</h3>
        <p>Blend di oli vegetali leggeri (jojoba, squalane, argan) con vitamina E. Assorbimento rapido, pelle setosa.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>50 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Pelle</th><td>Tutti i tipi</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Profumo</th><td>Rose e geranio</td></tr>
        </table>
        <a href="olio-secco.php" class="btn-scheda">Scheda completa →</a>
      </div>

      <!-- Scheda 5 -->
      <div class="card">
        <div class="scheda-immagine">🛁</div>
        <h3 style="margin-top:1rem;">Sali da Bagno Botanici</h3>
        <p>Sale dell'Himalaya, olio di mandorle e fiori di lavanda. Un bagno rigenerante per corpo e mente.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>300 g</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Effetto</th><td>Rilassante</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Profumo</th><td>Lavanda e menta</td></tr>
        </table>
        <a href="sali-bagno.php" class="btn-scheda">Scheda completa →</a>
      </div>

      <!-- Scheda 6 -->
      <div class="card">
        <div class="scheda-immagine">🌸</div>
        <h3 style="margin-top:1rem;">Latte Corpo Leggero</h3>
        <p>Idratazione quotidiana leggera con estratto di camomilla, aloe e acido ialuronico vegetale.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>150 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Pelle</th><td>Normale / Mista</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Profumo</th><td>Camomilla e calendula</td></tr>
        </table>
        <a href="latte-corpo.php" class="btn-scheda">Scheda completa →</a>
      </div>

    </div>
  </div>
</section>

<?php include '../../foot.php'; ?>
