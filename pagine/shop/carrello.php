<?php
session_start();

// ── Aggiorna quantità ──
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['aggiorna'])) {
  foreach ($_POST['qty'] as $id => $qty) {
    $qty = intval($qty);
    if ($qty <= 0) {
      unset($_SESSION['carrello'][$id]);
    } else {
      $_SESSION['carrello'][$id]['qty'] = $qty;
    }
  }
  header('Location: carrello.php');
  exit;
}

// ── Rimuovi singolo prodotto ──
if (isset($_GET['rimuovi'])) {
  $id = htmlspecialchars($_GET['rimuovi']);
  unset($_SESSION['carrello'][$id]);
  header('Location: carrello.php');
  exit;
}

// ── Svuota carrello ──
if (isset($_GET['svuota'])) {
  unset($_SESSION['carrello']);
  header('Location: carrello.php');
  exit;
}

$carrello = $_SESSION['carrello'] ?? [];
$totale = 0;
foreach ($carrello as $item) {
  $totale += $item['prezzo'] * $item['qty'];
}

$titolo_pagina = 'Carrello';
$pagina_attiva = 'shop';
$root = '../../';
$breadcrumb = [
  ['label' => 'Shop', 'url' => 'index.php'],
  ['label' => 'Carrello']
];
include '../head.php';
?>

<section class="hero" style="padding:2.5rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Carrello</div>
    <h1>Il tuo <em>ordine</em></h1>
  </div>
</section>

<section class="sezione">
  <div class="container" style="max-width:800px; margin:0 auto;">

    <?php if (empty($carrello)): ?>

      <div style="text-align:center; padding:4rem 0;">
        <div style="font-size:4rem; margin-bottom:1rem;">🛒</div>
        <h2>Il carrello è vuoto</h2>
        <p>Aggiungi qualche prodotto dallo shop.</p>
        <a href="index.php" style="display:inline-block; margin-top:1.5rem;
           padding:0.75rem 2rem; background:var(--verde-profondo); color:var(--crema);
           border-radius:4px; font-size:0.9rem;">← Torna allo shop</a>
      </div>

    <?php else: ?>

      <form method="post">
        <table style="width:100%; border-collapse:collapse; margin-bottom:2rem;">
          <thead>
            <tr style="border-bottom:2px solid var(--bordo);">
              <th style="text-align:left; padding:0.75rem 0.5rem; color:var(--verde-profondo); font-family:var(--font-display); font-size:1rem; font-weight:400;">Prodotto</th>
              <th style="text-align:center; padding:0.75rem 0.5rem; color:var(--verde-profondo); font-family:var(--font-display); font-size:1rem; font-weight:400;">Qtà</th>
              <th style="text-align:right; padding:0.75rem 0.5rem; color:var(--verde-profondo); font-family:var(--font-display); font-size:1rem; font-weight:400;">Prezzo</th>
              <th style="text-align:right; padding:0.75rem 0.5rem; color:var(--verde-profondo); font-family:var(--font-display); font-size:1rem; font-weight:400;">Totale</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($carrello as $id => $item): ?>
            <tr style="border-bottom:1px solid var(--bordo);">
              <td style="padding:0.9rem 0.5rem; font-size:0.95rem;">
                <?= htmlspecialchars($item['nome']) ?>
              </td>
              <td style="padding:0.9rem 0.5rem; text-align:center;">
                <input type="number" name="qty[<?= htmlspecialchars($id) ?>]"
                  value="<?= intval($item['qty']) ?>" min="0" max="20"
                  style="width:55px; padding:0.3rem; border:1px solid var(--bordo);
                         border-radius:4px; text-align:center; font-size:0.9rem;">
              </td>
              <td style="padding:0.9rem 0.5rem; text-align:right; color:var(--testo-leggero); font-size:0.9rem;">
                € <?= number_format($item['prezzo'], 2, ',', '.') ?>
              </td>
              <td style="padding:0.9rem 0.5rem; text-align:right; font-weight:500; color:var(--verde-profondo);">
                € <?= number_format($item['prezzo'] * $item['qty'], 2, ',', '.') ?>
              </td>
              <td style="padding:0.9rem 0.5rem; text-align:right;">
                <a href="carrello.php?rimuovi=<?= urlencode($id) ?>"
                   style="color:var(--terra); font-size:0.8rem;"
                   onclick="return confirm('Rimuovere questo prodotto?')">✕</a>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
            <tr>
              <td colspan="3" style="padding:1rem 0.5rem; text-align:right;
                font-family:var(--font-display); font-size:1.1rem; color:var(--verde-profondo);">
                Totale stimato
              </td>
              <td style="padding:1rem 0.5rem; text-align:right;
                font-family:var(--font-display); font-size:1.4rem; color:var(--verde-profondo); font-weight:600;">
                € <?= number_format($totale, 2, ',', '.') ?>
              </td>
              <td></td>
            </tr>
          </tfoot>
        </table>

        <div style="display:flex; justify-content:space-between; align-items:center; flex-wrap:wrap; gap:1rem;">
          <div style="display:flex; gap:1rem;">
            <a href="index.php" style="padding:0.6rem 1.2rem; border:1px solid var(--bordo);
               border-radius:4px; font-size:0.85rem; color:var(--testo-leggero);">
              ← Continua lo shopping
            </a>
            <button type="submit" name="aggiorna" value="1"
              style="padding:0.6rem 1.2rem; background:var(--crema); border:1px solid var(--bordo);
                     border-radius:4px; font-size:0.85rem; cursor:pointer; font-family:var(--font-corpo);">
              ↻ Aggiorna quantità
            </button>
          </div>
          <a href="carrello.php?svuota=1"
             onclick="return confirm('Svuotare il carrello?')"
             style="font-size:0.8rem; color:var(--terra);">Svuota carrello</a>
        </div>
      </form>

      <hr class="divider">

      <!-- Avviso spedizione -->
      <div style="background:var(--crema); border:1px solid var(--bordo); border-radius:4px;
                  padding:1.2rem 1.5rem; margin-bottom:2rem; font-size:0.88rem; color:var(--testo-leggero);">
        ℹ️ <strong>Come funziona:</strong> questo non è un acquisto diretto. Inviando l'ordine riceverai
        una email di conferma con le istruzioni per il pagamento e la spedizione. Ti risponderemo entro 24–48 ore.
      </div>

      <!-- Form invio ordine -->
      <div style="background:var(--avorio); border:1px solid var(--bordo); border-radius:4px; padding:2rem;">
        <h2 style="margin-bottom:1.5rem;">Invia la tua richiesta d'ordine</h2>
        <form method="post" action="invia-ordine.php">

          <!-- Dati cliente -->
          <div class="griglia griglia-2" style="gap:1rem; margin-bottom:1rem;">
            <div>
              <label style="display:block; font-size:0.82rem; font-weight:500;
                color:var(--verde-profondo); margin-bottom:0.3rem;">Nome *</label>
              <input type="text" name="nome" required placeholder="Il tuo nome"
                style="width:100%; padding:0.65rem 0.9rem; border:1px solid var(--bordo);
                       border-radius:4px; font-family:var(--font-corpo); font-size:0.9rem; background:white;">
            </div>
            <div>
              <label style="display:block; font-size:0.82rem; font-weight:500;
                color:var(--verde-profondo); margin-bottom:0.3rem;">Cognome *</label>
              <input type="text" name="cognome" required placeholder="Il tuo cognome"
                style="width:100%; padding:0.65rem 0.9rem; border:1px solid var(--bordo);
                       border-radius:4px; font-family:var(--font-corpo); font-size:0.9rem; background:white;">
            </div>
          </div>

          <div style="margin-bottom:1rem;">
            <label style="display:block; font-size:0.82rem; font-weight:500;
              color:var(--verde-profondo); margin-bottom:0.3rem;">Email *</label>
            <input type="email" name="email" required placeholder="tua@email.it"
              style="width:100%; padding:0.65rem 0.9rem; border:1px solid var(--bordo);
                     border-radius:4px; font-family:var(--font-corpo); font-size:0.9rem; background:white;">
          </div>

          <div style="margin-bottom:1rem;">
            <label style="display:block; font-size:0.82rem; font-weight:500;
              color:var(--verde-profondo); margin-bottom:0.3rem;">Telefono</label>
            <input type="tel" name="telefono" placeholder="+39 000 0000000"
              style="width:100%; padding:0.65rem 0.9rem; border:1px solid var(--bordo);
                     border-radius:4px; font-family:var(--font-corpo); font-size:0.9rem; background:white;">
          </div>

          <div style="margin-bottom:1rem;">
            <label style="display:block; font-size:0.82rem; font-weight:500;
              color:var(--verde-profondo); margin-bottom:0.3rem;">Indirizzo di spedizione</label>
            <textarea name="indirizzo" rows="2" placeholder="Via, numero, CAP, Città, Provincia"
              style="width:100%; padding:0.65rem 0.9rem; border:1px solid var(--bordo);
                     border-radius:4px; font-family:var(--font-corpo); font-size:0.9rem;
                     background:white; resize:vertical;"></textarea>
          </div>

          <div style="margin-bottom:1.5rem;">
            <label style="display:block; font-size:0.82rem; font-weight:500;
              color:var(--verde-profondo); margin-bottom:0.3rem;">Note sull'ordine</label>
            <textarea name="note" rows="3" placeholder="Allergie, preferenze, richieste particolari..."
              style="width:100%; padding:0.65rem 0.9rem; border:1px solid var(--bordo);
                     border-radius:4px; font-family:var(--font-corpo); font-size:0.9rem;
                     background:white; resize:vertical;"></textarea>
          </div>

          <button type="submit"
            style="width:100%; padding:0.9rem; background:var(--verde-profondo); color:var(--crema);
                   border:none; border-radius:4px; font-family:var(--font-corpo); font-size:1rem;
                   cursor:pointer; letter-spacing:0.05em; transition:background 0.3s;">
            ✉ Invia richiesta d'ordine
          </button>

          <p style="font-size:0.78rem; text-align:center; margin-top:0.75rem; color:var(--testo-leggero);">
            I tuoi dati sono usati esclusivamente per evadere l'ordine. Vedi la
            <a href="../privacy.php">Privacy Policy</a>.
          </p>
        </form>
      </div>

    <?php endif; ?>
  </div>
</section>

<?php include '../foot.php'; ?>
