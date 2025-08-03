const menuToggle = document.getElementById('menu-toggle');
const closeMenu = document.getElementById('closeMenu');
const navLinks = document.getElementById('nav-links');

menuToggle.addEventListener('click', () => {
  navLinks.classList.add('active');
  menuToggle.classList.add('hidden');
  closeMenu.classList.remove('hidden');
});

closeMenu.addEventListener('click', () => {
  navLinks.classList.remove('active');
  closeMenu.classList.add('hidden');
  menuToggle.classList.remove('hidden');
});

document.querySelectorAll('.container-navegation a').forEach(link => {
  link.addEventListener('click', () => {
    navLinks.classList.remove('active');
    closeMenu.classList.add('hidden');
    menuToggle.classList.remove('hidden');
  });
});


// Preguntas Frecuentes
const faqQuestions = document.querySelectorAll('.faq-question');

faqQuestions.forEach(button => {
  button.addEventListener('click', () => {
    const faqItem = button.parentElement;
    faqItem.classList.toggle('open');
  });
});


