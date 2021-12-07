<?php
        $this->assign('title', 'Listado de Casa Musical'); 
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeMusic[]|\Cake\Collection\CollectionInterface $homeMusic
 */
?>
<div class="homeMusic index content">
    <?= $this->Html->link(__('Registrar Nuevo'), ['action' => 'add'], ['class' => 'btn btn-primary form-control']) ?>
    <hr>
    <h3><?= __('LISTADO DE CASA MUSICAL') ?></h3>
    <div class="table-responsive">
        <table class="table table-hover" >
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('NOMBRE') ?></th>
                    <th class="actions"><?= __('ACCIONES') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($homeMusic as $homeMusic): ?>
                <tr>
                    <td><?= $this->Number->format($homeMusic->id) ?></td>
                    <td><?= h($homeMusic->name) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('VER MAS'), ['action' => 'view', $homeMusic->id],['class'=>'btn btn-info']) ?>
                        <?= $this->Html->link(__('EDITAR'), ['action' => 'edit', $homeMusic->id],[ 'class' => 'btn btn-warning']) ?>
                        <?= $this->Form->postLink(__('ELIMINAR'), ['action' => 'delete', $homeMusic->id], ['confirm' => __('Estás seguro que deseas eleminar el registro # {0}?', $homeMusic->id),'class' => 'btn btn-danger']) ?>
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
