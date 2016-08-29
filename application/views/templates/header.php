<div id="header">
    <!-- Logo -->
    <h1><a href="<?php echo base_url()?>" id="logo"><?php echo $datosTorneo[0]['NOMBRE_LIGA']?></a></h1>
    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li id="inicio"><a href="<?php echo base_url()?>">Inicio</a></li>
            <li id="resultados">
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
            <li id="equipo"><a href="<?php echo base_url().'index.php/equipo/index'?>">Equipos</a>
                <?php if(sizeof($categorias) > 1){
                    echo '<ul>';
                    foreach ($categorias AS $cat){
                        echo "<li><a href=''>".$cat['NOMBRE_CATEGORIA']."</a></li>";
                    }
                    echo '</ul>';
                }
                ?>
            </li>
            <li id="estadisticas"><a href="">Estadísticas</a>
                <?php if(sizeof($categorias) > 1){
                    echo '<ul>';
                    foreach ($categorias AS $cat){
                        echo "<li><a href=''>".$cat['NOMBRE_CATEGORIA']."</a></li>";
                    }
                    echo '</ul>';
                }
                ?>
            </li>
            <li id="galeria"><a href="">Galería</a></li>
            <li id="noticias"><a href="">Noticias</a></li>
            <li id="historia"><a href="">Historia</a></li>
        </ul>
    </nav>

</div>
<script>
    $(document).ready(function () {
      $('#<?php echo $current;?>').addClass('current');
    });
</script>