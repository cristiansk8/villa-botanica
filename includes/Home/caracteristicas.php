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
					$imagen = get_sub_field('foto');
          $informacion = get_sub_field('informacion');

			 ?>
       <div class="caracteristicas-item">
         <div class="imagen">
            <img src="<?php echo $imagen; ?>" alt="">
         </div>
         <div class="informacion">
           <?php echo $informacion; ?>
         </div>
       </div>
       		<?php endwhile; ?>
    </div>
  </section>
