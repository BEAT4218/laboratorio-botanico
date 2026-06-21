<?php
$titolo_pagina = 'Oleoliti';
$pagina_attiva = 'botanica';
$root = '../../../';
$breadcrumb = [
  ['label' => 'Botanica', 'url' => '../index.php'],
  ['label' => 'Oleoliti']
];
include '../../head.php';
?>

<section class="hero" style="padding:3rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Oleoliti</div>
    <h1>L'olio che <em>ascolta</em><br>la pianta</h1>
    <p>Macerati oleosi tradizionali: i principi attivi della pianta estratti lentamente in un olio vettore di qualità.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>I Nostri Oleoliti</h2>
      <p>Macerazione a freddo (solare) e a caldo. Ogni lotto è preparato con piante selezionate.</p>
    </div>
    <div class="griglia griglia-3">

      <div class="card">
        <div class="scheda-immagine" style="font-size:3rem;">🌻</div>
        <h3 style="margin-top:1rem;">Oleolito di Calendula</h3>
        <p><em>Calendula officinalis</em> in olio di girasole bio. Lenitivo, cicatrizzante, nutriente. Il classico per neonati e pelli sensibili.</p>
        <div class="proprieta">
          <span class="tag">Cicatrizzante</span><span class="tag">Lenitivo</span><span class="tag">Nutriente</span>
        </div>
        <table style="width:100%; font-size:0.82rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:45%;">Olio base</th><td>Girasole biologico</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Macerazione</th><td>40 giorni al sole</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Formato</th><td>50 ml / 100 ml</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine" style="font-size:3rem;">🌿</div>
        <h3 style="margin-top:1rem;">Oleolito di Iperico</h3>
        <p><em>Hypericum perforatum</em> in olio di oliva. Antinfiammatorio, analgesico. Il rosso olio di San Giovanni.</p>
        <div class="proprieta">
          <span class="tag">Antinfiammatorio</span><span class="tag">Analgesico</span><span class="tag">Riparatore</span>
        </div>
        <table style="width:100%; font-size:0.82rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:45%;">Olio base</th><td>Oliva extra vergine</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Macerazione</th><td>40 giorni al sole</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Formato</th><td>50 ml / 100 ml</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine" style="font-size:3rem;">🌹</div>
        <h3 style="margin-top:1rem;">Oleolito di Rosa</h3>
        <p><em>Rosa centifolia</em> petali in olio di jojoba. Antiossidante, rigenerante, profumatissimo.</p>
        <div class="proprieta">
          <span class="tag">Antiossidante</span><span class="tag">Rigenerante</span><span class="tag">Emolliente</span>
        </div>
        <table style="width:100%; font-size:0.82rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:45%;">Olio base</th><td>Jojoba biologico</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Macerazione</th><td>30 giorni</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Formato</th><td>50 ml</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

    </div>
  </div>
</section>

<?php include '../../foot.php'; ?>
