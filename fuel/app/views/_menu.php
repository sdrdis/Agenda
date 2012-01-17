<div id="menu">
    <?php echo Html::anchor('notes/index', 'Notes', array('class' => 'item '.(\Request::active()->controller == 'Controller_Notes' ? 'active' : ''))) ?>
    <?php echo Html::anchor('person/index', 'Adresses et numéros', array('class' => 'item '.(\Request::active()->controller == 'Controller_Person' ? 'active' : ''))) ?>
</div>