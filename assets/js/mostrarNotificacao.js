function showNotify(mensagem) {
  Toastify({
    text: mensagem,
    duration: 5000,
    close: true,
    gravity: 'top',
    position: 'right',
    stopOnFocus: true,
    style: {
      background: '#00b09b',
    },
    onClick: function () {},
  }).showToast();
}

document.addEventListener('DOMContentLoaded', function () {
  const mensagem = localStorage.getItem('mensagem');

  if (mensagem) {
    const mensagens = {
      exclusao: 'Adotante excluído com sucesso!',
      alteracao: 'Dados alterados com sucesso!',
      cadastro: 'Adotante cadastrado com sucesso!',
    };

    const textoMensagem = mensagens[mensagem] || mensagem;
    console.log(textoMensagem);
    showNotify(textoMensagem);
    localStorage.removeItem('mensagem');
  }
});
