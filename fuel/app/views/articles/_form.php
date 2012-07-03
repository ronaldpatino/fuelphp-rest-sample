<?php echo Form::open(array('class' => 'form-stacked')); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Nombre', 'nombre'); ?>

			<div class="input">
				<?php echo Form::input('nombre', Input::post('nombre', isset($article) ? $article->nombre : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Periodista id', 'periodista_id'); ?>

			<div class="input">
				<?php echo Form::input('periodista_id', Input::post('periodista_id', isset($article) ? $article->periodista_id : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Seccion id', 'seccion_id'); ?>

			<div class="input">
				<?php echo Form::input('seccion_id', Input::post('seccion_id', isset($article) ? $article->seccion_id : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Dimension id', 'dimension_id'); ?>

			<div class="input">
				<?php echo Form::input('dimension_id', Input::post('dimension_id', isset($article) ? $article->dimension_id : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Fecha', 'fecha'); ?>

			<div class="input">
				<?php echo Form::input('fecha', Input::post('fecha', isset($article) ? $article->fecha : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>