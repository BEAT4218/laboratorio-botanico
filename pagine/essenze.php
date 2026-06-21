<?php
$titolo_pagina = 'Essenze Botaniche';
$pagina_attiva = 'essenze';
$root = '../';
$breadcrumb = [['label' => 'Essenze Botaniche']];
include 'head.php';
?>

<section class="hero" style="padding:3.5rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Erbario del Laboratorio</div>
    <h1>Le piante che<br><em>utilizziamo</em></h1>
    <p>Un erbario digitale delle droghe vegetali protagoniste delle nostre preparazioni: storia, proprietà e utilizzi.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>Le Nostre Piante Officinali</h2>
      <p>
        Ogni scheda descrive la pianta, la parte usata (droga), i principi attivi principali
        e i possibili impieghi cosmetici e fitoterapici.
      </p>
    </div>

    <!-- CAMOMILLA -->
    <div class="essenza-card">
      <div class="essenza-icona">🌼</div>
      <div class="essenza-testo">
        <h3>Camomilla — <em>Matricaria chamomilla</em> L.</h3>
        <p><strong>Famiglia:</strong> Asteraceae | <strong>Parte usata:</strong> Capolini (fiori)</p>
        <p>
          La camomilla è una delle piante officinali più conosciute e utilizzate al mondo.
          I suoi capolini sono ricchi in <em>alfa-bisabololo</em>, <em>azulene</em> (dalla distillazione),
          flavonoidi (apigenina) e mucillagini. Ha proprietà antinfiammatorie, calmanti, antispasmodiche
          e cicatrizzanti. In cosmetica viene usata in creme lenitivo, lozioni per pelli sensibili, shampoo
          per capelli chiari e idrolati.
        </p>
        <div class="proprieta">
          <span class="tag">Antinfiammatoria</span>
          <span class="tag">Lenitiva</span>
          <span class="tag">Cicatrizzante</span>
          <span class="tag">Antispasmodica</span>
          <span class="tag">Calmante</span>
        </div>
      </div>
    </div>

    <!-- LAVANDA -->
    <div class="essenza-card">
      <div class="essenza-icona">💜</div>
      <div class="essenza-testo">
        <h3>Lavanda — <em>Lavandula angustifolia</em> Mill.</h3>
        <p><strong>Famiglia:</strong> Lamiaceae | <strong>Parte usata:</strong> Sommità fiorite</p>
        <p>
          La lavanda vera è una delle piante più versatili in aromaterapia e cosmetica.
          Il suo olio essenziale, ricco in <em>linalolo</em> e <em>acetato di linalile</em>,
          ha proprietà calmanti, antisettiche, cicatrizzanti e insetto-repellenti. L'idrolato è uno dei
          più delicati e polivalenti: tonico viso, spray corpoativo, lenitivo per scottature e punture.
          In erboristeria viene usata anche per problemi del sonno e stati ansiosi.
        </p>
        <div class="proprieta">
          <span class="tag">Rilassante</span>
          <span class="tag">Antisettica</span>
          <span class="tag">Cicatrizzante</span>
          <span class="tag">Insetto-repellente</span>
          <span class="tag">Aromatica</span>
        </div>
      </div>
    </div>

    <!-- IPERICO -->
    <div class="essenza-card">
      <div class="essenza-icona">🌻</div>
      <div class="essenza-testo">
        <h3>Iperico — <em>Hypericum perforatum</em> L.</h3>
        <p><strong>Famiglia:</strong> Hypericaceae | <strong>Parte usata:</strong> Sommità fiorite</p>
        <p>
          Chiamato anche "erba di San Giovanni", l'iperico è conosciuto soprattutto per le sue
          proprietà antidepressive (ipericina, iperforina). Il suo oleolito — rosso carminio —
          è antinfiammatorio, analgesico e cicatrizzante. Utilizzato per dolori muscolari, eritemi,
          nevralgie e scottature. In cosmetica entra in creme lenitivo, oli da massaggio e sieri riparativi.
          <em>Attenzione: fotosensibilizzante, non usare su pelle esposta al sole.</em>
        </p>
        <div class="proprieta">
          <span class="tag">Antinfiammatorio</span>
          <span class="tag">Analgesico</span>
          <span class="tag">Cicatrizzante</span>
          <span class="tag">Antidepressivo</span>
          <span class="tag">⚠ Fotosensibilizzante</span>
        </div>
      </div>
    </div>

    <!-- CALENDULA -->
    <div class="essenza-card">
      <div class="essenza-icona">🌸</div>
      <div class="essenza-testo">
        <h3>Calendula — <em>Calendula officinalis</em> L.</h3>
        <p><strong>Famiglia:</strong> Asteraceae | <strong>Parte usata:</strong> Capolini</p>
        <p>
          La calendula è la pianta cosmetica per eccellenza. I suoi capolini sono ricchi in
          <em>carotenoidi</em> (che colorano l'oleolito di giallo dorato), <em>flavonoidi</em>,
          acidi triterpenici e saponine. Ha spiccate proprietà emollienti, cicatrizzanti, lenitivo
          e antiossidanti. Ideale per pelli secche, screpolate, arrossate o con dermatiti. Ingrediente
          immancabile in creme per neonati, dopobarba e prodotti per pelli sensibili.
        </p>
        <div class="proprieta">
          <span class="tag">Emolliente</span>
          <span class="tag">Cicatrizzante</span>
          <span class="tag">Antiossidante</span>
          <span class="tag">Lenitiva</span>
          <span class="tag">Protettiva</span>
        </div>
      </div>
    </div>

    <!-- ROSMARINO -->
    <div class="essenza-card">
      <div class="essenza-icona">🌿</div>
      <div class="essenza-testo">
        <h3>Rosmarino — <em>Salvia rosmarinus</em> Spenn.</h3>
        <p><strong>Famiglia:</strong> Lamiaceae | <strong>Parte usata:</strong> Foglie e rametti giovani</p>
        <p>
          Il rosmarino è tonificante, antiossidante (acido rosmarinico, carnosolo) e stimolante
          della circolazione. In cosmetica capelli è uno degli ingredienti più studiati per la
          prevenzione della caduta: stimola i follicoli piliferi e migliora la microcircolazione del cuoio
          capelluto. Il suo olio essenziale (1,8-cineolo, canfora, borneolo) è usato in prodotti
          capillari, toniche e oli da massaggio per gambe pesanti.
        </p>
        <div class="proprieta">
          <span class="tag">Tonificante</span>
          <span class="tag">Antiossidante</span>
          <span class="tag">Anticaduta</span>
          <span class="tag">Circolatorio</span>
          <span class="tag">Aromatico</span>
        </div>
      </div>
    </div>

    <!-- ROSA -->
    <div class="essenza-card">
      <div class="essenza-icona">🌹</div>
      <div class="essenza-testo">
        <h3>Rosa — <em>Rosa damascena</em> Mill. / <em>Rosa centifolia</em> L.</h3>
        <p><strong>Famiglia:</strong> Rosaceae | <strong>Parte usata:</strong> Petali freschi</p>
        <p>
          La rosa è la regina delle piante cosmetiche. L'idrolato di rosa è forse il tonico
          viso più antico e universale: equilibra il pH cutaneo, idrata e lenisce. L'olio essenziale
          (geraniol, citronellolo, nerolo) è tra i più preziosi in aromaterapia e profumeria.
          I petali macerati in olio danno un oleolito profumatissimo, antiossidante e rigenerante.
          In cosmetica entra in creme antiaging, sieri, maschere e profumi naturali.
        </p>
        <div class="proprieta">
          <span class="tag">Idratante</span>
          <span class="tag">Antiaging</span>
          <span class="tag">Riequilibrante</span>
          <span class="tag">Antiossidante</span>
          <span class="tag">Emolliente</span>
        </div>
      </div>
    </div>

    <!-- TEA TREE -->
    <div class="essenza-card">
      <div class="essenza-icona">🌲</div>
      <div class="essenza-testo">
        <h3>Tea Tree — <em>Melaleuca alternifolia</em> (Maiden & Betche) Cheel</h3>
        <p><strong>Famiglia:</strong> Myrtaceae | <strong>Parte usata:</strong> Foglie e ramoscelli</p>
        <p>
          L'olio essenziale di tea tree è uno dei più studiati per le sue proprietà antimicrobiche.
          Ricco in <em>terpinen-4-olo</em>, è attivo contro batteri, funghi e alcuni virus.
          In cosmetica viene usato in prodotti per pelli acneiche, detergenti per il corpo,
          shampoo antiforfora e trattamenti per le unghie. Va sempre diluito prima dell'uso topico.
        </p>
        <div class="proprieta">
          <span class="tag">Antibatterico</span>
          <span class="tag">Antimicotico</span>
          <span class="tag">Purificante</span>
          <span class="tag">Antivirale</span>
          <span class="tag">Seboregolatore</span>
        </div>
      </div>
    </div>

  </div>
</section>

<section class="sezione sezione-alternata" style="text-align:center;">
  <h2>Stai cercando una pianta specifica?</h2>
  <p style="max-width:500px; margin:0 auto 1.5rem;">
    Contattaci per informazioni su droghe non presenti in questa pagina.
    Aggiorniamo regolarmente il catalogo con nuove specie.
  </p>
  <a href="contatti.php" style="display:inline-block; padding:0.75rem 2rem;
     background:var(--verde-profondo); color:var(--crema); border-radius:4px; font-size:0.9rem;">
    ✉ Contattaci
  </a>
</section>

<?php include 'foot.php'; ?>
