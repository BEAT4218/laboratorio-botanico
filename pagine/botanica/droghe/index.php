<?php
$titolo_pagina = 'Droghe Vegetali';
$pagina_attiva = 'botanica';
$root = '../../../';
$breadcrumb = [
  ['label' => 'Botanica', 'url' => '../index.php'],
  ['label' => 'Droghe Vegetali']
];
include '../../head.php';
?>

<section class="hero" style="padding:3rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Droghe Vegetali</div>
    <h1>La <em>materia prima</em><br>da cui tutto nasce</h1>
    <p>Piante officinali essiccate, selezionate e conservate con cura. Il punto di partenza di ogni preparazione.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>Le Droghe in Catalogo</h2>
      <p>Disponibili sfuse o in sacchetti da 50g/100g. Essiccazione naturale, conservazione in vasi ermetici.</p>
    </div>
    <div class="griglia griglia-2">

      <div class="essenza-card">
        <div class="essenza-icona">🌼</div>
        <div class="essenza-testo">
          <h3>Fiori di Camomilla — <em>Matricaria chamomilla</em></h3>
          <p>Capolini interi essiccati. Ricchi in flavonoidi e azulene. Per tisane, infusi e macerati.</p>
          <div class="proprieta">
            <span class="tag">Calmante</span><span class="tag">Antispasmodico</span><span class="tag">Antinfiammatorio</span>
          </div>
        </div>
      </div>

      <div class="essenza-card">
        <div class="essenza-icona">💜</div>
        <div class="essenza-testo">
          <h3>Sommità di Lavanda — <em>Lavandula angustifolia</em></h3>
          <p>Sommità fiorite essiccate. Ideali per distillazione, sacchetti profumati e oleoliti.</p>
          <div class="proprieta">
            <span class="tag">Rilassante</span><span class="tag">Aromatica</span><span class="tag">Antisettica</span>
          </div>
        </div>
      </div>

      <div class="essenza-card">
        <div class="essenza-icona">🌿</div>
        <div class="essenza-testo">
          <h3>Parti aeree di Iperico — <em>Hypericum perforatum</em></h3>
          <p>Fiori e foglie raccolti nel periodo della fioritura. Per oleoliti, tinture e tisane.</p>
          <div class="proprieta">
            <span class="tag">Antidepressivo</span><span class="tag">Cicatrizzante</span><span class="tag">Neuroprotettivo</span>
          </div>
        </div>
      </div>

      <div class="essenza-card">
        <div class="essenza-icona">🌻</div>
        <div class="essenza-testo">
          <h3>Fiori di Calendula — <em>Calendula officinalis</em></h3>
          <p>Capolini interi essiccati. Ricchi in carotenoidi e flavonoidi. Ottimi per oleoliti e creme.</p>
          <div class="proprieta">
            <span class="tag">Cicatrizzante</span><span class="tag">Emolliente</span><span class="tag">Antiossidante</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include '../../foot.php'; ?>
