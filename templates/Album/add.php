<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 * @var \Cake\Collection\CollectionInterface|string[] $homeMusic
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Album'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="album form content">
            <?= $this->Form->create($album) ?>
            <fieldset>
                <legend><?= __('Add Album') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('release_date');
                    echo $this->Form->control('home_music_id', ['options' => $homeMusic]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
