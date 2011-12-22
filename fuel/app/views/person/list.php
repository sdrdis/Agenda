<div class="list people_list">
    <?php if ($list): ?>
    <?php foreach ($list as $item): ?>
        <?php echo Html::anchor('person/view/'.$item->id, $item->name.' '.$item->surname, array('class' => (isset($person) && $person->id == $item->id) ? 'active' : '')); ?>
        <?php endforeach; ?>
    <?php else: ?>
    <div>Pas de notes pour le moment</div>
    <?php endif; ?>
</div>