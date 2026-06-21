<?php
$titolo_pagina = 'Cosmetica Capelli';
$pagina_attiva = 'cosmetica';
$root = '../../../';
$breadcrumb = [
  ['label' => 'Cosmetica', 'url' => '../index.php'],
  ['label' => 'Capelli']
];
include '../../head.php';
?>

<section class="hero" style="padding:3rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Linea Capelli</div>
    <h1>Capelli sani<br>con la forza delle <em>piante</em></h1>
    <p>Shampoo solidi, balsami e trattamenti formulati per rispettare il capello e il cuoio capelluto.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>I Prodotti Capelli</h2>
    </div>
    <div class="griglia griglia-3">

      <div class="card">
        <div class="scheda-immagine">🧼</div>
        <h3 style="margin-top:1rem;">Shampoo Solido Nutriente</h3>
        <p>Tensioattivi vegetali solidi, burro di cacao, proteina del riso. Capelli morbidi e nutriti, zero plastiche.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Peso</th><td>65 g (≈ 60 lavaggi)</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Capello</th><td>Secco / Normale</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine">🫙</div>
        <h3 style="margin-top:1rem;">Balsamo Districante</h3>
        <p>Burro di mango, olio di argan e pantenolo vegetale. Scioglie i nodi senza appesantire.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>150 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Capello</th><td>Tutti i tipi</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine">💆</div>
        <h3 style="margin-top:1rem;">Maschera Ristrutturante</h3>
        <p>Proteine della seta, olio di moringa e keratina vegetale. Ristruttura il capello danneggiato in profondità.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>200 g</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Uso</th><td>1 volta/settimana</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine">💧</div>
        <h3 style="margin-top:1rem;">Olio Pre-Lavaggio</h3>
        <p>Olio di cocco vergine, olio di semi di lino e olio essenziale di rosmarino. Trattamento pre-shampoo anticaduta.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>50 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Capello</th><td>Qualsiasi tipo</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine">🌿</div>
        <h3 style="margin-top:1rem;">Tonico Cuoio Capelluto</h3>
        <p>Idrolato di rosmarino, caffeina ed estratto di ortica. Stimola la crescita e riduce la caduta.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Formato</th><td>100 ml spray</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Uso</th><td>Quotidiano</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

    </div>
  </div>
</section>

<?php include '../../foot.php'; ?>
