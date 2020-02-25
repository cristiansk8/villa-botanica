<?php
/*
	Campos slider
	- caracteristicas (field_repeater)
    foto
    Imfomacion
*/
	?>
  <section>
    <div class="caracteristicas">
      <?php
				while (have_rows('caracteristicas')): the_row();
					$imagen = get_sub_field('imagen');
          $informacion = get_sub_field('informacion');

			 ?>
       <div class="caracteristicas-item">
         <div class="imagen" style="background-image: url(<?php echo $imagen; ?>);">
            <img src="<?php echo $imagen; ?>" alt="">
         </div>
         <div class="informacion">
           <div class="informacion--caption">
              <?php echo $informacion; ?>
            </div>
         </div>
       </div>
       		<?php endwhile; ?>
    </div>
  </section>
