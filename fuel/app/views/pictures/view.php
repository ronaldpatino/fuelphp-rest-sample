<h2>Viewing #<?php echo $picture->id; ?></h2>

<p>
	<strong>Imagen:</strong>
	<?php echo $picture->imagen; ?></p>
<p>
	<strong>Width:</strong>
	<?php echo $picture->width; ?></p>
<p>
	<strong>Height:</strong>
	<?php echo $picture->height; ?></p>
<p>
	<strong>Dimension id:</strong>
	<?php echo $picture->dimension_id; ?></p>
<p>
	<strong>Seccion id:</strong>
	<?php echo $picture->seccion_id; ?></p>
<p>
	<strong>Article id:</strong>
	<?php echo $picture->article_id; ?></p>
<p>
	<strong>Estado:</strong>
	<?php echo $picture->estado; ?></p>

<?php echo Html::anchor('pictures/edit/'.$picture->id, 'Edit'); ?> |
<?php echo Html::anchor('pictures', 'Back'); ?>