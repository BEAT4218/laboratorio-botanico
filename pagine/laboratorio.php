<?php
$titolo_pagina = 'Il Laboratorio';
$pagina_attiva = 'laboratorio';
$root = '../';
$breadcrumb = [['label' => 'Laboratorio']];
include 'head.php';
?>

<section class="hero" style="padding:3.5rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Il Laboratorio</div>
    <h1>Dove la natura<br>diventa <em>formula</em></h1>
    <p>Video didattici, ricette passo-passo e il processo produttivo del laboratorio. Aperto, trasparente, condivisibile.</p>
  </div>
</section>

<!-- ── PROCESSO PRODUTTIVO ── -->
<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>Il Processo Produttivo</h2>
      <p>Dal campo al barattolo: come nascono i prodotti del laboratorio.</p>
    </div>

    <div class="processo-step">
      <div class="step-numero">01</div>
      <div class="step-contenuto">
        <h3>Selezione delle materie prime</h3>
        <p>Tutto parte dalla pianta. Selezioniamo droghe vegetali di qualità certificata, oli vegetali biologici
        e ingredienti cosmetici naturali da fornitori affidabili. Ogni lotto viene verificato e documentato.</p>
      </div>
    </div>

    <div class="processo-step">
      <div class="step-numero">02</div>
      <div class="step-contenuto">
        <h3>Estrazione e preparazione dei principi attivi</h3>
        <p>A seconda del prodotto: distillazione in corrente di vapore per oli essenziali e idrolati,
        macerazione oleosa a freddo per gli oleoliti, estrazione idroalcolica per tinture e estratti fluidi.</p>
      </div>
    </div>

    <div class="processo-step">
      <div class="step-numero">03</div>
      <div class="step-contenuto">
        <h3>Formulazione cosmetica</h3>
        <p>Gli attivi botanici vengono inseriti nelle formulazioni cosmetiche studiate per stabilità
        ed efficacia: emulsioni, sieri, gel, balsami. Ogni ricetta è testata e ottimizzata nel tempo.</p>
      </div>
    </div>

    <div class="processo-step">
      <div class="step-numero">04</div>
      <div class="step-contenuto">
        <h3>Controllo qualità e confezionamento</h3>
        <p>Verifica di pH, viscosità, aspetto e odore. Confezionamento in piccoli lotti con etichettatura
        INCI completa. Ogni prodotto ha una scheda tecnica e un numero di lotto tracciabile.</p>
      </div>
    </div>
  </div>
</section>

<hr class="divider">

<!-- ── VIDEO DIDATTICI ── -->
<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>Video Didattici</h2>
      <p>Guarda come si lavora in laboratorio. Dalle tecniche base alle formulazioni avanzate.</p>
    </div>

    <div class="video-griglia">

      <!-- Video 1 -->
      <div class="video-card">
        <div class="video-placeholder">
          ▶
          <span>Inserire video</span>
        </div>
        <div class="video-info">
          <h4>Come si distilla un olio essenziale</h4>
          <p>Dalla pianta fresca al flacone: il processo completo di distillazione in corrente di vapore.</p>
        </div>
      </div>

      <!-- Video 2 -->
      <div class="video-card">
        <div class="video-placeholder">
          ▶
          <span>Inserire video</span>
        </div>
        <div class="video-info">
          <h4>Preparare un oleolito solare</h4>
          <p>Macerazione di calendula in olio di girasole: selezione della droga, preparazione e filtraggio.</p>
        </div>
      </div>

      <!-- Video 3 -->
      <div class="video-card">
        <div class="video-placeholder">
          ▶
          <span>Inserire video</span>
        </div>
        <div class="video-info">
          <h4>Formulazione di una crema O/A</h4>
          <p>Come si formula e produce una crema olio-in-acqua con ingredienti botanici.</p>
        </div>
      </div>

      <!-- Video 4 -->
      <div class="video-card">
        <div class="video-placeholder">
          ▶
          <span>Inserire video</span>
        </div>
        <div class="video-info">
          <h4>Lo shampoo solido</h4>
          <p>Formulazione e produzione di uno shampoo solido con tensioattivi vegetali.</p>
        </div>
      </div>

      <!-- Video 5 -->
      <div class="video-card">
        <div class="video-placeholder">
          ▶
          <span>Inserire video</span>
        </div>
        <div class="video-info">
          <h4>Idrolati: cos'è e come si usa</h4>
          <p>Proprietà, utilizzi e come riconoscere un idrolato di qualità.</p>
        </div>
      </div>

      <!-- Video 6 — placeholder aggiungibile -->
      <div class="video-card">
        <div class="video-placeholder" style="background: rgba(45,74,47,0.4);">
          <span style="font-size:2rem;">＋</span>
          <span>Prossimamente</span>
        </div>
        <div class="video-info">
          <h4>In arrivo...</h4>
          <p>Nuovi video didattici in preparazione.</p>
        </div>
      </div>

    </div>
  </div>
</section>

<hr class="divider">

<!-- ── RICETTE ── -->
<section class="sezione sezione-alternata">
  <div class="container">
    <div class="titolo-sezione">
      <h2>Ricette del Laboratorio</h2>
      <p>Ricette testate e documentate. Percentuali, metodi e note tecniche per ogni formula.</p>
    </div>

    <div class="griglia griglia-2">

      <div class="card">
        <div class="card-icona">📄</div>
        <h3>Ricetta: Crema Corpo Base</h3>
        <p>Formula base per una crema corpo O/A al 25% di fase oleosa. Adattabile con ogni attivo botanico.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Difficoltà</th><td>⭐⭐ Media</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Tempo</th><td>45 minuti</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Resa</th><td>100 g</td></tr>
        </table>
        <a href="../documenti/ricetta-crema-corpo.pdf" class="btn-scheda">📥 Scarica ricetta (PDF)</a>
      </div>

      <div class="card">
        <div class="card-icona">📄</div>
        <h3>Ricetta: Oleolito di Calendula</h3>
        <p>Macerazione solare classica. Dosaggi, tempi e consigli per un oleolito ricco e stabile.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Difficoltà</th><td>⭐ Facile</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Tempo</th><td>40 giorni macerazione</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Resa</th><td>500 ml</td></tr>
        </table>
        <a href="../documenti/ricetta-oleolito.pdf" class="btn-scheda">📥 Scarica ricetta (PDF)</a>
      </div>

      <div class="card">
        <div class="card-icona">📄</div>
        <h3>Ricetta: Shampoo Solido</h3>
        <p>Formula con SCI e SLSA (tensioattivi vegetali) e burro di cocco. Per capelli normali.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Difficoltà</th><td>⭐⭐⭐ Avanzata</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Tempo</th><td>90 minuti</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Resa</th><td>4 barrette da 65g</td></tr>
        </table>
        <a href="../documenti/ricetta-shampoo.pdf" class="btn-scheda">📥 Scarica ricetta (PDF)</a>
      </div>

      <div class="card">
        <div class="card-icona">📄</div>
        <h3>Ricetta: Siero all'Acido Ialuronico</h3>
        <p>Siero leggero con HA a doppio peso molecolare, idrolato di rosa e niacinamide botanica.</p>
        <table style="width:100%; font-size:0.85rem; margin-top:1rem; border-collapse:collapse;">
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo); width:40%;">Difficoltà</th><td>⭐⭐ Media</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Tempo</th><td>30 minuti</td></tr>
          <tr><th style="text-align:left; padding:0.3rem 0; color:var(--verde-profondo);">Resa</th><td>50 ml</td></tr>
        </table>
        <a href="../documenti/ricetta-siero.pdf" class="btn-scheda">📥 Scarica ricetta (PDF)</a>
      </div>

    </div>
  </div>
</section>

<?php include 'foot.php'; ?>
