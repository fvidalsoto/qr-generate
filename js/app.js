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
      if (resp == 1) {
        descargar();
      }
    },
  });
});

function descargar() {
  const contenedorBtn = document.querySelector('.descarga-archivo');
  const btnDescargar = document.createElement('a');

  if (document.querySelector('#btn-descarga') == null) {
    btnDescargar.id = 'btn-descarga';
    btnDescargar.classList.add('btn', 'btn-success', 'btn-descargar');
    btnDescargar.textContent = 'DESCARGAR';
    btnDescargar.download = 'CodigosQR.zip';
    btnDescargar.href = './CodigosQR.zip';

    contenedorBtn.appendChild(btnDescargar);
  }
}
