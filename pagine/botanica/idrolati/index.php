<?php
$titolo_pagina = 'Idrolati';
$pagina_attiva = 'botanica';
$root = '../../../';
$breadcrumb = [
  ['label' => 'Botanica', 'url' => '../index.php'],
  ['label' => 'Idrolati']
];
include '../../head.php';
?>

<section class="hero" style="padding:3rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Idrolati</div>
    <h1>L'acqua <em>aromatica</em><br>delle piante</h1>
    <p>Ottenuti per distillazione, delicati e versatili. Idratano, leniscono e profumano con delicatezza.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>I Nostri Idrolati</h2>
      <p>Tutti prodotti nel nostro laboratorio tramite distillazione in corrente di vapore.</p>
    </div>
    <div class="griglia griglia-3">

      <div class="card">
        <div class="scheda-immagine" style="font-size:3rem;">🌹</div>
        <h3 style="margin-top:1rem;">Idrolato di Rosa</h3>
        <p><em>Rosa damascena</em> — Idratante, lenitivo, tonico. Il classico per eccellenza per la pelle del viso.</p>
        <div class="proprieta">
          <span class="tag">Idratante</span><span class="tag">Tonico</span><span class="tag">Lenitivo</span>
        </div>
        <table style="width:100%; font-size:0.82rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:45%;">Formato</th><td>100 ml / 250 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">pH</th><td>4.5 – 5.0</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine" style="font-size:3rem;">💜</div>
        <h3 style="margin-top:1rem;">Idrolato di Lavanda</h3>
        <p><em>Lavandula angustifolia</em> — Rilassante e purificante. Ottimo come tonico serale e lenitivo per eritemi.</p>
        <div class="proprieta">
          <span class="tag">Rilassante</span><span class="tag">Purificante</span><span class="tag">Cicatrizzante</span>
        </div>
        <table style="width:100%; font-size:0.82rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:45%;">Formato</th><td>100 ml / 250 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">pH</th><td>5.0 – 5.5</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

      <div class="card">
        <div class="scheda-immagine" style="font-size:3rem;">🌼</div>
        <h3 style="margin-top:1rem;">Idrolato di Camomilla</h3>
        <p><em>Matricaria chamomilla</em> — Lenitivo per pelli sensibili, antinfiammatorio. Ideale per bambini.</p>
        <div class="proprieta">
          <span class="tag">Lenitivo</span><span class="tag">Antinfiammatorio</span><span class="tag">Delicato</span>
        </div>
        <table style="width:100%; font-size:0.82rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:45%;">Formato</th><td>100 ml / 250 ml</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">pH</th><td>4.8 – 5.2</td></tr>
        </table>
        <a href="#" class="btn-scheda">Scheda completa →</a>
      </div>

    </div>
  </div>
</section>

<?php include '../../foot.php'; ?>
