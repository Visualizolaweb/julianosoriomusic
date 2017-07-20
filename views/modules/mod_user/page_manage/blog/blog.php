<div class="container--dashboard">
    <div class="container-fluid">
        <div class="row no-gutters">
            <header class="col-12 dashboard--menu">
                <?php require_once 'views/include/navbar.php'; ?>
            </header>
            <div class="col-12">
                <div class="container--content">
                    <div class="form--container">
                        <i class="material-icons icon--form">chrome_reader_mode</i>
                        <form id="frm_blog" class="form--content" action="" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Ingresar noticia</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Titulo</label>
                                <input id="tit_blo" class="input--form" type="text" name="data" value="">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Descripción</label>
                                <textarea id="des_blo" class="input--form textarea--form" name="data" value=""></textarea>
                            </div>
                            <div class="button-container">
                                <button type="submit" class="button--form">Ingresar</button>
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
                                      <button onclick="document.location.href='blog'" class="button--form upload-result">Recortar Imagen</button>
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
                                <th>Titulo</th>
                                <th>Imagen</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table--body">
                            <?php
                            $item=1;
                            foreach ($this->BlogM->readBlog() as $row) {
                            ?>
                            <tr>
                                <td><?php echo $item++; ?></td>
                                <td><?php echo $row["blo_titulo"]; ?></td>
                                <td><img src="views/assets/img/blog/<?php echo $row['bli_ruta']; ?>"></td>
                                <td>
                                    <a href="#">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a onclick="return confirm('Esta Seguro De Eliminar Este Archivo?');" href="index.php?c=blog&a=delete&blocod=<?php echo $row['bli_id']; ?>">
                                        <i class="material-icons">delete</i>
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
        width: 370,
        height: 260
    },
    boundary: {
        width: 600,
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
            url: "index.php?c=blog&a=create",
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
