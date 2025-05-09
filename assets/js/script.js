// add hovered class to selected list item
document.addEventListener('DOMContentLoaded', function () {
  const menu = document.querySelector('.navigation ul');
  const menuItems = document.querySelectorAll('.navigation li');
  const currentPath = window.location.pathname; // Ex: "/home"
  let activeItem = null;

  menuItems.forEach((item) => {
    const link = item.querySelector('a');
    if (link.getAttribute('href') === currentPath) {
      item.classList.add('hovered');
      activeItem = item;
    }
  });

  menu.addEventListener('mouseenter', () => {
    if (activeItem) {
      activeItem.classList.remove('hovered');
    }
  });

  menu.addEventListener('mouseleave', () => {
    if (activeItem) {
      activeItem.classList.add('hovered');
    }
  });

  const navigation = document.querySelector('.navigation');
  const main = document.querySelector('.main');
  const toggleBtn = document.querySelector('.toggle');

  const isCollapsed = localStorage.getItem('menuCollapsed') === 'true';

  if (isCollapsed) {
    navigation.classList.add('active');
    main.classList.add('active');
  }

  setTimeout(() => {
    navigation.style.transition = '0.5s';
    main.style.transition = '0.5s';
  }, 10);

  toggleBtn.addEventListener('click', function () {
    navigation.classList.toggle('active');
    main.classList.toggle('active');

    localStorage.setItem(
      'menuCollapsed',
      navigation.classList.contains('active'),
      main.classList.contains('active'),
    );
  });
});

// Menu Toggle
// let toggle = document.querySelector('.toggle');
// let navigation = document.querySelector('.navigation');
// let main = document.querySelector('.main');

// toggle.onclick = function () {
//   navigation.classList.toggle('active');
//   main.classList.toggle('active');
// };

//Show Password
const passwordIcons = document.querySelectorAll('.password_icon');

passwordIcons.forEach((icon) => {
  icon.addEventListener('click', function () {
    const input = this.parentElement.querySelector('.form_control');
    input.type = input.type === 'password' ? 'text' : 'password';
    this.classList.toggle('fa-eye');
  });
});
