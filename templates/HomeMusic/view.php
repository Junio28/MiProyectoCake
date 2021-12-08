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
            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $homeMusic->id], ['class' => 'btn btn-warning']) ?>
            <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $homeMusic->id], ['confirm' => __('Estás seguro que deseas eliminar el registro # {0}?', $homeMusic->id), 'class' => 'btn btn-danger']) ?>
            <?= $this->Html->link(__('Agregar Nuevo'), ['action' => 'add'], ['class' => 'btn btn-primary']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="homeMusic view content">
            <hr>
            <h3>Formulario de <?= h($homeMusic->name) ?></h3>
            <table class="table table-hover">
                <tr>
                    <th><?= __('Nombre') ?></th>
                    <td><?= h($homeMusic->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($homeMusic->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Createdor por') ?></th>
                    <td><?= h($homeMusic->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modificado por') ?></th>
                    <td><?= h($homeMusic->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<div class="related">
                <h4><?= __('Albumes relacionados') ?></h4>
                <?php if (!empty($homeMusic->album)) : ?>
                <div class="table-responsive">
                    <table  class="table table-hover">
                        <tr>
                            <th><?= __('ID') ?></th>
                            <th><?= __('NOMBRE') ?></th>
                            <th><?= __('FECHA DE LANZAMIENTO') ?></th>
                           
                            <th class="actions"><?= __('ACCIONES') ?></th>
                        </tr>
                        <?php foreach ($homeMusic->album as $album) : ?>
                        <tr>
                            <td><?= h($album->id) ?></td>
                            <td><?= h($album->name) ?></td>
                            <td><?= h($album->release_date) ?></td>
                            
                            <td class="actions">
                               
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>

