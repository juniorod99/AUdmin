export function showNotify(mensagem) {
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
