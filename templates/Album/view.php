<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Album'), ['action' => 'edit', $album->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Album'), ['action' => 'delete', $album->id], ['confirm' => __('Are you sure you want to delete # {0}?', $album->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Album'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Album'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="album view content">
            <h3><?= h($album->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($album->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Home Music') ?></th>
                    <td><?= $album->has('home_music') ? $this->Html->link($album->home_music->name, ['controller' => 'HomeMusic', 'action' => 'view', $album->home_music->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($album->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Release Date') ?></th>
                    <td><?= h($album->release_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($album->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($album->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
