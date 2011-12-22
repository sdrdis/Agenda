<?php
echo render('_action_buttons', array(
        'menu' => array(
            'save' => array('href' => '#', 'onclick' => "$(this).closest('#view_zone').find('form').submit(); return false;"),
            'cancel' => Uri::create('notes/view/'.$note->id),
        )
    )
);
?>
<?php echo render('notes/_form'); ?>