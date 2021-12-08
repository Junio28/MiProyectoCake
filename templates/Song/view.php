<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song $song
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Song'), ['action' => 'edit', $song->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Song'), ['action' => 'delete', $song->id], ['confirm' => __('Are you sure you want to delete # {0}?', $song->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Song'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Song'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="song view content">
            <h3><?= h($song->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($song->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Length') ?></th>
                    <td><?= h($song->length) ?></td>
                </tr>
                <tr>
                    <th><?= __('Singer') ?></th>
                    <td><?= $song->has('singer') ? $this->Html->link($song->singer->name, ['controller' => 'Singer', 'action' => 'view', $song->singer->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Genre') ?></th>
                    <td><?= $song->has('genre') ? $this->Html->link($song->genre->name, ['controller' => 'Genre', 'action' => 'view', $song->genre->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($song->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($song->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($song->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Album') ?></h4>
                <?php if (!empty($song->album)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Release Date') ?></th>
                            <th><?= __('Home Music Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($song->album as $album) : ?>
                        <tr>
                            <td><?= h($album->id) ?></td>
                            <td><?= h($album->name) ?></td>
                            <td><?= h($album->release_date) ?></td>
                            <td><?= h($album->home_music_id) ?></td>
                            <td><?= h($album->created) ?></td>
                            <td><?= h($album->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Album', 'action' => 'view', $album->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Album', 'action' => 'edit', $album->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Album', 'action' => 'delete', $album->id], ['confirm' => __('Are you sure you want to delete # {0}?', $album->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Author') ?></h4>
                <?php if (!empty($song->author)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Release Date') ?></th>
                            <th><?= __('Nationality') ?></th>
                            <th><?= __('Gender') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($song->author as $author) : ?>
                        <tr>
                            <td><?= h($author->id) ?></td>
                            <td><?= h($author->name) ?></td>
                            <td><?= h($author->release_date) ?></td>
                            <td><?= h($author->nationality) ?></td>
                            <td><?= h($author->gender) ?></td>
                            <td><?= h($author->created) ?></td>
                            <td><?= h($author->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Author', 'action' => 'view', $author->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Author', 'action' => 'edit', $author->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Author', 'action' => 'delete', $author->id], ['confirm' => __('Are you sure you want to delete # {0}?', $author->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Media') ?></h4>
                <?php if (!empty($song->media)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($song->media as $media) : ?>
                        <tr>
                            <td><?= h($media->id) ?></td>
                            <td><?= h($media->name) ?></td>
                            <td><?= h($media->created) ?></td>
                            <td><?= h($media->modified) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Media', 'action' => 'view', $media->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Media', 'action' => 'edit', $media->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Media', 'action' => 'delete', $media->id], ['confirm' => __('Are you sure you want to delete # {0}?', $media->id)]) ?>
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
