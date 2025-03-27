const buttons = document.querySelectorAll('.excluirBtn');
const modal = document.querySelector('dialog');

buttons.forEach((button) => {
  button.onclick = function () {
    const buttonClose = document.querySelector('.btnClose');
    const buttonSubmit = document.querySelector('.btnSubmit');
    const id = button.value;
    modal.showModal();

    buttonSubmit.onclick = function () {
      //   window.location.href = `excluir-adotante.controller.php?id=${buttonValue}`;
      fetch('excluir-adotante', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `id=${id}`,
      })
        .then((response) => {
          if (response.ok) {
            window.location.reload();
          } else {
            alert('Erro ao excluir adotante');
          }
        })
        .catch((error) => {
          console.error('Error: ', error);
          alert('Erro ao processar exclusão');
        });
    };

    buttonClose.onclick = function () {
      modal.close();
    };
  };
});
