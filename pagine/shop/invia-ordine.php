<?php
session_start();

// ── Sicurezza: solo POST e con carrello non vuoto ──
if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_SESSION['carrello'])) {
  header('Location: index.php');
  exit;
}

// ── Raccolta e pulizia dati ──
function pulisci($v) {
  return htmlspecialchars(strip_tags(trim($v)));
}

$nome      = pulisci($_POST['nome']      ?? '');
$cognome   = pulisci($_POST['cognome']   ?? '');
$email     = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$telefono  = pulisci($_POST['telefono']  ?? '');
$indirizzo = pulisci($_POST['indirizzo'] ?? '');
$note      = pulisci($_POST['note']      ?? '');

// Validazione minima
if (!$nome || !$cognome || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header('Location: carrello.php?errore=dati');
  exit;
}

// ── Costruzione riepilogo ordine ──
$carrello = $_SESSION['carrello'];
$totale   = 0;
$righe_testo = '';   // per email plain text
$righe_html  = '';   // per email HTML

foreach ($carrello as $item) {
  $subtotale    = $item['prezzo'] * $item['qty'];
  $totale      += $subtotale;
  $righe_testo .= sprintf(
    "  - %s  x%d  = € %s\n",
    $item['nome'], $item['qty'], number_format($subtotale, 2, ',', '.')
  );
  $righe_html  .= sprintf(
    '<tr>
      <td style="padding:8px 12px; border-bottom:1px solid #e0ddd7;">%s</td>
      <td style="padding:8px 12px; border-bottom:1px solid #e0ddd7; text-align:center;">%d</td>
      <td style="padding:8px 12px; border-bottom:1px solid #e0ddd7; text-align:right;">€ %s</td>
      <td style="padding:8px 12px; border-bottom:1px solid #e0ddd7; text-align:right;">€ %s</td>
    </tr>',
    htmlspecialchars($item['nome']),
    $item['qty'],
    number_format($item['prezzo'], 2, ',', '.'),
    number_format($subtotale, 2, ',', '.')
  );
}

$totale_fmt = number_format($totale, 2, ',', '.');
$data_ora   = date('d/m/Y H:i');
$numero_ord = strtoupper(substr(md5(uniqid()), 0, 8));

// ════════════════════════════════════════════
//  EMAIL AL LABORATORIO
// ════════════════════════════════════════════

// ⚠️  MODIFICA QUI la tua email
$email_laboratorio = 'info@tuolaboratorio.it';
$oggetto_lab = "Nuova richiesta d'ordine #{$numero_ord} da {$nome} {$cognome}";

$corpo_lab_html = "
<!DOCTYPE html>
<html lang='it'>
<head><meta charset='UTF-8'></head>
<body style='font-family:Georgia,serif; color:#2a2a2a; max-width:600px; margin:0 auto; padding:20px;'>
  <div style='background:#2d4a2f; padding:20px 24px; border-radius:4px 4px 0 0;'>
    <h1 style='color:#f5f0e8; margin:0; font-size:1.3rem;'>🌿 Laboratorio Botanico</h1>
    <p style='color:#a8c5a0; margin:4px 0 0; font-size:0.85rem;'>Nuova richiesta d'ordine</p>
  </div>
  <div style='border:1px solid #d4cfc6; border-top:none; padding:24px; background:#fdfaf4;'>

    <table style='width:100%; margin-bottom:20px;'>
      <tr>
        <td style='padding:4px 0; color:#5a5a5a; font-size:0.85rem; width:40%;'>N° ordine</td>
        <td style='padding:4px 0; font-weight:bold;'>#{$numero_ord}</td>
      </tr>
      <tr>
        <td style='padding:4px 0; color:#5a5a5a; font-size:0.85rem;'>Data</td>
        <td style='padding:4px 0;'>{$data_ora}</td>
      </tr>
      <tr>
        <td style='padding:4px 0; color:#5a5a5a; font-size:0.85rem;'>Cliente</td>
        <td style='padding:4px 0;'>{$nome} {$cognome}</td>
      </tr>
      <tr>
        <td style='padding:4px 0; color:#5a5a5a; font-size:0.85rem;'>Email</td>
        <td style='padding:4px 0;'><a href='mailto:{$email}'>{$email}</a></td>
      </tr>
      " . ($telefono ? "<tr><td style='padding:4px 0; color:#5a5a5a; font-size:0.85rem;'>Telefono</td><td style='padding:4px 0;'>{$telefono}</td></tr>" : '') . "
      " . ($indirizzo ? "<tr><td style='padding:4px 0; color:#5a5a5a; font-size:0.85rem;'>Spedizione</td><td style='padding:4px 0;'>{$indirizzo}</td></tr>" : '') . "
    </table>

    <h3 style='color:#2d4a2f; font-size:1rem; border-bottom:2px solid #c9a96e;
               padding-bottom:6px; margin-bottom:12px;'>Prodotti richiesti</h3>
    <table style='width:100%; border-collapse:collapse; font-size:0.9rem; margin-bottom:16px;'>
      <thead>
        <tr style='background:#f5f0e8;'>
          <th style='padding:8px 12px; text-align:left; color:#2d4a2f;'>Prodotto</th>
          <th style='padding:8px 12px; text-align:center; color:#2d4a2f;'>Qtà</th>
          <th style='padding:8px 12px; text-align:right; color:#2d4a2f;'>Prezzo</th>
          <th style='padding:8px 12px; text-align:right; color:#2d4a2f;'>Totale</th>
        </tr>
      </thead>
      <tbody>{$righe_html}</tbody>
      <tfoot>
        <tr>
          <td colspan='3' style='padding:10px 12px; text-align:right; font-weight:bold; color:#2d4a2f;'>
            Totale stimato
          </td>
          <td style='padding:10px 12px; text-align:right; font-weight:bold;
                     font-size:1.1rem; color:#2d4a2f;'>€ {$totale_fmt}</td>
        </tr>
      </tfoot>
    </table>

    " . ($note ? "<div style='background:#f5f0e8; border-left:3px solid #c9a96e; padding:12px 16px; font-size:0.88rem;'><strong>Note cliente:</strong><br>{$note}</div>" : '') . "

    <p style='font-size:0.8rem; color:#5a5a5a; margin-top:20px; border-top:1px solid #e0ddd7; padding-top:12px;'>
      Rispondi direttamente a questa email per contattare il cliente.
    </p>
  </div>
</body>
</html>";

// ════════════════════════════════════════════
//  EMAIL DI CONFERMA AL CLIENTE
// ════════════════════════════════════════════

$oggetto_cliente = "Richiesta d'ordine ricevuta — #{$numero_ord}";

$corpo_cliente_html = "
<!DOCTYPE html>
<html lang='it'>
<head><meta charset='UTF-8'></head>
<body style='font-family:Georgia,serif; color:#2a2a2a; max-width:600px; margin:0 auto; padding:20px;'>
  <div style='background:#2d4a2f; padding:20px 24px; border-radius:4px 4px 0 0;'>
    <h1 style='color:#f5f0e8; margin:0; font-size:1.3rem;'>🌿 Laboratorio Botanico</h1>
  </div>
  <div style='border:1px solid #d4cfc6; border-top:none; padding:24px; background:#fdfaf4;'>
    <h2 style='color:#2d4a2f; font-family:Georgia,serif; font-weight:400;'>
      Grazie {$nome}, abbiamo ricevuto la tua richiesta!
    </h2>
    <p style='color:#5a5a5a;'>
      Ti risponderemo entro <strong>24–48 ore</strong> con le istruzioni per il pagamento
      e la conferma della disponibilità dei prodotti.
    </p>
    <p style='color:#5a5a5a; font-size:0.88rem;'>N° riferimento ordine: <strong>#{$numero_ord}</strong></p>

    <h3 style='color:#2d4a2f; font-size:1rem; border-bottom:2px solid #c9a96e;
               padding-bottom:6px; margin-bottom:12px; margin-top:24px;'>Riepilogo richiesta</h3>
    <table style='width:100%; border-collapse:collapse; font-size:0.88rem; margin-bottom:16px;'>
      <thead>
        <tr style='background:#f5f0e8;'>
          <th style='padding:8px 12px; text-align:left; color:#2d4a2f;'>Prodotto</th>
          <th style='padding:8px 12px; text-align:center; color:#2d4a2f;'>Qtà</th>
          <th style='padding:8px 12px; text-align:right; color:#2d4a2f;'>Totale</th>
        </tr>
      </thead>
      <tbody>{$righe_html}</tbody>
      <tfoot>
        <tr>
          <td colspan='2' style='padding:10px 12px; text-align:right; font-weight:bold; color:#2d4a2f;'>
            Totale stimato (IVA e spedizione escluse)
          </td>
          <td style='padding:10px 12px; text-align:right; font-weight:bold; color:#2d4a2f;'>€ {$totale_fmt}</td>
        </tr>
      </tfoot>
    </table>

    <p style='font-size:0.82rem; color:#5a5a5a; border-top:1px solid #e0ddd7; padding-top:12px; margin-top:20px;'>
      Hai domande? Scrivi a <a href='mailto:{$email_laboratorio}'>{$email_laboratorio}</a>
    </p>
  </div>
</body>
</html>";

// ── Invio email ──
$headers_base = [
  'MIME-Version: 1.0',
  'Content-Type: text/html; charset=UTF-8',
];

// Email al laboratorio (Reply-To impostato sull'email del cliente)
$headers_lab = array_merge($headers_base, [
  "From: Laboratorio Botanico <{$email_laboratorio}>",
  "Reply-To: {$nome} {$cognome} <{$email}>",
]);
$ok_lab = mail($email_laboratorio, $oggetto_lab, $corpo_lab_html, implode("\r\n", $headers_lab));

// Email di conferma al cliente
$headers_cli = array_merge($headers_base, [
  "From: Laboratorio Botanico <{$email_laboratorio}>",
]);
$ok_cli = mail($email, $oggetto_cliente, $corpo_cliente_html, implode("\r\n", $headers_cli));

// ── Svuota carrello e redirect ──
if ($ok_lab) {
  unset($_SESSION['carrello']);
  $_SESSION['ordine_ok'] = [
    'numero' => $numero_ord,
    'nome'   => $nome,
    'email'  => $email,
  ];
  header('Location: conferma.php');
} else {
  header('Location: carrello.php?errore=invio');
}
exit;
