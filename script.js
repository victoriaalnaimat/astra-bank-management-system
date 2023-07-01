const burgerMenu = document.querySelector('.burger-menu');
const responsiveMenu = document.querySelector('.responsive-menu');

burgerMenu.addEventListener('click', () => {
  responsiveMenu.classList.toggle('active');
});
