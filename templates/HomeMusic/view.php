<?php
     $this->assign('title', 'Vista del registro de Casa Musical'); 
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeMusic $homeMusic
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Home Music'), ['action' => 'edit', $homeMusic->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Home Music'), ['action' => 'delete', $homeMusic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $homeMusic->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Home Music'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Home Music'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="homeMusic view content">
            <h3><?= h($homeMusic->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($homeMusic->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($homeMusic->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($homeMusic->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($homeMusic->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
