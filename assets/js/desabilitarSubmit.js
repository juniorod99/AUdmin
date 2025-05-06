document.addEventListener('DOMContentLoaded', function () {
  const form = document.querySelector('#form');
  const submitButton = document.querySelector('.btn_default');
  const originalValues = {};

  // Armazena valores iniciais
  Array.from(form.elements).forEach((element) => {
    if (element.name) {
      originalValues[element.name] = element.value;
    }
  });

  // Verifica alterações
  form.addEventListener('input', function () {
    let hasChanges = false;

    Array.from(form.elements).forEach((element) => {
      if (element.name && element.value !== originalValues[element.name]) {
        hasChanges = true;
      }
    });

    submitButton.disabled = !hasChanges;
    submitButton.classList.remove('disabled');
  });

  // Desabilita inicialmente se não houver alterações
  submitButton.disabled = true;
  submitButton.classList.add('disabled');
});
