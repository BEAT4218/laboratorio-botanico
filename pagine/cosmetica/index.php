<?php
$titolo_pagina = 'Linea Cosmetica';
$pagina_attiva = 'cosmetica';
$root = '../../';
$breadcrumb = [['label' => 'Cosmetica']];
include '../head.php';
?>

<section class="hero" style="padding:3.5rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Linea Cosmetica</div>
    <h1>Cura naturale per<br><em>ogni parte di te</em></h1>
    <p>Prodotti formulati con estratti botanici, oli vegetali biologici e attivi naturali per corpo, viso e capelli.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>Scegli la tua routine</h2>
      <p>Tre linee di prodotti per rispondere alle esigenze di ogni tipo di pelle e capello.</p>
    </div>
    <div class="griglia griglia-3">

      <div class="card">
        <div class="card-icona">🧴</div>
        <h3>Corpo</h3>
        <p>Creme corpo, burri, oli secchi, scrub e sali da bagno. Nutrizione e idratazione dalla testa ai piedi.</p>
        <a href="corpo/index.php" class="btn-scheda">Scopri la linea →</a>
      </div>

      <div class="card">
        <div class="card-icona">✨</div>
        <h3>Viso</h3>
        <p>Sieri, creme giorno e notte, contorno occhi, maschere e detergenti delicati per ogni tipo di pelle.</p>
        <a href="viso/index.php" class="btn-scheda">Scopri la linea →</a>
      </div>

      <div class="card">
        <div class="card-icona">💆</div>
        <h3>Capelli</h3>
        <p>Shampoo solidi, balsami, maschere nutrienti, sieri e trattamenti pre-lavaggio per capelli sani.</p>
        <a href="capelli/index.php" class="btn-scheda">Scopri la linea →</a>
      </div>

    </div>
  </div>
</section>

<section class="sezione sezione-alternata">
  <div class="container" style="max-width:760px; margin:0 auto; text-align:center;">
    <h2>La nostra filosofia cosmetica</h2>
    <p style="font-size:1.05rem; line-height:1.9;">
      Ogni prodotto cosmetico parte da una domanda: <em>cosa serve davvero alla pelle?</em>
      Non ingredienti esotici per fare effetto, ma attivi botanici comprovati, bilanciati
      in formulazioni stabili ed efficaci. Niente parabeni, siliconi o profumi sintetici.
    </p>
  </div>
</section>

<?php include '../foot.php'; ?>
