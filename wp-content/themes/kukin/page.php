<?php
/**
 * The template for displaying all single posts and attachments
 */

get_header(); ?>

<div class="content"
<?php if($bg_image = get_field('background_image')) { ?> style="background-image: url(<?= $bg_image['url'] ?>);"<?php } ?>
>
	<div class="content__inner">
		<div class="content__scrollable">

		<?php if( have_rows('page_content') ) { ?>

			<?php while ( have_rows('page_content') ) { the_row();

				switch (get_row_layout()) {
					case 'content_block':
						get_template_part('template-parts/content');
						break;

					case 'why_me_block':
						get_template_part('template-parts/icons');
						break;
				}

			} ?>

		<?php } ?>

		</div>
	</div>
</div>

<?php get_footer(); ?>
