<?php
$titolo_pagina = 'Home';
$pagina_attiva = 'home';
$root = './';
include 'pagine/head.php';
?>

<!-- ── HERO ── -->
<section class="hero">
  <div class="hero-contenuto">
    <div class="tag-botanico">✦ Laboratorio Artigianale ✦</div>
    <h1>La natura in ogni<br><em>goccia</em></h1>
    <p>
      Cosmetici botanici e specialità erboristiche prodotte con cura,
      passione e rispetto per le piante officinali del territorio.
    </p>
    <a href="pagine/cosmetica/index.php" style="display:inline-block; margin-right:1rem;
       padding:0.75rem 2rem; background:var(--oro-botanico); color:#1a2e1b;
       font-weight:500; border-radius:4px; font-size:0.9rem; letter-spacing:0.05em;">
      Scopri i Prodotti
    </a>
    <a href="pagine/laboratorio.php" style="display:inline-block;
       padding:0.75rem 2rem; border:1px solid rgba(255,255,255,0.4); color:var(--crema);
       font-weight:300; border-radius:4px; font-size:0.9rem;">
      Il Laboratorio
    </a>
  </div>
</section>

<!-- ── INTRO PROGETTO ── -->
<section class="sezione">
  <div style="max-width:780px; margin:0 auto; text-align:center;">
    <div class="titolo-sezione">
      <h2>Il Progetto</h2>
    </div>
    <p style="font-size:1.1rem; line-height:1.9; color:var(--testo-leggero);">
      Questo laboratorio nasce dalla volontà di unire la tradizione erboristica
      alla cosmetica naturale. Ogni prodotto è formulato partendo dalla conoscenza
      approfondita delle piante officinali: i loro principi attivi, le loro proprietà,
      il modo in cui si estraggono e si conservano.
    </p>
    <p style="font-size:1.05rem; line-height:1.9; color:var(--testo-leggero);">
      Non semplici ricette, ma un percorso formativo e produttivo che parte dalla
      <strong>droga vegetale</strong> — la pianta stessa — e arriva al prodotto finito,
      attraverso estrazioni, macerati, distillazioni e formulazioni cosmetiche studiate
      nei minimi dettagli. Tutto documentato, tutto condivisibile.
    </p>
  </div>
</section>

<!-- ── LE DUE LINEE ── -->
<section class="sezione sezione-alternata">
  <div class="container">
    <div class="titolo-sezione">
      <h2>Le Nostre Linee</h2>
      <p>Due famiglie di prodotti, un'unica filosofia: rispetto per le materie prime naturali.</p>
    </div>
    <div class="griglia griglia-2">

      <div class="card" style="border-top: 3px solid var(--verde-salvia);">
        <div class="card-icona">🧴</div>
        <h3>Linea Cosmetica</h3>
        <p>
          Creme, sieri, balsami e prodotti per la cura quotidiana di corpo, viso e capelli.
          Formulati con estratti vegetali, oli biologici e attivi botanici selezionati.
        </p>
        <div style="display:flex; gap:0.5rem; flex-wrap:wrap; margin-top:1rem;">
          <a href="pagine/cosmetica/corpo/index.php" class="tag">Corpo</a>
          <a href="pagine/cosmetica/viso/index.php" class="tag">Viso</a>
          <a href="pagine/cosmetica/capelli/index.php" class="tag">Capelli</a>
        </div>
        <a href="pagine/cosmetica/index.php" class="btn-scheda">Esplora la linea →</a>
      </div>

      <div class="card" style="border-top: 3px solid var(--oro-botanico);">
        <div class="card-icona">🌿</div>
        <h3>Specialità Botaniche</h3>
        <p>
          Oli essenziali, idrolati, oleoliti e droghe vegetali prodotti seguendo
          processi tradizionali e moderni. La materia prima botanica nella sua forma
          più pura e concentrata.
        </p>
        <div style="display:flex; gap:0.5rem; flex-wrap:wrap; margin-top:1rem;">
          <a href="pagine/botanica/oli-essenziali/index.php" class="tag">Oli Essenziali</a>
          <a href="pagine/botanica/idrolati/index.php" class="tag">Idrolati</a>
          <a href="pagine/botanica/oleoliti/index.php" class="tag">Oleoliti</a>
        </div>
        <a href="pagine/botanica/index.php" class="btn-scheda">Esplora la linea →</a>
      </div>

    </div>
  </div>
</section>

<!-- ── PUNTI DI FORZA ── -->
<section class="sezione">
  <div class="container">
    <div class="titolo-sezione">
      <h2>Perché sceglierci</h2>
    </div>
    <div class="griglia griglia-4">
      <div style="text-align:center; padding:1.5rem;">
        <div style="font-size:2.5rem; margin-bottom:0.75rem;">🌱</div>
        <h4>100% Naturale</h4>
        <p style="font-size:0.9rem;">Materie prime selezionate, senza conservanti sintetici né ingredienti di origine petrolchimica.</p>
      </div>
      <div style="text-align:center; padding:1.5rem;">
        <div style="font-size:2.5rem; margin-bottom:0.75rem;">🔬</div>
        <h4>Formulazione Scientifica</h4>
        <p style="font-size:0.9rem;">Ogni prodotto è frutto di studio, test e affinamento delle ricette nel tempo.</p>
      </div>
      <div style="text-align:center; padding:1.5rem;">
        <div style="font-size:2.5rem; margin-bottom:0.75rem;">📖</div>
        <h4>Trasparenza Totale</h4>
        <p style="font-size:0.9rem;">Ingredienti, processi e ricette documentati e condivisi per chi vuole imparare.</p>
      </div>
      <div style="text-align:center; padding:1.5rem;">
        <div style="font-size:2.5rem; margin-bottom:0.75rem;">🏡</div>
        <h4>Produzione Artigianale</h4>
        <p style="font-size:0.9rem;">Piccoli lotti, attenzione ai dettagli, qualità che la produzione industriale non può offrire.</p>
      </div>
    </div>
  </div>
</section>

<!-- ── CALL TO ACTION LABORATORIO ── -->
<section class="sezione sezione-scura" style="text-align:center;">
  <h2>Entra nel Laboratorio</h2>
  <p style="max-width:500px; margin:0 auto 2rem;">
    Video didattici, ricette passo-passo e il dietro le quinte della produzione.
    Impara come si fanno i cosmetici botanici.
  </p>
  <a href="pagine/laboratorio.php" style="display:inline-block;
     padding:0.85rem 2.5rem; background:var(--oro-botanico); color:#1a2e1b;
     font-weight:500; border-radius:4px; font-size:0.95rem;">
    📹 Guarda i video didattici
  </a>
</section>

<?php include 'pagine/foot.php'; ?>
