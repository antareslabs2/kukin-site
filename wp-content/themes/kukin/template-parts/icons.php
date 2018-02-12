<?php if(have_rows('block')) { ?>
<div class="icons">

	<?php while(have_rows('block')) { the_row(); ?>

	<?php $icon = get_sub_field('icon'); ?>

	<div class="icon">
		<?php if($icon = get_sub_field('icon')) { ?>
			<div class="icon__img">
				<?= file_get_contents(wp_get_attachment_image_src($icon, 'full')[0]); ?>
			</div>
		<?php } ?>
		<div class="icon__content">
			<?php if($title = get_sub_field('title')) { ?>
		    <h3 class="icon__title"><?= $title ?></h3>
		    <?php } ?>
			<?php if(have_rows('description')) { ?>
				<?php while(have_rows('description')) { the_row(); ?>
				<?php if($p = get_sub_field('paragraph')) { ?>
			    <p class="icon__text"><?= $p ?></p>
			    <?php } ?>
			    <?php } ?>
			<?php } ?>
		</div>
	</div>

   <?php } ?>

</div>
<?php } ?>