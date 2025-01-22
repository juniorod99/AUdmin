// add hovereed class to seelect list item
let list = document.querySelectorAll('.navigation li');

function activeLink() {
  list.forEach((item) => {
    item.classList.remove('hovered');
  });
  this.classList.add('hovered');
}

list.forEach((item) => item.addEventListener('mouseover', activeLink));

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
