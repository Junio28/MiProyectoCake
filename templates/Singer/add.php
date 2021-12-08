<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Singer $singer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Singer'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="singer form content">
            <?= $this->Form->create($singer) ?>
            <fieldset>
                <legend><?= __('Add Singer') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('nationality');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
