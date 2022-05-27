<section class="container qr-container" id="section-qr">
    <header>
        <h1 class="text-center pt-5">Generador Códigos QR</h1>
    </header>
    <div class="card mt-5">
        <div class="card-body">
            <form action="" method="post" id="form-qr">
                <label for="formFile" class="form-label">Subir archivo (excel)</label>
                <div class="grid-files">
                    <input class="form-control" type="file" name="file_points" id="file_points" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                    <a class="btn btn-info btn-template" href="./Template.xlsx" download="Template.xlsx">Template Puntos &nbsp; <span class="oi" data-glyph="data-transfer-download"></span></a>
                </div>
                <div class="grid-opciones">
                    <div class="opcion">
                        <label for="level">Calidad:</label>
                        <select class="form-select" aria-label="Default select example" name="level" required>
                            <option disabled>--Seleccionar--</option>
                            <option value="L">L - smallest</option>
                            <option value="M">M</option>
                            <option value="Q">Q</option>
                            <option selected value="H">H - best</option>
                        </select>
                    </div>
                    <div class="opcion">
                        <label for="size">Tamaño: </label>
                        <select class="form-select" aria-label="Default select example" name="size" required>
                            <option selected disabled>--Seleccionar--</option>
                            <option value="2">2</option>
                            <option value="4">4</option>
                            <option value="6">6</option>
                            <option value="8">8</option>
                            <option selected value="10">10</option>
                        </select>
                    </div>
                    <!--   <div class="opcion">
                        <label for="framSize">Borde: </label>
                        <select class="form-select" aria-label="Default select example" name="framSize" required>
                            <option selected disabled>--Seleccionar--</option>
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div> -->
                </div>
                <input class="btn btn-primary btn-generar" type="submit" id="btn-generar" value="Generar">
                <div class="cont-spinner d-none" id="spinner">
                    <div class="sk-fading-circle">
                        <div class="sk-circle1 sk-circle"></div>
                        <div class="sk-circle2 sk-circle"></div>
                        <div class="sk-circle3 sk-circle"></div>
                        <div class="sk-circle4 sk-circle"></div>
                        <div class="sk-circle5 sk-circle"></div>
                        <div class="sk-circle6 sk-circle"></div>
                        <div class="sk-circle7 sk-circle"></div>
                        <div class="sk-circle8 sk-circle"></div>
                        <div class="sk-circle9 sk-circle"></div>
                        <div class="sk-circle10 sk-circle"></div>
                        <div class="sk-circle11 sk-circle"></div>
                        <div class="sk-circle12 sk-circle"></div>
                    </div>
                </div>
                <span class="oi oi-check d-none icono-check my-4"></span>
                <span class="oi oi-circle-x d-none icono-error my-4"></span>
                <div class="descarga-archivo d-flex justify-content-center align-items-center">
                </div>
            </form>
        </div>
    </div>
</section>