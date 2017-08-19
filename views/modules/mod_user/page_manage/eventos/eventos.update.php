<?php
    $_SESSION["event_code"] = $_GET["token"];
    $eventos = $this->EventosM->readEventsByCode($_SESSION["event_code"]);
?>
<div class="container--dashboard">
    <div class="container-fluid">
        <div class="row no-gutters">
            <header class="col-12 dashboard--menu">
                <?php require_once 'views/include/navbar.php'; ?>
            </header>
            <div class="col-12">
                <div class="container--content container--content__update">
                    <div class="form--container">
                        <i class="material-icons icon--form">event</i>
                        <form class="form--content" id="frm_eventos_up" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Modificar evento</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Titulo</label>
                                <input class="input--form" type="text" name="data[0]" required="" value="<?php echo $eventos['evento_nombre'];?>">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Dirección</label>
                                <input class="input--form" type="text" name="data[2]" required="" value="<?php echo $eventos['evento_direccion'];?>">
                            </div>
                            <div class="input-container input-container-25 input-container-100">
                                <label for="" class="label--form label--form-100">Comienza</label>
                                <div class="form--input-50">
                                    <input class="input--form" id="startDate" type="text" name="data[3]" placeholder="Fecha: YYYY-MM-DD" required="" value="<?php echo $eventos['evento_fecha_inicio'];?>">
                                    <input class="input--form" id="startTime" type="text" name="data[4]" placeholder="Hora: HH:MM" required="" value="<?php echo substr($eventos['evento_hora_inicio'], 0 , -3);?>">
                                </div>
                            </div>
                            <div class="input-container input-container-20 input-container-100">
                                <label for="" class="label--form label--form-100">Termina</label>
                                <div class="form--input-50">
                                    <input class="input--form" id="endDate" type="text" name="data[5]" placeholder="Fecha: YYYY-MM-DD" required="" value="<?php echo $eventos['evento_fecha_fin'];?>">
                                    <input class="input--form" id="endTime" type="text" name="data[6]" placeholder="Hora: HH:MM" required="" value="<?php echo substr($eventos['evento_hora_fin'], 0 , -3);?>">
                                </div>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Descripción</label>
                                <textarea class="textarea--form" id="eventDesc" type="text" name="data[1]" required="" value=""><?php echo $eventos['evento_descripcion'];?></textarea>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">ESTADO</label>
                                <?php
                                if ($eventos['evento_estado']=="BORRADOR"){
                                  $estado = "PUBLICADO";
                                }else{
                                  $estado = "BORRADOR";
                                }
                                 ?>
                                <select id="eventEstado" class="input--form select--form" name="" required>
                                  <option value="<?php echo $eventos['evento_estado'] ?>"><?php echo $eventos['evento_estado'] ?></option>
                                  <option value="<?php echo $estado ?>"><?php echo $estado ?></option>
                                </select>
                            </div>
                            <div class="button-container">
                                <button class="button--form" id="btn--events_up">Modificar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
