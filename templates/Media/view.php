<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Media $media
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Media'), ['action' => 'edit', $media->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Media'), ['action' => 'delete', $media->id], ['confirm' => __('Are you sure you want to delete # {0}?', $media->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Media'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Media'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="media view content">
            <h3><?= h($media->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($media->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($media->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($media->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($media->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Song') ?></h4>
                <?php if (!empty($media->song)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Length') ?></th>
                            <th><?= __('Singer Id') ?></th>
                            <th><?= __('Genre Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($media->song as $song) : ?>
                        <tr>
                            <td><?= h($song->id) ?></td>
                            <td><?= h($song->name) ?></td>
                            <td><?= h($song->length) ?></td>
                            <td><?= h($song->singer_id) ?></td>
                            <td><?= h($song->genre_id) ?></td>
                            <td><?= h($song->created) ?></td>
                            <td><?= h($song->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Song', 'action' => 'view', $song->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Song', 'action' => 'edit', $song->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Song', 'action' => 'delete', $song->id], ['confirm' => __('Are you sure you want to delete # {0}?', $song->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
