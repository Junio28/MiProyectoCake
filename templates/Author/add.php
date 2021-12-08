<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Author $author
 * @var \Cake\Collection\CollectionInterface|string[] $song
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Author'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="author form content">
            <?= $this->Form->create($author) ?>
            <fieldset>
                <legend><?= __('Add Author') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('release_date');
                    echo $this->Form->control('nationality');
                    echo $this->Form->control('gender');
                    echo $this->Form->control('song._ids', ['options' => $song]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
