<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song[]|\Cake\Collection\CollectionInterface $song
 */
?>
<div class="song index content">
    <?= $this->Html->link(__('New Song'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Song') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('length') ?></th>
                    <th><?= $this->Paginator->sort('singer_id') ?></th>
                    <th><?= $this->Paginator->sort('genre_id') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($song as $song): ?>
                <tr>
                    <td><?= $this->Number->format($song->id) ?></td>
                    <td><?= h($song->name) ?></td>
                    <td><?= h($song->length) ?></td>
                    <td><?= $song->has('singer') ? $this->Html->link($song->singer->name, ['controller' => 'Singer', 'action' => 'view', $song->singer->id]) : '' ?></td>
                    <td><?= $song->has('genre') ? $this->Html->link($song->genre->name, ['controller' => 'Genre', 'action' => 'view', $song->genre->id]) : '' ?></td>
                    <td><?= h($song->created) ?></td>
                    <td><?= h($song->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $song->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $song->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $song->id], ['confirm' => __('Are you sure you want to delete # {0}?', $song->id)]) ?>
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
