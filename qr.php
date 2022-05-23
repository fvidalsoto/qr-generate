<div class="container">
    <h1 class="text-center mt-3">Generador QR</h1>
    <div class="card mt-5">
        <div class="card-body">
            <form action="" method="post" id="form-qr">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="data" placeholder="Codigo" value="<?php echo (isset($_REQUEST['data']) ? htmlspecialchars($_REQUEST['data']) : 'PHP QR Code :)') ?>">
                </div>

                <div class="grid-opciones">
                    <div class="opcion">
                        <label for="level">Calidad:</label>
                        <select class="form-select" aria-label="Default select example" name="level" required>
                            <option selected disabled>--Seleccionar--</option>
                            <option value="L">L - smallest</option>
                            <option value="M">M</option>
                            <option value="Q">Q</option>
                            <option value="H">H - best</option>
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
                            <option value="10">10</option>
                        </select>
                    </div>
                    <div class="opcion">
                        <label for="framSize">Borde: </label>
                        <select class="form-select" aria-label="Default select example" name="framSize" required>
                            <option selected disabled>--Seleccionar--</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                </div>
                <input class="btn btn-primary btn-generar" type="submit" value="Generar">
            </form>
        </div>
    </div>
</div>