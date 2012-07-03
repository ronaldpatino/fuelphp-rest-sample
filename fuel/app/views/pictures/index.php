<h2>Listing Pictures</h2>
<br>
<?php if ($pictures): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>Imagen</th>
			<th>Width</th>
			<th>Height</th>
			<th>Dimension id</th>
			<th>Seccion id</th>
			<th>Article id</th>
			<th>Estado</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($pictures as $picture): ?>		<tr>

			<td><?php echo $picture->imagen; ?></td>
			<td><?php echo $picture->width; ?></td>
			<td><?php echo $picture->height; ?></td>
			<td><?php echo $picture->dimension_id; ?></td>
			<td><?php echo $picture->seccion_id; ?></td>
			<td><?php echo $picture->article_id; ?></td>
			<td><?php echo $picture->estado; ?></td>
			<td>
				<?php echo Html::anchor('pictures/view/'.$picture->id, 'View'); ?> |
				<?php echo Html::anchor('pictures/edit/'.$picture->id, 'Edit'); ?> |
				<?php echo Html::anchor('pictures/delete/'.$picture->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Pictures.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('pictures/create', 'Add new Picture', array('class' => 'btn success')); ?>

</p>
