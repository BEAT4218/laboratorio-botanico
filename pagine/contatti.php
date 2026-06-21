<?php
$titolo_pagina = 'Contatti';
$pagina_attiva = 'contatti';
$root = '../';
$breadcrumb = [['label' => 'Contatti']];
include 'head.php';
?>

<section class="hero" style="padding:3rem 2rem;">
  <div class="hero-contenuto">
    <div class="tag-botanico">Contatti</div>
    <h1>Parliamo di <em>piante</em></h1>
    <p>Domande sui prodotti, richieste di informazioni o collaborazioni. Siamo a disposizione.</p>
  </div>
</section>

<section class="sezione">
  <div class="container">
    <div class="griglia griglia-2">

      <div>
        <h2>Scrivici</h2>
        <p>Usa il modulo o contattaci direttamente via email. Risponderemo entro 48 ore.</p>

        <form style="margin-top:2rem;" onsubmit="return false;">
          <div style="margin-bottom:1.2rem;">
            <label style="display:block; font-size:0.85rem; font-weight:500; color:var(--verde-profondo); margin-bottom:0.4rem;">Nome e Cognome</label>
            <input type="text" placeholder="Il tuo nome"
              style="width:100%; padding:0.7rem 1rem; border:1px solid var(--bordo); border-radius:4px;
              font-family:var(--font-corpo); font-size:0.95rem; background:var(--crema);">
          </div>
          <div style="margin-bottom:1.2rem;">
            <label style="display:block; font-size:0.85rem; font-weight:500; color:var(--verde-profondo); margin-bottom:0.4rem;">Email</label>
            <input type="email" placeholder="tua@email.it"
              style="width:100%; padding:0.7rem 1rem; border:1px solid var(--bordo); border-radius:4px;
              font-family:var(--font-corpo); font-size:0.95rem; background:var(--crema);">
          </div>
          <div style="margin-bottom:1.2rem;">
            <label style="display:block; font-size:0.85rem; font-weight:500; color:var(--verde-profondo); margin-bottom:0.4rem;">Oggetto</label>
            <select style="width:100%; padding:0.7rem 1rem; border:1px solid var(--bordo); border-radius:4px;
              font-family:var(--font-corpo); font-size:0.95rem; background:var(--crema); color:var(--testo);">
              <option>Informazioni prodotti</option>
              <option>Ordine personalizzato</option>
              <option>Collaborazione</option>
              <option>Formazione</option>
              <option>Altro</option>
            </select>
          </div>
          <div style="margin-bottom:1.5rem;">
            <label style="display:block; font-size:0.85rem; font-weight:500; color:var(--verde-profondo); margin-bottom:0.4rem;">Messaggio</label>
            <textarea rows="5" placeholder="Scrivi qui il tuo messaggio..."
              style="width:100%; padding:0.7rem 1rem; border:1px solid var(--bordo); border-radius:4px;
              font-family:var(--font-corpo); font-size:0.95rem; background:var(--crema); resize:vertical;"></textarea>
          </div>
          <button type="submit"
            style="padding:0.8rem 2rem; background:var(--verde-profondo); color:var(--crema);
            border:none; border-radius:4px; font-family:var(--font-corpo); font-size:0.9rem;
            cursor:pointer; letter-spacing:0.05em;">
            Invia Messaggio
          </button>
        </form>
      </div>

      <div>
        <h2>Dove siamo</h2>
        <p>Il laboratorio non è aperto al pubblico in modo continuativo. È possibile visitarlo su appuntamento.</p>

        <div style="margin-top:2rem; padding:1.5rem; background:var(--crema); border:1px solid var(--bordo); border-radius:4px;">
          <div style="margin-bottom:1.2rem;">
            <h4>📍 Indirizzo</h4>
            <p style="margin:0;">Via [da inserire], [Città]<br>[Provincia], Italia</p>
          </div>
          <div style="margin-bottom:1.2rem;">
            <h4>✉ Email</h4>
            <p style="margin:0;"><a href="mailto:info@laboratoriobotanico.it">info@laboratoriobotanico.it</a></p>
          </div>
          <div style="margin-bottom:1.2rem;">
            <h4>📱 Telefono / WhatsApp</h4>
            <p style="margin:0;">+39 [numero da inserire]</p>
          </div>
          <div>
            <h4>🕐 Disponibilità</h4>
            <p style="margin:0;">Risposta via email: entro 48h<br>Visite in laboratorio: su appuntamento</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php include 'foot.php'; ?>
