const menu = () => {
  const menuBtn = document.querySelector('#navbar-m-menu-btn');
  const menuLinks = document.querySelector('.navbar-m-links');

  if(!menuBtn || !menuLinks) return;
  
  menuBtn.addEventListener('click', () => {
    menuLinks.classList.toggle('navbar-m-links-visible');
  });
};


document.addEventListener('DOMContentLoaded', () => {
  menu();
});