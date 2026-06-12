// Toggle Mobile Menu
function toggleMenu() {
  const menu = document.getElementById('mobile-menu');
  const backdrop = document.getElementById('backdrop');
  menu.classList.toggle('open');
  backdrop.classList.toggle('hidden');
}

// Scroll Cards
function scrollCards(direction) {
  const carousel = document.getElementById('card-carousel');
  const cardWidth = carousel.querySelector('.promo-card').offsetWidth + 32; // card width + gap
  if (direction === 'left') {
    carousel.scrollLeft -= cardWidth;
  } else {
    carousel.scrollLeft += cardWidth;
  }
}

// Set active category
document.querySelectorAll('.nav-category-b').forEach(link => {
  link.addEventListener('click', function (e) {
    e.preventDefault();
    document.querySelectorAll('.nav-category-b').forEach(el => el.classList.remove('active'));
    this.classList.add('active');
  });
});
