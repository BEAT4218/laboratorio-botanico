<?php
/**
 * head.php — Intestazione comune del sito
 * Includere in ogni pagina con:  <?php include '../head.php'; ?>
 *
 * Variabili configurabili prima dell'include:
 *   $titolo_pagina  — titolo specifico della pagina (default: "Home")
 *   $breadcrumb     — array di ['label' => '...', 'url' => '...']
 *   $pagina_attiva  — ID stringa per evidenziare la voce di menu
 */

$titolo_pagina  = $titolo_pagina  ?? 'Flores Swiss';
$breadcrumb     = $breadcrumb     ?? [];
$pagina_attiva  = $pagina_attiva  ?? '';
$root = $root ?? '../';
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Flores Swiss — cosmetici botanici e specialità erboristiche artigianali.">
  <title><?= htmlspecialchars($titolo_pagina) ?> · Flores Swiss</title>

  <link rel="icon" href="<?= $root ?>immagini/favicon.ico" type="image/x-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,600;1,300;1,400&family=Jost:wght@300;400;500&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= $root ?>css/stile.css">
  <style>
    /* ── Header avorio ── */
    #header {
      background: #fdfaf4;
      border-bottom: 1px solid #e8e2d8;
      box-shadow: 0 2px 12px rgba(0,0,0,0.06);
    }
    .header-inner {
      height: auto;
      padding: 1rem 2rem 0.75rem;
      flex-wrap: wrap;
      gap: 0.5rem;
    }
    /* Logo immagine */
    .logo img {
      height: 64px;
      width: auto;
      display: block;
    }
    /* Voci menu su sfondo chiaro */
    nav ul li > a {
      color: #3a3a3a;
    }
    nav ul li > a:hover,
    nav ul li > a.attivo {
      color: #8b1a2e;
      background: rgba(139,26,46,0.06);
    }
    /* Shop evidenziato */
    nav ul li > a.nav-shop {
      color: #8b1a2e;
      font-weight: 500;
      border: 1px solid rgba(139,26,46,0.3);
      border-radius: 4px;
    }
    nav ul li > a.nav-shop:hover {
      background: #8b1a2e;
      color: #fdfaf4;
    }
    /* Dropdown su sfondo chiaro */
    .dropdown {
      background: #fdfaf4;
      border: 1px solid #e8e2d8;
    }
    .dropdown li a {
      color: #3a3a3a;
    }
    .dropdown li a:hover {
      color: #8b1a2e;
      background: rgba(139,26,46,0.04);
    }
    /* Toggle mobile */
    .menu-toggle {
      color: #3a3a3a;
    }
    /* Carrello badge */
    .carrello-link {
      position: relative;
      padding: 0.5rem 0.7rem;
      font-size: 1.1rem;
      color: #3a3a3a !important;
    }
    .carrello-badge {
      position: absolute;
      top: 0px;
      right: 0px;
      background: #8b1a2e;
      color: white;
      font-size: 0.6rem;
      font-weight: 700;
      border-radius: 50%;
      width: 16px;
      height: 16px;
      display: flex;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>
<body>

<!-- ═══════════════════════════════════════════
     HEADER
════════════════════════════════════════════ -->
<header id="header">
  <div class="header-inner">

    <!-- Logo -->
    <a href="<?= $root ?>index.php" class="logo" style="background:none;">
<img src="<?= $root ?>immagini/Logo/LogoFW.png" alt="Flores Swiss" style="height:48px; width:auto; margin-top:36px;" />


	  </a>

    <!-- Toggle mobile -->
    <button class="menu-toggle" onclick="toggleMenu()" aria-label="Apri menu">☰</button>

    <!-- Navigazione principale -->
    <nav id="nav-principale">
      <ul>
        <li>
          <a href="<?= $root ?>index.php"
             class="<?= $pagina_attiva === 'home' ? 'attivo' : '' ?>">Home</a>
        </li>

        <li>
          <a href="<?= $root ?>pagine/cosmetica/index.php"
             class="<?= $pagina_attiva === 'cosmetica' ? 'attivo' : '' ?>">
            Cosmetica ▾
          </a>
          <ul class="dropdown">
            <li><a href="<?= $root ?>pagine/cosmetica/corpo/index.php">🧴 Corpo</a></li>
            <li><a href="<?= $root ?>pagine/cosmetica/viso/index.php">✨ Viso</a></li>
            <li><a href="<?= $root ?>pagine/cosmetica/capelli/index.php">💆 Capelli</a></li>
          </ul>
        </li>

        <li>
          <a href="<?= $root ?>pagine/botanica/index.php"
             class="<?= $pagina_attiva === 'botanica' ? 'attivo' : '' ?>">
            Specialità Botaniche ▾
          </a>
          <ul class="dropdown">
            <li><a href="<?= $root ?>pagine/botanica/oli-essenziali/index.php">🫧 Oli Essenziali</a></li>
            <li><a href="<?= $root ?>pagine/botanica/idrolati/index.php">💧 Idrolati</a></li>
            <li><a href="<?= $root ?>pagine/botanica/oleoliti/index.php">🫙 Oleoliti</a></li>
            <li><a href="<?= $root ?>pagine/botanica/droghe/index.php">🌱 Droghe Vegetali</a></li>
          </ul>
        </li>

        <li>
          <a href="<?= $root ?>pagine/laboratorio.php"
             class="<?= $pagina_attiva === 'laboratorio' ? 'attivo' : '' ?>">Laboratorio</a>
        </li>

        <li>
          <a href="<?= $root ?>pagine/essenze.php"
             class="<?= $pagina_attiva === 'essenze' ? 'attivo' : '' ?>">Essenze Botaniche</a>
        </li>

        <li>
          <a href="<?= $root ?>pagine/contatti.php"
             class="<?= $pagina_attiva === 'contatti' ? 'attivo' : '' ?>">Contatti</a>
        </li>

        <li>
          <a href="<?= $root ?>pagine/shop/index.php"
             class="nav-shop <?= $pagina_attiva === 'shop' ? 'attivo' : '' ?>">
            🛒 Shop
          </a>
        </li>

        <!-- Icona carrello con contatore -->
        <li>
          <?php
            if (session_status() === PHP_SESSION_NONE) session_start();
            $n = 0;
            if (!empty($_SESSION['carrello'])) {
              foreach ($_SESSION['carrello'] as $item) $n += $item['qty'];
            }
          ?>
          <a href="<?= $root ?>pagine/shop/carrello.php" class="carrello-link">
            🛒
            <?php if ($n > 0): ?>
              <span class="carrello-badge"><?= $n ?></span>
            <?php endif; ?>
          </a>
        </li>

      </ul>
    </nav>
  </div>
</header>

<!-- ═══════════════════════════════════════════
     BREADCRUMB (se definito)
════════════════════════════════════════════ -->
<?php if (!empty($breadcrumb)): ?>
<div class="breadcrumb">
  <a href="<?= $root ?>index.php">🏠 Home</a>
  <?php foreach ($breadcrumb as $bc): ?>
    <span>›</span>
    <?php if (!empty($bc['url'])): ?>
      <a href="<?= $bc['url'] ?>"><?= htmlspecialchars($bc['label']) ?></a>
    <?php else: ?>
      <span><?= htmlspecialchars($bc['label']) ?></span>
    <?php endif; ?>
  <?php endforeach; ?>
</div>
<?php endif; ?>

<!-- ═══════════════════════════════════════════
     CONTENUTO PAGINA INIZIA QUI
════════════════════════════════════════════ -->
