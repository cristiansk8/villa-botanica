<?php
/*
	Campos slider
	- testimonios (field_repeater)

*/
	?>

  <section class="testimonios">
		<div class="testimonios-wrapper">
			<div class="testimonios-titulo">
				<img src="<?php bloginfo('template_url')?>/img/icons/ours-testimonials.png" alt="">
			</div>
			<div class="slider">
				<div class="slider--item testimonios--flex">
				<?php
					while (have_rows('testimonio')): the_row();
					$foto = get_sub_field('foto');
					$informacion = get_sub_field('informacion');
				?>

					<div class="testimonios--item">
						<img src="<?php echo $foto; ?>" alt="">
						<div class="informacion">
							<?php echo $informacion; ?>
						</div>
					</div>

					<?php endwhile; ?>
				</div>
			</div>
		</div>
  </section>
