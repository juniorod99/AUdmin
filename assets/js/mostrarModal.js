import { showNotify } from './mostrarNotificacao.js';

const buttons = document.querySelectorAll('.excluirBtn');
const modal = document.querySelector('dialog');

buttons.forEach((button) => {
  button.onclick = function () {
    const buttonClose = document.querySelector('.btnClose');
    const buttonSubmit = document.querySelector('.btnSubmit');
    const id = button.value;
    modal.showModal();

    buttonSubmit.onclick = function () {
      fetch('excluir-adotante', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: `id=${id}`,
      })
        .then((response) => {
          if (response.ok) {
            localStorage.setItem('mensagem', 'Adotante excluido com sucesso!');
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

document.addEventListener('DOMContentLoaded', function () {
  const mensagem = localStorage.getItem('mensagem');

  if (mensagem) {
    const mensagens = {
      exclusao: 'Adotante excluído com sucesso!',
      alteracao: 'Dados alterados com sucesso!',
    };

    const textoMensagem = mensagens[mensagem] || mensagem;

    showNotify(textoMensagem);
    localStorage.removeItem('mensagem');
  }
});
