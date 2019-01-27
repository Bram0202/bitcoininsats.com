
// Laadt het hamburgermenu naar binnen glijden.
const menuSlide = () => {
  const burger = document.querySelector('.burger');
  const menu = document.querySelector('.menu-links');
  const menuLinks = document.querySelectorAll('.menu-links li');

  burger.addEventListener('click', () => {
    // Toggle hamburgermenu.
    menu.classList.toggle('menu-active');

    // Animatie van de links.
    menuLinks.forEach((link, index) => {
      // Vertraging tussen de links.
      // index(aantal links) / vertraging + start vertraging.
      if (link.style.animation) {
        link.style.animation = '';
      } else {
        link.style.animation = `menuLinkFade 0.5s ease forwards ${index / 4 + 0.3}s`;
      }
    });
    // Hamburgermenu-icoon animatie
    burger.classList.toggle('toggle');

  });
}

menuSlide();
