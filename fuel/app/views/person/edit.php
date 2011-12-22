<?php
echo render('_action_buttons', array(
        'menu' => array(
            'save' => array('href' => '#', 'onclick' => "$(this).closest('#view_zone').find('form').submit(); return false;"),
            'cancel' => Uri::create('person/view/'.$person->id),
        )
    )
);
?>
<?php echo render('person/_form'); ?>