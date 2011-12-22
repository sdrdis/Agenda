<div class="list notes_list">
    <?php if ($list): ?>
    <?php foreach ($list as $item): ?>
        <?php echo Html::anchor('notes/view/'.$item->id, $item->title, array('class' => (isset($note) && $note->id == $item->id) ? 'active' : '')); ?>
        <?php endforeach; ?>
    <?php else: ?>
    <div>Pas de notes pour le moment</div>
    <?php endif; ?>
</div>