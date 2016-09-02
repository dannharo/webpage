<div id="header">
    <!-- Logo -->
    <h1><a href="<?php echo base_url()?>" id="logo"><?php echo $datosTorneo[0]['NOMBRE_LIGA']?> -- <i>Administración</i> -- </a></h1>
    <!-- Nav -->
    <nav id="nav">
        <ul>
            <li id="partidos"><a href="<?php echo base_url().'index.php/admon/partidos/index';?>">Partidos</a></li>
            <li id="equipos"><a href="<?php echo base_url().'index.php/admon/equipos/index';?>">Equipos</a></li>
            <li id="jugadores"><a href="<?php echo base_url().'index.php/admon/jugadores/index'?>">Jugadores</a></li>
            <li id="admon-tor"><a href="<?php echo base_url().'index.php/admon/administracion/index';?>">Admon. de Torneos</a>
                <ul>
                    <li><a href='<?php echo base_url().'index.php/admon/torneos/index';?>'>Torneo</a></li>
                    <li><a href='<?php echo base_url().'index.php/admon/categorias/index';?>'>Categotía</a></li>
                </ul>
            </li>
            <li id="galerias"><a href="<?php echo base_url().'index.php/admon/galerias/index';?>">Galerías</a></li>
            <li id="noticias"><a href="<?php echo base_url().'index.php/admon/noticias/index';?>">Noticias</a></li>
            <li id="otros"><a href="<?php echo base_url().'index.php/admon/administracion/index';?>">Otros</a>
                <ul>
                    <li><a href='<?php echo base_url().'index.php/admon/lugares/index';?>'>Lugares</a></li>
                    <li><a href='<?php echo base_url().'index.php/admon/arbitros/index';?>'>Árbitros</a></li>
                    <li><a href='<?php echo base_url().'index.php/admon/usuarios/index';?>'>Usuarios</a></li>
                </ul>
            </li>
        </ul>
    </nav>

</div>
<script>
    $(document).ready(function () {
      $('#<?php echo $current;?>').addClass('current');
    });
</script>