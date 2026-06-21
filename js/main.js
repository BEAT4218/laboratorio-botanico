/* main.js — Script principale Laboratorio Botanico */

// Toggle menu mobile
function toggleMenu() {
  const nav = document.getElementById('nav-principale');
  nav.classList.toggle('aperto');
}

// Chiudi menu cliccando fuori
document.addEventListener('click', function(e) {
  const nav = document.getElementById('nav-principale');
  const btn = document.querySelector('.menu-toggle');
  if (nav && !nav.contains(e.target) && !btn.contains(e.target)) {
    nav.classList.remove('aperto');
  }
});

// Animazione scroll-reveal leggera
const osservaElementi = () => {
  const elems = document.querySelectorAll('.card, .essenza-card, .processo-step');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
      }
    });
  }, { threshold: 0.1 });

  elems.forEach(el => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(20px)';
    el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
    observer.observe(el);
  });
};

document.addEventListener('DOMContentLoaded', osservaElementi);
