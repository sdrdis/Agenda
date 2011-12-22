<?php echo Form::open(); ?>
<p>
    <?php echo Form::label('Title', 'title'); ?>
    <?php echo Form::input('title', Input::post('title', isset($note) ? $note->title : '')); ?>
</p>
<p>
    <?php echo Form::label('Description', 'description'); ?>
    <?php echo Form::textarea('description', Input::post('description', isset($note) ? $note->description : '')); ?>
</p>
<?php echo Form::close(); ?>