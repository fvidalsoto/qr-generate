/* const form = document.querySelector('#form');

form.addEventListener('submit', function (e) {
  e.preventDefault();
}); */

const formQR = document.querySelector('#form-qr');
const spinner = document.querySelector('#spinner');

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
      spinner.classList.toggle('d-none');
      //Agregar spinner
      console.log('Cargando');
    },
    success: function (resp) {
      console.log(resp);
      if (resp == 1) {
        //Si el btn  tiene la clase, la saca
        spinner.classList.toggle('d-none');
        btnGenerar.classList.toggle('disabled');
        descargar();
      }
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
