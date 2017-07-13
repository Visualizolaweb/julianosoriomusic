<div class="container--dashboard">
    <div class="container-fluid">
        <div class="row no-gutters">
            <header class="col-12 dashboard--menu">
                <?php require_once 'views/include/navbar.php'; ?>
            </header>
            <div class="col-12">
                <div class="container--content">
                    <div class="form--container">
                        <i class="material-icons icon--form">book</i>
                        <form class="form--content" action="index.html" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Modificar información</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Subtitulo</label>
                                <input class="input--form" type="text" name="" value="">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Titulo</label>
                                <input class="input--form" type="text" name="" value="">
                            </div>
                            <div class="button-container">
                                <button class="button--form">Modificar</button>
                            </div>
                        </form>
                    </div>
                    <div class="form--container">
                        <i class="material-icons icon--form">image</i>
                        <form class="form--content" action="index.html" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Modificar banner</h3>
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
