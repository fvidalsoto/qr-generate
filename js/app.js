/* const form = document.querySelector('#form');

form.addEventListener('submit', function (e) {
  e.preventDefault();
}); */

const formQR = document.querySelector('#form-qr');

formQR.addEventListener('submit', function (e) {
  e.preventDefault();
  let formulario = new FormData(this);
  $.ajax({
    url: './generate-qr.php',
    type: 'POST',
    data: formulario,
    contentType: false,
    processData: false,
    success: function (resp) {
      console.log(resp);
    },
  });
});
