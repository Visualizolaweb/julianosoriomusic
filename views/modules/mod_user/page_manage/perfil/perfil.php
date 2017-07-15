<div class="container--dashboard">
    <div class="container-fluid">
        <div class="row no-gutters">
            <header class="col-12 dashboard--menu">
                <?php require_once 'views/include/navbar.php'; ?>
            </header>
            <div class="col-12">
                <div class="container--content">
                    <div class="form--container">
                        <i class="material-icons icon--form">person</i>
                        <form id="frm_perfil" class="form--content" action="" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Mi información</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Correo</label>
                                <input class="input--form" type="text" name="data" value="">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Nueva Contraseña</label>
                                <input class="input--form" type="password" name="data" value="">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Confirmar contraseña</label>
                                <input class="input--form" type="password" name="data" value="">
                            </div>
                            <div class="button-container">
                                <button type="submit" class="button--form">Modificar</button>
                            </div>
                        </form>
                    </div>
                    <div class="form--container">
                        <i class="material-icons icon--form">person</i>
                        <form class="form--content" action="index.html" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Modificar Sobre Mí</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Frase</label>
                                <input class="input--form" type="text" name="" value="">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Descripción</label>
                                <textarea class="input--form textarea--form" type="text" name="" value=""></textarea>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Imagen</label>
                                <input class="input--form" type="file" name="" value="">
                            </div>
                            <div class="button-container">
                                <button class="button--form">Modificar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
