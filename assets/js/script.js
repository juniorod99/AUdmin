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

//Disable Select
const selectLocal = document.querySelector('#select_local');
const selectLT = document.querySelector('#select_lt');
const optionsLT = selectLT.options;

selectLocal.addEventListener('change', (event) => {
  const selectedOption =
    selectLocal.options[selectLocal.selectedIndex].innerHTML;

  if (selectedOption === 'Lar Temporário') {
    selectLT.removeAttribute('disabled');
  } else {
    selectLT.setAttribute('disabled', true);
    optionsLT[0].selected = true;
  }
});

//Validar campos formulario
const form = document.querySelector('#form');

function validarFields() {
  const fields = [
    {
      id: 'nome',
      validator: nameIsValid,
    },
    {
      id: 'idade',
      validator: numberIsValid,
    },
    {
      id: 'origem',
      validator: nameIsValid,
    },
  ];

  let errosFields = 0;
  const errorIcon = '<i class="fa-solid fa-circle-exclamation"></i>';

  fields.forEach(function (field) {
    const input = document.getElementById(field.id);
    console.log(input);
    console.log('1');
    const inputBox = input.closest('.input_box');
    console.log(inputBox);
    console.log('2');
    const inputValue = input.value;
    console.log(inputValue);
    console.log('3');

    const errorSpan = inputBox.querySelector('.error');
    errorSpan.innerHTML = '';

    inputBox.classList.remove('invalid');
    inputBox.classList.add('valid');
    console.log(field.validator(inputValue));
    const fieldValidator = field.validator(inputValue);
    // console.log(fieldValidator.errorMessage);

    if (!fieldValidator.isValid) {
      errorSpan.innerHTML = `${errorIcon} ${fieldValidator.errorMessage}`;
      inputBox.classList.add('invalid');
      inputBox.classList.remove('valid');
      errosFields += 1;
      return;
    }
  });

  return errosFields;
}

function validarRadios() {
  const radios = [
    {
      id: 'vacinado',
    },
    {
      id: 'castrado',
    },
    {
      id: 'adocao',
    },
    {
      id: 'docil',
    },
  ];

  const errorIcon = '<i class="fa-solid fa-circle-exclamation"></i>';
  let errosRadios = 0;

  radios.forEach(function (radio) {
    const radioInput = document.getElementsByName(radio.id);
    const radioContainer = document.getElementById(radio.id);
    const radioErrorSpan = radioContainer.querySelector('.error');

    const selectedOption = [...radioInput].find((input) => input.checked);

    if (selectedOption) {
      radioContainer.classList.add('valid');
      radioContainer.classList.remove('invalid');
      radioErrorSpan.innerHTML = ``;
      return;
    }

    radioContainer.classList.add('invalid');
    radioContainer.classList.remove('valid');
    radioErrorSpan.innerHTML = `${errorIcon} Selecione uma opção!`;
    errosRadios += 1;
  });

  return errosRadios;
}

form.addEventListener('submit', function (e) {
  let teste;
  teste = validarRadios();
  teste1 = validarFields();
  if (teste != 0 || teste1 != 0) {
    e.preventDefault();
    console.log('previnido');
  }
  console.log(`Erros radios ${teste}`);
  console.log(`Erros fields ${teste1}`);
});

function isEmpty(value) {
  return value === '';
}

function nameIsValid(value) {
  const validator = {
    isValid: true,
    errorMessage: null,
  };

  if (isEmpty(value)) {
    validator.isValid = false;
    validator.errorMessage = 'O campo é obrigatório';
    return validator;
  }

  const min = 3;

  if (value.length < min) {
    validator.isValid = false;
    validator.errorMessage = `O nome deve ter no mínimo ${min} caracteres`;
    return validator;
  }

  const regex = /^[a-zA-Z]+$/;
  if (!regex.test(value)) {
    validator.isValid = false;
    validator.errorMessage = 'O nome deve conter apenas letras.';
  }
  return validator;
}

function numberIsValid(value) {
  const validator = {
    isValid: true,
    errorMessage: null,
  };

  if (isEmpty(value)) {
    validator.isValid = false;
    validator.errorMessage = 'O campo é obrigatório';
    return validator;
  }

  if (value < 0) {
    validator.isValid = false;
    validator.errorMessage = `A idade não pode ser negativa`;
    return validator;
  }
  return validator;
}
