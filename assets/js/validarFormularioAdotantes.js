//Validar campos formulario
const form = document.querySelector('#form');

form.addEventListener('submit', function (e) {
  let errosFields = validarFields();
  let errosSelects = validarSelects();

  if (errosFields === 0 && errosSelects === 0) {
    return true;
  } else {
    e.preventDefault();
    console.log('previnido');
  }
  console.log(`Erros fields ${errosFields}`);
  console.log(`Erros selects ${errosSelects}`);
});

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

function validarSelects() {
  const selects = [
    {
      id: 'idade',
    },
  ];

  let errosSelects = 0;
  const errorIcon = '<i class="fa-solid fa-circle-exclamation"></i>';

  selects.forEach(function (select) {
    const selectField = document.getElementById(select.id);
    const selectBox = selectField.closest('.input_box');
    const errorSpan = selectBox.querySelector('.error');

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
