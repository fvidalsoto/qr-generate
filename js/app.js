/* const form = document.querySelector('#form');

form.addEventListener('submit', function (e) {
  e.preventDefault();
}); */

const formQR = document.querySelector('#form-qr');
const spinner = document.querySelector('#spinner');
const iconoCheck = document.querySelector('.icono-check');
const iconoError = document.querySelector('.icono-error');

formQR.addEventListener('submit', function (e) {
  e.preventDefault();
  const btnGenerar = document.querySelector('#btn-generar');
  let formulario = new FormData(this);
  $.ajax({
    url: './generate-qr.php',
    type: 'POST',
    data: formulario,
    contentType: false,
    processData: false,
    beforeSend: function () {
      //Si el btn no tiene la clase, la pone
      btnGenerar.classList.toggle('disabled');
      btnGenerar.disabled = true;
      spinner.classList.toggle('d-none');
      iconoCheck.classList.add('d-none');
      iconoError.classList.add('d-none');
      document.querySelector('#btn-descarga') != null
        ? document.querySelector('#btn-descarga').remove()
        : '';
      //Agregar spinner
    },
    success: function (resp) {
      console.log(resp);
      if (resp == 1) {
        //Si el btn  tiene la clase, la saca
        spinner.classList.toggle('d-none');
        iconoCheck.classList.toggle('d-none');
        btnGenerar.classList.toggle('disabled');
        btnGenerar.disabled = false;
        descargar();
      } else {
        document.querySelector('#btn-descarga') == null
          ? ''
          : document.querySelector('#btn-descarga').remove();
        spinner.classList.toggle('d-none');
        iconoError.classList.toggle('d-none');
        btnGenerar.classList.toggle('disabled');
        btnGenerar.disabled = false;
      }
    },
    error: function () {
      iconoError.classList.toggle('d-none');
    },
  });
});

function descargar() {
  const contenedorBtn = document.querySelector('.descarga-archivo');

  if (document.querySelector('#btn-descarga') == null) {
    const btnDescargar = document.createElement('a');
    btnDescargar.id = 'btn-descarga';
    btnDescargar.classList.add('btn', 'btn-success', 'btn-descargar');
    btnDescargar.textContent = 'DESCARGAR';
    btnDescargar.download = 'CodigosQR.zip';
    btnDescargar.href = './CodigosQR.zip';
    contenedorBtn.appendChild(btnDescargar);
  }
}
