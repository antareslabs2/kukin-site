<?php if(have_rows('slides')) { ?>
<div class="slider">

	<?php while(have_rows('slides')) { the_row(); ?>

	<?php $image = get_sub_field('image'); ?>
    <div class="slider__slide"
		<?php if($image) { ?>
    	style="background-image: url('<?= $image['url'] ;?>');"
    	<?php } ?>
    	>
    	<div class="container">
    		<div class="slider__content">
    			<?php if( $title = get_sub_field('title') ) { ?>
			    <h2 class="slider__title"><?= $title ?></h2>
			    <?php } ?>
			    <?php if( $description = get_sub_field('description') ) { ?>
			    <p class="slider__text"><?= $description ?></p>
			    <?php } ?>
			</div>
		</div>
	</div>

   <?php } ?>

</div>
<div class="slider__arrows"></div>
<?php } ?>