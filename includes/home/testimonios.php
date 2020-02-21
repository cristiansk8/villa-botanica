<?php
/*
	Campos slider
	- testimonios (field_repeater)

*/
	?>

  <section>
		<div class="testimonios-wrapper testimonios">
      <div class="titulo">
        <img src="<?php bloginfo('template_url')?>/img/icons/ours-testimonials.png" alt="">
      </div>
			<?php
				while (have_rows('testimonio')): the_row();
					$foto = get_sub_field('foto');
          $informacion = get_sub_field('informacion');
			 ?>

			<div class="slider--item">
        <img src="<?php echo $foto; ?>" alt="">
        <div class="informacion">
          <?php echo $informacion; ?>
        </div>
			</div>

		<?php endwhile; ?>
		</div>

  </section>
