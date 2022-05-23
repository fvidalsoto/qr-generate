<div class="container login">
    <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <img class="logo-capsa d-flex mx-auto mb-4" src="./img/logo-capsa.png" alt="logo">
                    <h3 class="card-title text-center mb-5">Sistema de Gestión Operativa</h3>
                    <form action="" method="post" id="form">

                        <div class="form-group">
                            <label for="user">Nombre de Usuario</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="" aria-label="Nombre de Usuario" id="user" name="user">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2"><span class="oi oi-person"></span></span>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="" aria-label="Contraseña" id="password" name="password">
                                <div class="input-group-append">
                                    <span class="input-group-text" id="basic-addon2"><span class="oi oi-lock-locked"></span></span>
                                </div>
                            </div>
                        </div>

                        <?php $fcha = date("Y-m-d"); ?>

                        <div class="form-group">
                            <label for="dia_operativo">Día Operativo</label>
                            <input type="date" class="form-control" id="dia_operativo" name="dia_operativo" value="<?php echo $fcha; ?>">
                        </div>

                        <div class="d-flex justify-content-center mt-5">
                            <button class="btn btn-primary btn-login text-uppercase" type="submit">Ingresar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="version">
    <p class="m-0 px-2">Versión: 2.0.8167.19999</p>
</div>