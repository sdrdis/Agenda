<?php
echo render('_action_buttons', array(
        'menu' => array(
            'add' => Uri::create('notes/create'),
            'edit' => Uri::create('notes/edit/'.$note->id),
            'delete' => Uri::create('notes/delete/'.$note->id),
        )
    )
);
?>
<label>Titre</label>
<?php echo $note->title; ?>
<label>Description</label>
<?php echo nl2br($note->description); ?>