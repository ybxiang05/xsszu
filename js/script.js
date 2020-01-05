document.addEventListener('DOMContentLoaded', function() {
  console.log('test');
  const btnToggle = document.getElementById('toggle-btn');
  const mainMenu = document.getElementsByClassName(
    'menu-main-menu-container'
  )[0];
  mainMenu.classList.add('menu-hide');
  //const menuToggle = mainMenu.addClass('menu-hide');
  console.log(mainMenu);
  //   function mobileMenu(btnToggle) {
  btnToggle.addEventListener('click', function() {
    console.log('click');
    if (!mainMenu.classList.contains('menu-hide')) {
      console.log('clicked');
      mainMenu.classList.add('menu-hide');
    } else {
      console.log('wrong class');
      mainMenu.classList.remove('menu-hide');
    }
  });
  //   }
});
