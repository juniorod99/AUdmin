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

//Drop File
const label = document.querySelector('#label_img');
console.log(label);

function onEnter() {
  label.classList.add('active');
}

function onLeave() {
  label.classList.remove('active');
}

label.addEventListener('dragenter', onEnter);
label.addEventListener('drop', onLeave);
label.addEventListener('dragend', onLeave);
label.addEventListener('dragleave', onLeave);

const input = document.querySelector('#file');
const dropzone = document.querySelector('#drop_zone');

input.addEventListener('change', (event) => {
  if (input.isDefaultNamespace.length > 0) {
    const type = input.files[0].type;
    const formats = ['image/jpg', 'image/png', 'image/jpeg'];
    if (!formats.includes(type)) {
      alert('Esse formato não é permitido!');
      return;
    }

    if (document.querySelector('#cover')) {
      dropzone.removeChild(document.querySelector('#cover'));
    }
    const img = document.createElement('img');
    img.id = 'cover';
    img.src = URL.createObjectURL(input.files[0]);

    dropzone.appendChild(img);
  }
});
