<h2>Editing Article</h2>
<br>

<?php echo render('articles/_form'); ?>
<p>
	<?php echo Html::anchor('articles/view/'.$article->id, 'View'); ?> |
	<?php echo Html::anchor('articles', 'Back'); ?></p>
