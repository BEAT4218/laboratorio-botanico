<?php
/**
 * foot.php — Piè di pagina comune del sito
 * Includere in ogni pagina con:  <?php include '../foot.php'; ?>
 */
$root = $root ?? '../';
?>

<!-- ═══════════════════════════════════════════
     FOOTER
════════════════════════════════════════════ -->
<footer id="footer">
  <div class="footer-inner">

    <!-- Colonna brand -->
    <div>
      <div class="footer-logo">🌿 Laboratorio Botanico</div>
      <p class="footer-desc">
        Cosmetici artigianali e specialità botaniche prodotte con materie prime
        di qualità, nel rispetto della natura e della tradizione erboristica.
      </p>
    </div>

    <!-- Cosmetica -->
    <div class="footer-col">
      <h4>Cosmetica</h4>
      <ul>
        <li><a href="<?= $root ?>pagine/cosmetica/corpo/index.php">Corpo</a></li>
        <li><a href="<?= $root ?>pagine/cosmetica/viso/index.php">Viso</a></li>
        <li><a href="<?= $root ?>pagine/cosmetica/capelli/index.php">Capelli</a></li>
      </ul>
    </div>

    <!-- Botanica -->
    <div class="footer-col">
      <h4>Botanica</h4>
      <ul>
        <li><a href="<?= $root ?>pagine/botanica/oli-essenziali/index.php">Oli Essenziali</a></li>
        <li><a href="<?= $root ?>pagine/botanica/idrolati/index.php">Idrolati</a></li>
        <li><a href="<?= $root ?>pagine/botanica/oleoliti/index.php">Oleoliti</a></li>
        <li><a href="<?= $root ?>pagine/botanica/droghe/index.php">Droghe Vegetali</a></li>
      </ul>
    </div>

    <!-- Info -->
    <div class="footer-col">
      <h4>Info</h4>
      <ul>
        <li><a href="<?= $root ?>pagine/laboratorio.php">Il Laboratorio</a></li>
        <li><a href="<?= $root ?>pagine/essenze.php">Essenze Botaniche</a></li>
        <li><a href="<?= $root ?>pagine/contatti.php">Contatti</a></li>
        <li><a href="<?= $root ?>pagine/privacy.php">Privacy Policy</a></li>
      </ul>
    </div>

  </div>

  <div class="footer-bottom">
    <span>&copy; <?= date('Y') ?> Laboratorio Cosmetico Botanico — Tutti i diritti riservati</span>
    <span>Artigianato naturale dal territorio</span>
  </div>
</footer>

<!-- ═══════════════════════════════════════════
     SCRIPT
════════════════════════════════════════════ -->
<script src="<?= $root ?>js/main.js"></script>
</body>
</html>
