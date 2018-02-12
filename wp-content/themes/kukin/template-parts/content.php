<?php if($title = get_sub_field('title')) { ?>
<h2><span><?= $title ?></span></h2>
<?php } ?>

<?php if($content = get_sub_field('content')) { ?>
<p><?= $content ?></p>
<?php } ?>