<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song $song
 * @var string[]|\Cake\Collection\CollectionInterface $singer
 * @var string[]|\Cake\Collection\CollectionInterface $genre
 * @var string[]|\Cake\Collection\CollectionInterface $album
 * @var string[]|\Cake\Collection\CollectionInterface $author
 * @var string[]|\Cake\Collection\CollectionInterface $media
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $song->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $song->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Song'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="song form content">
            <?= $this->Form->create($song) ?>
            <fieldset>
                <legend><?= __('Edit Song') ?></legend>
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
