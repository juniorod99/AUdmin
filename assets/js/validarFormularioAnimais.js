//Validar campos formulario
const form = document.querySelector('#form');

function validarFields() {
  const fields = [
    {
      id: 'nome',
      validator: nameIsValid,
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
    const inputBox = input.closest('.input_box');
    const inputValue = input.value;

    const errorSpan = inputBox.querySelector('.error');
    errorSpan.innerHTML = '';

    inputBox.classList.remove('invalid');
    inputBox.classList.add('valid');
    const fieldValidator = field.validator(inputValue);

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

function validarSelects() {
  const selects = [
    {
      id: 'faixa',
    },
    {
      id: 'especie',
    },
    {
      id: 'sexo',
    },
    {
      id: 'local',
    },
    {
      id: 'lt',
    },
  ];

  let errosSelects = 0;
  const errorIcon = '<i class="fa-solid fa-circle-exclamation"></i>';

  selects.forEach(function (select) {
    const selectField = document.getElementById(select.id);
    const selectBox = selectField.closest('.input_box');
    const errorSpan = selectBox.querySelector('.error');

    if (selectField.disabled) {
      console.log('O campo LT está desabilitado.');
      return;
    }

    if (selectField.selectedIndex === 0) {
      errorSpan.innerHTML = `${errorIcon} Selecione uma opção!`;
      selectBox.classList.add('invalid');
      selectBox.classList.remove('valid');
      errosSelects += 1;
      return;
    }

    selectBox.classList.remove('invalid');
    selectBox.classList.add('valid');
    errorSpan.innerHTML = '';
  });

  return errosSelects;
}

form.addEventListener('submit', function (e) {
  let teste = validarRadios();
  let teste1 = validarFields();
  let teste3 = validarSelects();

  if (teste != 0 || teste1 != 0) {
    e.preventDefault();
    console.log('previnido');
  }
  console.log(`Erros radios ${teste}`);
  console.log(`Erros fields ${teste1}`);
  console.log(`Erros selects ${teste3}`);
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
