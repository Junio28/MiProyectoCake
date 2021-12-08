<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song $song
 * @var \Cake\Collection\CollectionInterface|string[] $singer
 * @var \Cake\Collection\CollectionInterface|string[] $genre
 * @var \Cake\Collection\CollectionInterface|string[] $album
 * @var \Cake\Collection\CollectionInterface|string[] $author
 * @var \Cake\Collection\CollectionInterface|string[] $media
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Song'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="song form content">
            <?= $this->Form->create($song) ?>
            <fieldset>
                <legend><?= __('Add Song') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('length');
                    echo $this->Form->control('singer_id', ['options' => $singer]);
                    echo $this->Form->control('genre_id', ['options' => $genre]);
                    echo $this->Form->control('album._ids', ['options' => $album]);
                    echo $this->Form->control('author._ids', ['options' => $author]);
                    echo $this->Form->control('media._ids', ['options' => $media]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
