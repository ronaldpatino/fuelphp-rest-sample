<h2>Editing Picture</h2>
<br>

<?php echo render('pictures/_form'); ?>
<p>
	<?php echo Html::anchor('pictures/view/'.$picture->id, 'View'); ?> |
	<?php echo Html::anchor('pictures', 'Back'); ?></p>
