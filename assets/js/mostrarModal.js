const buttons = document.querySelectorAll('.excluirBtn');
const modal = document.querySelector('dialog');

buttons.forEach((button) => {
  button.onclick = function () {
    const buttonClose = document.querySelector('.btnClose');
    modal.showModal();

    buttonClose.onclick = function () {
      modal.close();
    };
  };
});
