<?php
echo render('_action_buttons', array(
        'menu' => array(
            'add' => Uri::create('person/create'),
            'edit' => Uri::create('person/edit/'.$person->id),
            'delete' => Uri::create('person/delete/'.$person->id),
        )
    )
);
?>
<label>Name</label>
<?php echo $person->name ?>
<label>Surname</label>
<?php echo $person->surname; ?>
<label>Tel</label>
<?php echo $person->tel; ?>
<label>Email</label>
<?php echo $person->email; ?>
<label>Address</label>
<?php echo nl2br($person->address); ?>
<label>Additionals</label>
<?php echo nl2br($person->additionals); ?>