<div class="container--dashboard">
    <div class="container-fluid">
        <div class="row no-gutters">
            <header class="col-12 dashboard--menu">
                <?php require_once 'views/include/navbar.php'; ?>
            </header>
            <div class="col-12">
                <div class="container--content">
                    <div class="form--container">
                        <i class="material-icons icon--form">album</i>
                        <form class="form--content" action="crear-discografia" method="post" enctype="multipart/form-data">
                            <div class="text--form__container">
                                <h3 class="text--form">Ingresar canciones</h3>
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Titulo</label>
                                <input class="input--form" type="text" name="data" value="">
                            </div>
                            <div class="input-container">
                                <label for="" class="label--form">Cancion</label>
                                <input class="input--form" type="file" name="cancion" value="">
                            </div>
                            <div class="button-container">
                                <button type="submit" class="button--form">Ingresar</button>
                            </div>
                        </form>
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
                          <?php $item=1;
                            foreach ($this->DiscografiaM->readDiscografia() as $row) {

                              ?>
                            <tr>
                                <td><?php echo $item++; ?></td>
                                <td><?php echo $row["dis_titulo"]; ?></td>
                                <td>
                                    <a href="#">
                                        <i class="material-icons">mode_edit</i>
                                    </a>
                                    <a onclick="return confirm('Esta Seguro De Eliminar Este Archivo?');" href="index.php?c=discografia&a=delete&discod=<?php echo $row['dis_id'];?>">
                                        <i class="material-icons">delete</i>
                                    </a>
                                </td>
                            </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
