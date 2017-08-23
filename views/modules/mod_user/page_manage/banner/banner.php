<?php
$ban = $this->BannerM->readBannerById(); ?>
<div class="container--dashboard">
    <div class="container-fluid">
            <header class="col-12 dashboard--menu">
                <?php require_once 'views/include/navbar.php'; ?>
            </header>
            <div class="container--content">
                <div class="form--container">
                    <i class="material-icons icon--form">book</i>
                    <form id="frm_ban" class="form--content" action="" method="post">
                        <div class="text--form__container">
                            <h3 class="text--form">Modificar información</h3>
                        </div>
                        <div class="input-container">
                            <label for="" class="label--form">Titulo</label>
                            <input id="ban_tit" class="input--form" type="text" name="" value="<?php echo $ban['ban_titulo']; ?>">
                        </div>
                        <div class="input-container">
                            <label for="" class="label--form">subtitulo</label>
                            <input id="ban_sub" class="input--form" type="text" name="" value="<?php echo $ban['ban_subtitulo']; ?>">
                        </div>
                        <div class="button-container">
                            <button type="submit" class="button--form">Modificar</button>
                        </div>
                    </form>
                </div>
                <div class="form--container">
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
<script src="views/assets/js/jquery.min.js"></script>
<script src="views/assets/js/sweetalert.min.js"></script>
<script src="https://cdn.datatables.net/v/dt/dt-1.10.15/datatables.min.js"></script>
<script src="views/assets/js/croppie.js"></script>
<script src="views/assets/js/tether.min.js"></script>
<script src="views/assets/js/bootstrap.min.js"></script>
<script src="views/assets/js/index.js"></script>
<script type="text/javascript">
$uploadCrop = $('#wrap-upload').croppie({
    enableExif: true,
    viewport: {
        width: 700,
        height: 415
    },
    boundary: {
        width: 750,
        height: 435
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
            url: "index.php?c=banner&a=imagen",
            type: "POST",
            data: {"image":resp},
            beforeSend: function(){
              $(".upload-result").html("CARGANDO...");
            },
            success: function (data) {
                html = '<img src="' + resp + '" />';
                $('#imageCrop').modal('hide')
                $("#wrap-result").html(html);
                document.location.href="banner";
            }
        });
    });
});
</script>
</body>
</html>
