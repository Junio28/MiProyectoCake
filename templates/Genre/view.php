<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genre $genre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $genre->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $genre->id], ['confirm' => __('Estás seguro que deseas eliminar el registro # {0}?', $genre->id), 'class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('Agregar Nuevo'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="genre view content">
            <h3><?= h($genre->name) ?></h3>
            <table class="table table-hover">
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($genre->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($genre->id) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Canciones Relacionadas') ?></h4>
                <?php if (!empty($genre->song)) : ?>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('Nombre') ?></th>
                            <th><?= __('Duración') ?></th>
                            <th><?= __('Cantante(s)') ?></th>
                            <th class="actions"><?= __('ACCIONES') ?></th>
                        </tr>
                        <?php foreach ($genre->song as $song) : ?>
                        <tr>
                            <td><?= h($song->id) ?></td>
                            <td><?= h($song->name) ?></td>
                            <td><?= h($song->length) ?></td>
                            <td><?= h($song->singer_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('VER MÁS'), ['controller' => 'Song', 'action' => 'view', $song->id], ['class'=>'btn btn-info']) ?>
                                <?= $this->Html->link(__('EDITAR'), ['controller' => 'Song', 'action' => 'edit', $song->id], ['class'=>'btn btn-warning']) ?>
                                <?= $this->Form->postLink(__('ELIMINAR'), ['controller' => 'Song', 'action' => 'delete', $song->id], ['confirm' => __('Estás seguro que deseas eliminar el registro # {0}?', $song->id), 'class'=>'btn btn-danger']) ?>
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
