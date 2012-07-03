<?php echo Form::open(array('class' => 'form-stacked')); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Imagen', 'imagen'); ?>

			<div class="input">
				<?php echo Form::input('imagen', Input::post('imagen', isset($picture) ? $picture->imagen : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Width', 'width'); ?>

			<div class="input">
				<?php echo Form::input('width', Input::post('width', isset($picture) ? $picture->width : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Height', 'height'); ?>

			<div class="input">
				<?php echo Form::input('height', Input::post('height', isset($picture) ? $picture->height : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Dimension id', 'dimension_id'); ?>

			<div class="input">
				<?php echo Form::input('dimension_id', Input::post('dimension_id', isset($picture) ? $picture->dimension_id : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Seccion id', 'seccion_id'); ?>

			<div class="input">
				<?php echo Form::input('seccion_id', Input::post('seccion_id', isset($picture) ? $picture->seccion_id : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Article id', 'article_id'); ?>

			<div class="input">
				<?php echo Form::input('article_id', Input::post('article_id', isset($picture) ? $picture->article_id : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Estado', 'estado'); ?>

			<div class="input">
				<?php echo Form::input('estado', Input::post('estado', isset($picture) ? $picture->estado : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="actions">
			<?php echo Form::submit('submit', 'Save', array('class' => 'btn primary')); ?>

		</div>
	</fieldset>
<?php echo Form::close(); ?>