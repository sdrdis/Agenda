<?php echo Form::open(array('class' => 'form-stacked')); ?>

	<fieldset>
		<div class="clearfix">
			<?php echo Form::label('Name', 'name'); ?>

			<div class="input">
				<?php echo Form::input('name', Input::post('name', isset($person) ? $person->name : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Surname', 'surname'); ?>

			<div class="input">
				<?php echo Form::input('surname', Input::post('surname', isset($person) ? $person->surname : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Tel', 'tel'); ?>

			<div class="input">
				<?php echo Form::input('tel', Input::post('tel', isset($person) ? $person->tel : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Email', 'email'); ?>

			<div class="input">
				<?php echo Form::input('email', Input::post('email', isset($person) ? $person->email : ''), array('class' => 'span6')); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Address', 'address'); ?>

			<div class="input">
				<?php echo Form::textarea('address', Input::post('address', isset($person) ? $person->address : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
		<div class="clearfix">
			<?php echo Form::label('Additionals', 'additionals'); ?>

			<div class="input">
				<?php echo Form::textarea('additionals', Input::post('additionals', isset($person) ? $person->additionals : ''), array('class' => 'span10', 'rows' => 8)); ?>

			</div>
		</div>
	</fieldset>
<?php echo Form::close(); ?>