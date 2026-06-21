# 🌿 Laboratorio Cosmetico Botanico — Sito Web

Sito commerciale del laboratorio cosmetico botanico.  
Sviluppato in **PHP** puro, senza framework. Struttura a inclusione con `head.php` e `foot.php`.

---

## 📁 Struttura delle cartelle

```
laboratorio-botanico/
│
├── index.php                  ← Home page
│
├── css/
│   └── stile.css              ← Foglio di stile principale
│
├── js/
│   └── main.js                ← Script JavaScript
│
├── immagini/                  ← Immagini del sito
├── video/                     ← Video didattici locali (o link YouTube)
├── documenti/                 ← PDF ricette e schede tecniche
│
└── pagine/
    ├── head.php               ← Header comune (include in ogni pagina)
    ├── foot.php               ← Footer comune (include in ogni pagina)
    │
    ├── cosmetica/
    │   ├── index.php          ← Linea cosmetica (panoramica)
    │   ├── corpo/
    │   │   └── index.php      ← Prodotti corpo
    │   ├── viso/
    │   │   └── index.php      ← Prodotti viso
    │   └── capelli/
    │       └── index.php      ← Prodotti capelli
    │
    ├── botanica/
    │   ├── index.php          ← Specialità botaniche (panoramica)
    │   ├── oli-essenziali/
    │   │   └── index.php      ← Oli essenziali
    │   ├── idrolati/
    │   │   └── index.php      ← Idrolati
    │   ├── oleoliti/
    │   │   └── index.php      ← Oleoliti
    │   └── droghe/
    │       └── index.php      ← Droghe vegetali
    │
    ├── laboratorio.php        ← Video didattici e ricette
    ├── essenze.php            ← Erbario / descrizione droghe
    ├── contatti.php           ← Modulo di contatto
    └── privacy.php            ← Privacy policy
```

---

## 🔧 Come includere header e footer nelle nuove pagine

```php
<?php
// Variabili da definire PRIMA dell'include:
$titolo_pagina = 'Nome Pagina';        // Titolo nel browser
$pagina_attiva = 'home';              // Per evidenziare la voce di menu
$root = './';                         // Percorso relativo alla root del sito
$breadcrumb = [                       // Facoltativo
  ['label' => 'Sezione', 'url' => 'sezione/index.php'],
  ['label' => 'Pagina corrente']      // ultimo senza url
];

include 'pagine/head.php';
?>

<!-- Contenuto della pagina qui -->

<?php include 'pagine/foot.php'; ?>
```

### Valori di `$pagina_attiva`
| Valore         | Voce di menu evidenziata |
|----------------|--------------------------|
| `home`         | Home                     |
| `cosmetica`    | Cosmetica                |
| `botanica`     | Specialità Botaniche     |
| `laboratorio`  | Laboratorio              |
| `essenze`      | Essenze Botaniche        |
| `contatti`     | Contatti                 |

### Calcolo di `$root`
| Profondità file                    | `$root`     |
|------------------------------------|-------------|
| `index.php` (root)                 | `./`        |
| `pagine/laboratorio.php`           | `../`       |
| `pagine/cosmetica/index.php`       | `../../`    |
| `pagine/cosmetica/corpo/index.php` | `../../../` |

---

## 🚀 Requisiti

- PHP 7.4+
- Server web con mod_rewrite (Apache) o equivalente
- Nessuna dipendenza esterna (solo Google Fonts via CDN)

---

## 📝 Note per lo sviluppo

- I **video didattici** nella pagina Laboratorio usano placeholder. Per YouTube: sostituire il `<div class="video-placeholder">` con un `<iframe>` di YouTube.
- I **PDF delle ricette** nella cartella `documenti/` sono placeholder. Aggiungere i file reali con gli stessi nomi.
- Le **immagini** nella cartella `immagini/` vanno aggiunte e richiamate nelle schede prodotto.
- Il **modulo contatti** necessita di un backend PHP per l'invio email (`mail()` o PHPMailer).

---

## ✅ To-do

- [ ] Aggiungere immagini prodotti nella cartella `/immagini/`
- [ ] Caricare video didattici (o configurare iframe YouTube)
- [ ] Creare PDF ricette in `/documenti/`
- [ ] Completare schede singoli prodotti (es. `crema-corpo.php`)
- [ ] Configurare il modulo di contatto con invio email
- [ ] Aggiornare Privacy Policy con dati reali
- [ ] Configurare dominio e hosting
- [ ] (Opzionale) Aggiungere sistema di gestione contenuti

---

*Sito sviluppato artigianalmente, con la stessa cura dei prodotti.*
