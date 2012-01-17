<?php
$menus = array(
    'edit'        => 'Modifier',
    'delete'    => 'Supprimer',
    'cancel'    => 'Annuler',
    'save'        => 'Sauvegarder',
    'add'        => 'Nouveau',
);
?>
<div class="context_menu">
    <?php foreach ($menu as $item => $attr) {
    if (!is_array($attr)) {
        $attr = array('href' => $attr);
    }
    $attr['class'] = $item;
    ?>
    <a <?php echo array_to_attr($attr) ?> ><?php echo $menus[$item] ?></a>
    <?php } ?>
</div>