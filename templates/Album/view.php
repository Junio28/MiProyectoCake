<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $album->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $album->id], ['confirm' => __('Estás segura que deseas eliminar el registro # {0}?', $album->id), 'class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('Registrar Nuevo'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="album view content">
            <h3>Datos de <?= h($album->name) ?></h3>
            <table class="table table-hover">
                <tr>
                    <th><?= __('Nombre de album') ?></th>
                    <td><?= h($album->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Casa Musical') ?></th>
                    <td><?= $album->has('home_music') ? $this->Html->link($album->home_music->name, ['controller' => 'HomeMusic', 'action' => 'view', $album->home_music->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($album->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fecha de Lanzamiento') ?></th>
                    <td><?= h($album->release_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
