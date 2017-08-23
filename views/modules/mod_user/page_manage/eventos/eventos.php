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
                        <form class="form--content" id="frm_eventos" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Ingresar evento</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Titulo</label>
                                <input class="input--form" id="eventTitle" type="text" name="data" required="">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Dirección</label>
                                <input class="input--form" id="eventAddress" type="text" name="data" required="">
                            </div>
                            <div class="input-container input-container-25 input-container-100">
                                <label for="" class="label--form label--form-100">Comienza</label>
                                <div class="form--input-50">
                                    <input class="input--form" id="startDate" type="text" name="data" placeholder="Fecha: YYYY-MM-DD" required="">
                                    <input class="input--form" id="startTime" type="text" name="data" placeholder="Hora: HH:MM" required="">
                                </div>
                            </div>
                            <div class="input-container input-container-20 input-container-100">
                                <label for="" class="label--form label--form-100">Termina</label>
                                <div class="form--input-50">
                                    <input class="input--form" id="endDate" type="text" name="data" placeholder="Fecha: YYYY-MM-DD" required="">
                                    <input class="input--form" id="endTime" type="text" name="data" placeholder="Hora: HH:MM" required="">
                                </div>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Descripción</label>
                                <textarea class="textarea--form" id="eventDescription" type="text" name="data" required=""></textarea>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">ESTADO</label>
                                <select id="eventEstado" class="input--form select--form" name="" required>
                                  <option value="">SELECCIONE UNA OPCION</option>
                                  <option value="BORRADOR">BORRADOR</option>
                                  <option value="PUBLICADO">PUBLICADO</option>
                                </select>
                            </div>
                            <div class="button-container">
                                <button class="button--form" id="btn--events">Ingresar</button>
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
                    <style>
                    .dataTables_wrapper{
                        margin-top: 40px;
                        width: 80%;
                    }
                    </style>
                    <table id="table" class="table--container">
                        <thead class="table--header">
                            <tr>
                                <th>Número</th>
                                <th>Título</th>
                                <th>Dirección</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table--body">
                            <?php
                            $item=1;
                            foreach ($this->EventosM->readEvents() as $row) {
                            ?>
                            <tr>
                                <td><?php echo $item++; ?></td>
                                <td><?php echo $row["evento_nombre"]; ?></td>
                                <td><?php echo $row["evento_direccion"]; ?></td>
                                <td><?php echo $row["evento_estado"]; ?></td>
                                <td>
                                    <a href="actualizar-evento&token=<?php echo $row['evento_code'];?>">
                                        <i class="icon--update material-icons">mode_edit</i>
                                    </a>
                                    <a onclick="return confirm('¿Estás seguro de eliminar este archivo?');" href="eliminar-evento&token=<?php echo $row['evento_code'];?>">
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
            beforeSend: function(data){
              $(".upload-result").html("CARGANDO...");
            },
            success: function (data) {
                html = '<img src="' + resp + '" />';
                $('#imageCrop').modal('hide')
                $("#wrap-result").html(html);
                document.location.href="admin-eventos";
            }
        });
    });
});
</script>
</body>
</html>
