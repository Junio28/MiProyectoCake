<?php
            $this->assign('title', 'Editar registro de Casa Musical'); 
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeMusic $homeMusic
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $homeMusic->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $homeMusic->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Home Music'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="homeMusic form content">
            <?= $this->Form->create($homeMusic) ?>
            <fieldset>
                <legend><?= __('Edit Home Music') ?></legend>
                <?php
                    echo $this->Form->control('name');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
