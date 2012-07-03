<h2>Listing Articles</h2>
<br>
<?php if ($articles): ?>
<table class="zebra-striped">
	<thead>
		<tr>
			<th>Nombre</th>
			<th>Periodista id</th>
			<th>Seccion id</th>
			<th>Dimension id</th>
			<th>Fecha</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($articles as $article): ?>		<tr>

			<td><?php echo $article->nombre; ?></td>
			<td><?php echo $article->periodista_id; ?></td>
			<td><?php echo $article->seccion_id; ?></td>
			<td><?php echo $article->dimension_id; ?></td>
			<td><?php echo $article->fecha; ?></td>
			<td>
				<?php echo Html::anchor('articles/view/'.$article->id, 'View'); ?> |
				<?php echo Html::anchor('articles/edit/'.$article->id, 'Edit'); ?> |
				<?php echo Html::anchor('articles/delete/'.$article->id, 'Delete', array('onclick' => "return confirm('Are you sure?')")); ?>

			</td>
		</tr>
<?php endforeach; ?>	</tbody>
</table>

<?php else: ?>
<p>No Articles.</p>

<?php endif; ?><p>
	<?php echo Html::anchor('articles/create', 'Add new Article', array('class' => 'btn success')); ?>

</p>
