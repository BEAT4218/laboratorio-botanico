<?php
$titolo_pagina = 'Specialità Botaniche';
$pagina_attiva = 'botanica';
$root = '../../';
$breadcrumb = [['label' => 'Specialità Botaniche']];
include '../head.php';
?>

<section class="hero" style="padding:3.5rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Specialità Botaniche</div>
    <h1>L'essenza delle piante<br>nella sua forma <em>più pura</em></h1>
    <p>Oli essenziali, idrolati, oleoliti e droghe vegetali: la materia prima botanica senza compromessi.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>Le Famiglie di Prodotti</h2>
      <p>Ogni famiglia è un mondo a sé, con metodi di produzione, caratteristiche e usi specifici.</p>
    </div>
    <div class="griglia griglia-2">

      <div class="card">
        <div class="card-icona">🫧</div>
        <h3>Oli Essenziali</h3>
        <p>
          Ottenuti per distillazione in corrente di vapore o spremitura a freddo.
          Concentrati aromatici e terapeutici ricavati da fiori, foglie, cortecce e radici.
        </p>
        <a href="oli-essenziali/index.php" class="btn-scheda">Scopri →</a>
      </div>

      <div class="card">
        <div class="card-icona">💧</div>
        <h3>Idrolati</h3>
        <p>
          Le acque aromatiche, co-prodotto della distillazione degli oli essenziali.
          Delicati, idratanti, perfetti per uso diretto sulla pelle e come ingredienti cosmetici.
        </p>
        <a href="idrolati/index.php" class="btn-scheda">Scopri →</a>
      </div>

      <div class="card">
        <div class="card-icona">🫙</div>
        <h3>Oleoliti</h3>
        <p>
          Macerati di piante officinali in olio vegetale. Un metodo antico per estrarre
          i principi attivi liposolubili delle piante in un olio ricco e funzionale.
        </p>
        <a href="oleoliti/index.php" class="btn-scheda">Scopri →</a>
      </div>

      <div class="card">
        <div class="card-icona">🌱</div>
        <h3>Droghe Vegetali</h3>
        <p>
          Le materie prime vegetali nella loro forma essiccata o fresca: radici, foglie,
          fiori, semi, cortecce. Il punto di partenza di ogni preparazione botanica.
        </p>
        <a href="droghe/index.php" class="btn-scheda">Scopri →</a>
      </div>

    </div>
  </div>
</section>

<?php include '../foot.php'; ?>
