<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Singer[]|\Cake\Collection\CollectionInterface $singer
 */
?>
<div class="singer index content">
    <?= $this->Html->link(__('New Singer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Singer') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('nationality') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($singer as $singer): ?>
                <tr>
                    <td><?= $this->Number->format($singer->id) ?></td>
                    <td><?= h($singer->name) ?></td>
                    <td><?= h($singer->nationality) ?></td>
                    <td><?= h($singer->created) ?></td>
                    <td><?= h($singer->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $singer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $singer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $singer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $singer->id)]) ?>
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
