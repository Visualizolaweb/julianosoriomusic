<?php $contacto = $this->ContactameM->readContactoById(); ?>
<div class="container--dashboard">
    <div class="container-fluid">
        <div class="row no-gutters">
            <header class="col-12 dashboard--menu">
                <?php require_once 'views/include/navbar.php'; ?>
            </header>
            <div class="col-12">
                <div class="container--content">
                    <div class="form--container">
                        <i class="material-icons icon--form">email</i>
                        <form class="form--content" action="" id="frm_contacto" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Modificar contáctame</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Correo</label>
                                <input id="ema_con" class="input--form" type="email" name="" value="<?php echo $contacto['con_email']; ?>" required>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Telefono</label>
                                <input id="tel_con" class="input--form" type="text" name="" value="<?php echo $contacto['con_telefono']; ?>" required>
                            </div>
                            <div class="button-container">
                                <button type="submit" class="button--form">Modificar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
