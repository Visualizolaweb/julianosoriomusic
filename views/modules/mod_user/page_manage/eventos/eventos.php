<div class="container--dashboard">
    <div class="container-fluid">
        <div class="row no-gutters">
            <header class="col-12 dashboard--menu">
                <?php require_once 'views/include/navbar.php'; ?>
            </header>
            <div class="col-12">
                <div class="container--content">
                    <div class="form--container">
                        <i class="material-icons icon--form">event</i>
                        <form class="form--content" action="index.html" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Ingresar evento</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Titulo</label>
                                <input class="input--form" type="text" name="" value="">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Dirección</label>
                                <input class="input--form" type="text" name="" value="">
                            </div>
                            <div class="input-container input-container-25 input-container-100">
                                <label for="" class="label--form label--form-100">Comienza</label>
                                <div class="form--input-50">
                                    <input class="input--form" type="text" name="" value="">
                                    <input class="input--form" type="text" name="" value="">
                                </div>
                            </div>
                            <div class="input-container input-container-20 input-container-100">
                                <label for="" class="label--form label--form-100">Termina</label>
                                <div class="form--input-50">
                                    <input class="input--form" type="text" name="" value="">
                                    <input class="input--form" type="text" name="" value="">
                                </div>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Descripción</label>
                                <textarea class="input--form textarea--form" type="text" name="" value=""></textarea>
                            </div>
                            <div class="button-container">
                                <button class="button--form">Ingresar</button>
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
                              <div class="modal-dialog" role="document">
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
                                      <button onclick="document.location.href='eventos'" class="button--form upload-result">Recortar Imagen</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <table id="table" class="table--container">
                        <thead class="table--header">
                            <tr>
                                <th>Número</th>
                                <th>Título</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table--body">
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <a href="#">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <a href="#">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <a href="#">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <a href="#">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <a href="#">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>
                                    <a href="#">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a href="#">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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
        width: 500,
        height: 400
    },
    boundary: {
        width: 500,
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
            url: "index.php?c=eventos&a=imagen",
            type: "POST",
            data: {"image":resp},
            success: function (data) {
                html = '<img src="' + resp + '" />';
                $('#imageCrop').modal('hide')
                $("#wrap-result").html(html);
            }
        });
    });
});
</script>
</body>
</html>