<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Media $media
 * @var string[]|\Cake\Collection\CollectionInterface $song
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $media->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $media->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Media'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="media form content">
            <?= $this->Form->create($media) ?>
            <fieldset>
                <legend><?= __('Edit Media') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('song._ids', ['options' => $song]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
