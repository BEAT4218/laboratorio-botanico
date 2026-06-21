<?php
session_start();

// ── Gestione aggiunta al carrello ──
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aggiungi'])) {
  $id    = htmlspecialchars($_POST['id']);
  $nome  = htmlspecialchars($_POST['nome']);
  $prezzo = floatval($_POST['prezzo']);
  $qty   = max(1, intval($_POST['qty'] ?? 1));

  if (!isset($_SESSION['carrello'][$id])) {
    $_SESSION['carrello'][$id] = ['nome' => $nome, 'prezzo' => $prezzo, 'qty' => 0];
  }
  $_SESSION['carrello'][$id]['qty'] += $qty;

  header('Location: index.php?aggiunto=' . urlencode($nome));
  exit;
}

$aggiunto = $_GET['aggiunto'] ?? '';

// ── Catalogo prodotti ──
// Per aggiungere prodotti: copia un blocco e modifica id, nome, prezzo, descrizione, icona
$prodotti = [
  // COSMETICA — CORPO
  ['id' => 'crema-corpo',    'cat' => 'Corpo',          'icona' => '🧴', 'nome' => 'Crema Corpo Idratante',      'prezzo' => 18.00, 'desc' => 'Burro di karitè, aloe vera, olio di mandorle. 100 ml.'],
  ['id' => 'burro-cacao',    'cat' => 'Corpo',          'icona' => '🫧', 'nome' => 'Burro Corpo al Cacao',        'prezzo' => 15.00, 'desc' => 'Burro di cacao, olio di argan e vitamina E. 80 g.'],
  ['id' => 'scrub-sale',     'cat' => 'Corpo',          'icona' => '🌿', 'nome' => 'Scrub Corpo al Sale',         'prezzo' => 12.00, 'desc' => 'Sale marino, olio di jojoba, rosmarino. 200 g.'],
  ['id' => 'olio-secco',     'cat' => 'Corpo',          'icona' => '💧', 'nome' => 'Olio Secco Corpo',            'prezzo' => 22.00, 'desc' => 'Jojoba, squalane, argan, vitamina E. 50 ml.'],
  // COSMETICA — VISO
  ['id' => 'siero-vitc',     'cat' => 'Viso',           'icona' => '✨', 'nome' => 'Siero Vitamina C Botanica',  'prezzo' => 28.00, 'desc' => 'Rosa canina, camu camu, acido ialuronico. 30 ml.'],
  ['id' => 'crema-notte',    'cat' => 'Viso',           'icona' => '🌙', 'nome' => 'Crema Notte Rigenerante',     'prezzo' => 32.00, 'desc' => 'Olio di rosa mosqueta, bakuchiol. 50 ml.'],
  ['id' => 'crema-giorno',   'cat' => 'Viso',           'icona' => '☀️', 'nome' => 'Crema Giorno Idratante',     'prezzo' => 26.00, 'desc' => 'Idrolato di lavanda, acido ialuronico. 50 ml.'],
  // COSMETICA — CAPELLI
  ['id' => 'shampoo-solido', 'cat' => 'Capelli',        'icona' => '🧼', 'nome' => 'Shampoo Solido Nutriente',   'prezzo' => 10.00, 'desc' => 'Tensioattivi vegetali, burro di cocco. 65 g.'],
  ['id' => 'balsamo',        'cat' => 'Capelli',        'icona' => '🫙', 'nome' => 'Balsamo Districante',         'prezzo' => 14.00, 'desc' => 'Burro di mango, olio di argan, pantenolo. 150 ml.'],
  // BOTANICA
  ['id' => 'oe-lavanda',     'cat' => 'Oli Essenziali', 'icona' => '💜', 'nome' => 'OE Lavanda',                 'prezzo' => 12.00, 'desc' => 'Lavandula angustifolia, distillato in vapore. 10 ml.'],
  ['id' => 'oe-teatree',     'cat' => 'Oli Essenziali', 'icona' => '🌲', 'nome' => 'OE Tea Tree',                'prezzo' => 10.00, 'desc' => 'Melaleuca alternifolia, puro 100%. 10 ml.'],
  ['id' => 'oe-arancio',     'cat' => 'Oli Essenziali', 'icona' => '🍊', 'nome' => 'OE Arancio Dolce',           'prezzo' => 8.00,  'desc' => 'Citrus sinensis, spremitura a freddo. 10 ml.'],
  ['id' => 'idr-rosa',       'cat' => 'Idrolati',       'icona' => '🌹', 'nome' => 'Idrolato di Rosa',           'prezzo' => 14.00, 'desc' => 'Rosa damascena, distillato. 100 ml.'],
  ['id' => 'idr-lavanda',    'cat' => 'Idrolati',       'icona' => '💜', 'nome' => 'Idrolato di Lavanda',        'prezzo' => 12.00, 'desc' => 'Lavandula angustifolia, distillato. 100 ml.'],
  ['id' => 'ole-calendula',  'cat' => 'Oleoliti',       'icona' => '🌻', 'nome' => 'Oleolito di Calendula',      'prezzo' => 16.00, 'desc' => 'Calendula in olio di girasole bio. 50 ml.'],
  ['id' => 'ole-iperico',    'cat' => 'Oleoliti',       'icona' => '🌿', 'nome' => 'Oleolito di Iperico',        'prezzo' => 16.00, 'desc' => 'Hypericum perforatum in olio di oliva. 50 ml.'],
];

$categorie = array_unique(array_column($prodotti, 'cat'));

$titolo_pagina = 'Shop';
$pagina_attiva = 'shop';
$root = '../../';
$breadcrumb = [['label' => 'Shop']];
include '../head.php';
?>

<section class="hero" style="padding:2.5rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Shop</div>
    <h1>I nostri <em>prodotti</em></h1>
    <p>Aggiungi i prodotti al carrello e invia la tua lista — ti risponderemo con le istruzioni per l'ordine.</p>
  </div>
</section>

<?php if ($aggiunto): ?>
<div style="background:var(--verde-salvia); color:white; text-align:center; padding:0.8rem; font-size:0.9rem;">
  ✓ <strong><?= htmlspecialchars($aggiunto) ?></strong> aggiunto al carrello —
  <a href="carrello.php" style="color:white; text-decoration:underline;">Vai al carrello</a>
</div>
<?php endif; ?>

<section class="sezione">
  <div class="container">

    <!-- Filtri per categoria -->
    <div style="display:flex; flex-wrap:wrap; gap:0.5rem; margin-bottom:2.5rem; justify-content:center;">
      <button onclick="filtra('tutte')" class="btn-filtro attivo" id="btn-tutte">Tutti</button>
      <?php foreach ($categorie as $cat): ?>
        <button onclick="filtra('<?= htmlspecialchars($cat) ?>')"
                class="btn-filtro" id="btn-<?= htmlspecialchars($cat) ?>">
          <?= htmlspecialchars($cat) ?>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Griglia prodotti -->
    <div class="griglia griglia-3" id="griglia-prodotti">
      <?php foreach ($prodotti as $p): ?>
      <div class="card prodotto-card" data-cat="<?= htmlspecialchars($p['cat']) ?>">
        <div class="scheda-immagine" style="font-size:3.5rem; height:120px;">
          <?= $p['icona'] ?>
        </div>
        <div style="font-size:0.75rem; color:var(--verde-salvia); text-transform:uppercase;
                    letter-spacing:0.08em; margin-top:0.8rem; font-weight:500;">
          <?= htmlspecialchars($p['cat']) ?>
        </div>
        <h3 style="margin:0.3rem 0 0.5rem;"><?= htmlspecialchars($p['nome']) ?></h3>
        <p style="font-size:0.88rem; margin-bottom:0.8rem;"><?= htmlspecialchars($p['desc']) ?></p>
        <div style="font-family:var(--font-display); font-size:1.4rem; color:var(--verde-profondo); margin-bottom:1rem;">
          € <?= number_format($p['prezzo'], 2, ',', '.') ?>
        </div>
        <form method="post">
          <input type="hidden" name="id"     value="<?= $p['id'] ?>">
          <input type="hidden" name="nome"   value="<?= htmlspecialchars($p['nome']) ?>">
          <input type="hidden" name="prezzo" value="<?= $p['prezzo'] ?>">
          <div style="display:flex; gap:0.5rem; align-items:center;">
            <input type="number" name="qty" value="1" min="1" max="20"
              style="width:60px; padding:0.4rem; border:1px solid var(--bordo);
                     border-radius:4px; text-align:center; font-size:0.9rem;">
            <button type="submit" name="aggiungi" value="1"
              style="flex:1; padding:0.5rem; background:var(--verde-profondo); color:var(--crema);
                     border:none; border-radius:4px; cursor:pointer; font-size:0.85rem;
                     font-family:var(--font-corpo); letter-spacing:0.05em; transition:background 0.3s;">
              + Aggiungi
            </button>
          </div>
        </form>
      </div>
      <?php endforeach; ?>
    </div>

    <!-- Link carrello -->
    <div style="text-align:center; margin-top:3rem;">
      <a href="carrello.php"
         style="display:inline-block; padding:0.85rem 2.5rem; background:var(--oro-botanico);
                color:#1a2e1b; border-radius:4px; font-weight:500; font-size:0.95rem;">
        🛒 Vai al carrello e invia l'ordine
      </a>
    </div>

  </div>
</section>

<!-- Script filtri -->
<style>
.btn-filtro {
  padding:0.4rem 1.1rem; border:1px solid var(--bordo); border-radius:20px;
  background:var(--crema); cursor:pointer; font-family:var(--font-corpo);
  font-size:0.82rem; color:var(--testo-leggero); transition:all 0.2s;
}
.btn-filtro.attivo, .btn-filtro:hover {
  background:var(--verde-profondo); color:var(--crema); border-color:var(--verde-profondo);
}
.prodotto-card.nascosta { display:none; }
</style>
<script>
function filtra(cat) {
  document.querySelectorAll('.btn-filtro').forEach(b => b.classList.remove('attivo'));
  document.getElementById('btn-' + (cat === 'tutte' ? 'tutte' : cat)).classList.add('attivo');
  document.querySelectorAll('.prodotto-card').forEach(card => {
    if (cat === 'tutte' || card.dataset.cat === cat) {
      card.classList.remove('nascosta');
    } else {
      card.classList.add('nascosta');
    }
  });
}
</script>

<?php include '../foot.php'; ?>
