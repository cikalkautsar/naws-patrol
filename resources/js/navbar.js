function setActive(element) {
  const items = document.querySelectorAll('.nav-item');
  items.forEach(item => item.classList.remove('active'));
  element.classList.add('active');
}

function toggleMenu() {
  const navLinks = document.getElementById('nav-links');
  navLinks.classList.toggle('show');
}
