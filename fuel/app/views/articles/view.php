<h2>Viewing #<?php echo $article->id; ?></h2>

<p>
	<strong>Nombre:</strong>
	<?php echo $article->nombre; ?></p>
<p>
	<strong>Periodista id:</strong>
	<?php echo $article->periodista_id; ?></p>
<p>
	<strong>Seccion id:</strong>
	<?php echo $article->seccion_id; ?></p>
<p>
	<strong>Dimension id:</strong>
	<?php echo $article->dimension_id; ?></p>
<p>
	<strong>Fecha:</strong>
	<?php echo $article->fecha; ?></p>

<h3 id="comments">Comments</h3>

<?php foreach ($article->pictures as $comment): ?>

   <p><?php echo Html::anchor('pictures/view/' . $comment->id, $comment->imagen) ?></p>

<?php endforeach; ?>
<?php echo Html::anchor('articles/edit/'.$article->id, 'Edit'); ?> |
<?php echo Html::anchor('articles', 'Back'); ?>