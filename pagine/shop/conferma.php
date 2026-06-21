<?php
session_start();

// Se si arriva qui senza un ordine confermato, redirect allo shop
if (empty($_SESSION['ordine_ok'])) {
  header('Location: index.php');
  exit;
}

$ordine = $_SESSION['ordine_ok'];
unset($_SESSION['ordine_ok']); // mostra la conferma una volta sola

$titolo_pagina = 'Ordine inviato';
$pagina_attiva = 'shop';
$root = '../../';
$breadcrumb = [
  ['label' => 'Shop', 'url' => 'index.php'],
  ['label' => 'Conferma']
];
include '../head.php';
?>

<section class="sezione" style="padding-top:5rem; padding-bottom:5rem;">
  <div class="container" style="max-width:600px; margin:0 auto; text-align:center;">

    <div style="font-size:4rem; margin-bottom:1.5rem;">🌿</div>

    <h1 style="margin-bottom:0.75rem;">Richiesta inviata!</h1>

    <p style="font-size:1.1rem; max-width:460px; margin:0 auto 2rem;">
      Grazie <strong><?= htmlspecialchars($ordine['nome']) ?></strong>,
      la tua richiesta d'ordine <strong>#<?= htmlspecialchars($ordine['numero']) ?></strong>
      è stata ricevuta.
    </p>

    <div style="background:var(--crema); border:1px solid var(--bordo); border-radius:4px;
                padding:1.5rem 2rem; margin-bottom:2.5rem; text-align:left;">
      <h3 style="margin-bottom:1rem;">Cosa succede adesso?</h3>
      <div style="display:flex; flex-direction:column; gap:0.9rem;">
        <div style="display:flex; gap:1rem; align-items:flex-start;">
          <span style="font-size:1.4rem; flex-shrink:0;">📬</span>
          <p style="margin:0; font-size:0.92rem;">
            Hai ricevuto un'email di riepilogo all'indirizzo
            <strong><?= htmlspecialchars($ordine['email']) ?></strong>.
            Controlla anche la cartella spam.
          </p>
        </div>
        <div style="display:flex; gap:1rem; align-items:flex-start;">
          <span style="font-size:1.4rem; flex-shrink:0;">⏱</span>
          <p style="margin:0; font-size:0.92rem;">
            Ti risponderemo entro <strong>24–48 ore</strong> con la conferma
            della disponibilità e le istruzioni per il pagamento.
          </p>
        </div>
        <div style="display:flex; gap:1rem; align-items:flex-start;">
          <span style="font-size:1.4rem; flex-shrink:0;">📦</span>
          <p style="margin:0; font-size:0.92rem;">
            Una volta confermato il pagamento, il tuo ordine viene preparato
            e spedito entro 3–5 giorni lavorativi.
          </p>
        </div>
      </div>
    </div>

    <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
      <a href="index.php"
         style="padding:0.75rem 1.8rem; background:var(--verde-profondo); color:var(--crema);
                border-radius:4px; font-size:0.9rem;">
        ← Torna allo shop
      </a>
      <a href="../contatti.php"
         style="padding:0.75rem 1.8rem; border:1px solid var(--bordo); color:var(--testo-leggero);
                border-radius:4px; font-size:0.9rem;">
        ✉ Contattaci
      </a>
    </div>

  </div>
</section>

<?php include '../foot.php'; ?>
