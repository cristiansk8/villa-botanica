<?php

$fondo = get_field('imagen_fondo');
$flor = get_field('icono_flor');
$informacion = get_field('informacion');
 ?>

 <section>
   <div class="bienvenido" style="background-image:url('<?php echo $fondo; ?>');">
    <div class="bienvenido-content">
      <img src="<?php echo $flor; ?>" alt="">
      <div class="informacion">
        <?php echo $informacion; ?>
      </div>
    </div>
   </div>
 </section>
