<?php
    $_SESSION["blo_code"] = $_GET["token"];
    $blog = $this->BlogM->readBlogById($_SESSION["blo_code"]);
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
                        <form class="form--content" id="frm_blo_up" method="post">
                            <div class="text--form__container">
                                <h3 class="text--form">Modificar Blog</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Titulo</label>
                                <input class="input--form" type="text" name="" id="blo_tit_u" required="" value="<?php echo $blog['blo_titulo'];?>">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Descripción</label>
                                <textarea class="textarea--form" id="blo_des_u" type="text" name="" required=""><?php echo $blog['blo_descripcion'];?></textarea>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">ESTADO</label>
                                <select id="blo_sel_u" class="input--form select--form" name="" required>
                                  <?php
                                  if ($blog['blo_estado']=="BORRADOR"){
                                    $estado = "PUBLICADO";
                                  }else{
                                    $estado = "BORRADOR";
                                  }
                                   ?>
                                  <option value="<?php echo $blog['blo_estado'] ?>"><?php echo $blog['blo_estado'] ?></option>
                                  <option value="<?php echo $estado ?>"><?php echo $estado ?></option>
                                </select>
                            </div>
                            <div class="button-container">
                                <button class="button--form" id="btn--blo_up">Modificar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
