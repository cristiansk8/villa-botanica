<?php
/*
	Campos slider
	- slider_home (field_repeater)

*/
	?>

  <section>
		<div class="slider-wrapper slider">
			<?php
				while (have_rows('slider')): the_row();
					$imagen = get_sub_field('imagen');
			 ?>

			<div class="slider--item">
        <img src="<?php echo $imagen; ?>" alt="">
			</div>

		<?php endwhile; ?>
		</div>

  </section>
