<div id="header">
    <!-- Logo -->
    <h1><a id="logo"><?php echo $datosTorneo[0]['NOMBRE_LIGA']?></a></h1>

    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li class="current"><a href="#">Inicio</a></li>
            <li>
                <a href="#">Resultados</a>
                <?php if(sizeof($categorias) > 1){
                echo '<ul>';
                foreach ($categorias AS $cat){
                        echo "<li><a href=''>".$cat['NOMBRE_CATEGORIA']."</a></li>";
                    }
                echo '</ul>';
                }
                ?>
            </li>
            <li><a href="">Equipos</a>
                <?php if(sizeof($categorias) > 1){
                    echo '<ul>';
                    foreach ($categorias AS $cat){
                        echo "<li><a href=''>".$cat['NOMBRE_CATEGORIA']."</a></li>";
                    }
                    echo '</ul>';
                }
                ?>
            </li>
            <li><a href="">Estadísticas</a>
                <?php if(sizeof($categorias) > 1){
                    echo '<ul>';
                    foreach ($categorias AS $cat){
                        echo "<li><a href=''>".$cat['NOMBRE_CATEGORIA']."</a></li>";
                    }
                    echo '</ul>';
                }
                ?>
            </li>
            <li><a href="">Galería</a></li>
            <li><a href="">Noticias</a></li>
            <li><a href="">Historia</a></li>
        </ul>
    </nav>

</div>