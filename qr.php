<div class="container">
    <h1 class="text-center mt-3">Generador Código QR</h1>
    <div class="card mt-5">
        <div class="card-body">
            <form action="" method="post" id="form-qr">
                <div class="mb-3">
                    <label for="formFile" class="form-label">Subir archivo (excel)</label>
                    <input class="form-control" type="file" name="file_points" id="file_points" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" required>
                    <a class="btn btn-success mt-3" href="./Template.xlsx" download="Template.xlsx">Template Puntos</a>
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
                    <div class="opcion">
                        <label for="framSize">Borde: </label>
                        <select class="form-select" aria-label="Default select example" name="framSize" required>
                            <option selected disabled>--Seleccionar--</option>
                            <option selected value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <input class="btn btn-primary btn-generar" type="submit" id="btn-generar" value="Generar">
                <div class="descarga-archivo d-flex justify-content-center align-items-center">
                </div>
            </form>
        </div>
    </div>
</div>