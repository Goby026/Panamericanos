<main>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-right mt-2">
                    <!--<a href="?c=video&a=registrarVideo" class="btn btn-outline-success"><i class="fas fa-plus"></i> Nuevo Video</a>-->
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <?php
            foreach($videos as $row):
                ?>
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
<!--                        <img src="--><?php //echo $row->video; ?><!--" class="card-img-top" alt="...">-->
                        <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/<?php echo $row->video;?>" allowfullscreen></iframe>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row->nombre; ?></h5>

                            <?php
                            if (isset($_SESSION['tipo_usuario'])){
                                if ($_SESSION['tipo_usuario'] === "2"){
                                    ?>
                                    <div class="dropdown">
                                        <button class="btn btn-outline-info btn-block dropdown-toggle" type="button"
                                                id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                            Acciones
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item"
                                               href="?c=video&a=Crud&id=<?php echo $row->codigo; ?>">Editar</a>
                                            <a class="dropdown-item" href="?c=video&a=Eliminar&id=<?php echo $row->codigo; ?>">Eliminar</a>


                                        </div>
                                    </div>
                                    <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</main>
