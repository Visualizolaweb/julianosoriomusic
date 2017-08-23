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
                                <input class="input--form" type="text" name="data" value="<?php echo $_SESSION['user']['email']; ?>">
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
                        <form class="form--content" id="frm_perfil2" action="" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Modificar Sobre Mí</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Frase</label>
                                <input id="fra_per" class="input--form" type="text" name="" value="<?php echo $per['sob_frase']; ?>">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Parrafo 1</label>
                                <textarea id="pf1_per" class="input--form textarea--form" type="text" name="" value=""><?php echo $per['sob_parrafo1']; ?></textarea>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Parrafo 2</label>
                                <textarea id="pf2_per" class="input--form textarea--form" type="text" name="" value=""><?php echo $per['sob_parrafo2']; ?></textarea>
                            </div>
                            <div class="button-container">
                                <button type="submit" class="button--form">Modificar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="container--gallery">
                    <div class="form--container form--container__gallery">
                        <i class="material-icons icon--form">collections</i>
                        <div class="form--content">
                            <div class="text--form__container">
                                <h3 class="text--form">Ingresar imagen</h3>
                            </div>
                            <button type="button" class="button--form" data-toggle="modal" data-target="#imageCrop">
                              Subir foto
                            </button>
                            <div class="modal fade" id="imageCrop" tabindex="-1" role="dialog" aria-labelledby="imageCropTitle" aria-hidden="true">
                              <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="imageCropTitle">Recortar la imagen</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">
                                      <div class="col-12">
                                          <div id="wrap-upload" style="width:350px"></div>
                                      </div>
                                  </div>
                                  <div class="modal-footer">
                                      <input class="input--form" type="file" id="upload" style="display: block; width: 100%;">
                                      <button class="button--form upload-result">Recortar Imagen</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="views/assets/js/jquery.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>
<script src="views/assets/js/croppie.js"></script>
<script src="views/assets/js/tether.min.js"></script>
<script src="views/assets/js/bootstrap.min.js"></script>
<script src="views/assets/js/index.js"></script>
<script type="text/javascript">
$uploadCrop = $('#wrap-upload').croppie({
    enableExif: true,
    viewport: {
        width: 554,
        height: 354
    },
    boundary: {
        width: 700,
        height: 400
    }
});

$('#upload').on('change', function () {
    var reader = new FileReader();
    reader.onload = function (e) {
        $uploadCrop.croppie('bind', {
            url: e.target.result
        }).then(function(){
            console.log('jQuery bind complete');
        });

    }
    reader.readAsDataURL(this.files[0]);
});

$('.upload-result').on('click', function (ev) {
    $uploadCrop.croppie('result', {
        type: 'canvas',
        size: 'viewport'
    }).then(function (resp) {

        $.ajax({
            url: "index.php?c=perfil&a=imagen",
            type: "POST",
            data: {"image":resp},
            beforeSend: function(data){
              $(".upload-result").html("CARGANDO...");
            },
            success: function (data) {
                html = '<img src="' + resp + '" />';
                $('#imageCrop').modal('hide')
                $("#wrap-result").html(html);
                alert('Subio Con Exito');
            }
        });
    });
});
</script>
</body>
</html>
