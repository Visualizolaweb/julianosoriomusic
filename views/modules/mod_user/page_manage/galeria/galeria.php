<div class="container--dashboard">
    <div class="container-fluid">
        <div class="row no-gutters">
            <header class="col-12 dashboard--menu">
                <?php require_once 'views/include/navbar.php'; ?>
            </header>
            <div class="col-12">
                <div class="container--content">
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
                                      <button onclick="document.location.href='galeria'" class="button--form upload-result">Recortar Imagen</button>
                                  </div>
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <table id="table" class="table--container table--container__galeria">
                        <thead class="table--header">
                            <tr>
                                <th>Número</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table--body">
                          <?php
                            $item=1;
                            foreach ($this->GaleriaM->readGaleria() as $row) {
                            ?>
                            <tr>
                                <td><?php echo $item++; ?></td>
                                <td><img src=views/assets/img/galeria/<?php echo $row['gal_ruta']; ?>></td>
                                <td>
                                    <a onclick="return confirm('Esta Seguro De Eliminar Este Archivo?');" href="index.php?c=galeria&a=delete&galcod=<?php echo $row['gal_id'];?>">
                                        <i class="icon--danger material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            <?php  }   ?>
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
        width: 275,
        height: 200
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
            url: "index.php?c=galeria&a=imagen",
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
