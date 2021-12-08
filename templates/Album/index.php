<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album[]|\Cake\Collection\CollectionInterface $album
 */
?>
<div class="album index content">
    <?= $this->Html->link(__('New Album'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Album') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('release_date') ?></th>
                    <th><?= $this->Paginator->sort('home_music_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($album as $album): ?>
                <tr>
                    <td><?= $this->Number->format($album->id) ?></td>
                    <td><?= h($album->name) ?></td>
                    <td><?= h($album->release_date) ?></td>
                    <td><?= $album->has('home_music') ? $this->Html->link($album->home_music->name, ['controller' => 'HomeMusic', 'action' => 'view', $album->home_music->id]) : '' ?></td>
                    <td><?= h($album->created) ?></td>
                    <td><?= h($album->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $album->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $album->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $album->id], ['confirm' => __('Are you sure you want to delete # {0}?', $album->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
