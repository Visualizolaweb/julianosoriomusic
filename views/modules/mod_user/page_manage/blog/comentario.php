<div class="container--dashboard">
    <div class="container-fluid">
        <div class="row no-gutters">
            <header class="col-12 dashboard--menu">
                <?php require_once 'views/include/navbar.php'; ?>
            </header>
            <div class="col-12">
                <div class="container--content">
                    <table id="table" class="table--container">
                        <thead class="table--header">
                            <tr>
                                <th>Número</th>
                                <th>Blog</th>
                                <th>Comentario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody class="table--body">
                            <?php
                            $item=1;
                            foreach ($this->BlogM->readComentario() as $row) {
                            ?>
                            <tr>
                                <td><?php echo $item++; ?></td>
                                <td><?php echo $row["blo_titulo"]; ?></td>
                                <td><?php echo $row["com_text"]; ?></td>
                                <td>
                                    <a onclick="return confirm('Esta Seguro De Eliminar Este Archivo?');" href="delete-comentario&token=<?php echo $row['com_id']; ?>">
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
