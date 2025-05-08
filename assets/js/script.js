// add hovered class to selected list item
document.addEventListener('DOMContentLoaded', function () {
  const menu = document.querySelector('.navigation ul');
  const menuItems = document.querySelectorAll('.navigation li');
  const currentPath = window.location.pathname; // Ex: "/home"
  let activeItem = null;

  // 1. Define o item ativo com base na URL
  menuItems.forEach((item) => {
    const link = item.querySelector('a');
    if (link.getAttribute('href') === currentPath) {
      item.classList.add('hovered');
      activeItem = item;
    }
  });

  // 2. Remove o hover do item ativo quando o mouse entra no menu
  menu.addEventListener('mouseenter', () => {
    if (activeItem) {
      activeItem.classList.remove('hovered'); // Remove cor de fundo
    }
  });

  // 3. Restaura o hover do item ativo quando o mouse sai do menu
  menu.addEventListener('mouseleave', () => {
    if (activeItem) {
      activeItem.classList.add('hovered'); // Volta ao ativo
    }
  });
});

// Menu Toggle
let toggle = document.querySelector('.toggle');
let navigation = document.querySelector('.navigation');
let main = document.querySelector('.main');

toggle.onclick = function () {
  navigation.classList.toggle('active');
  main.classList.toggle('active');
};

//Show Password
const passwordIcons = document.querySelectorAll('.password_icon');

passwordIcons.forEach((icon) => {
  icon.addEventListener('click', function () {
    const input = this.parentElement.querySelector('.form_control');
    input.type = input.type === 'password' ? 'text' : 'password';
    this.classList.toggle('fa-eye');
  });
});
