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
    <?php
                $paginator = $this->Paginator->setTemplates([
                    'number' => '<li class="page-item"> <a class="page-link" href="{{url}}">{{text}}</a></li>',
                    'current' => '<li class="page-item active"> <a class="page-link" href="{{url}}">{{text}}</a></li>',
                    'first' => '<li class="page-item"> <a class="page-link" href="{{url}}">&laquo;</a></li>',
                    'last' => '<li class="page-item"> <a class="page-link" href="{{url}}">&raquo;</a></li>',
                    'prevActive' => '<li class="page-item"> <a class="page-link" href="{{url}}">&lt;</a></li>',
                    'nextActive' => '<li class="page-item"> <a class="page-link" href="{{url}}">&gt;</a></li>'

                ]);
            ?>
    <ul class="pagination">
            <?php 
            echo $paginator->first();
            if($paginator->hasPrev()){
                echo $paginator->prev();
            }
            echo $paginator->numbers();
            if($paginator->hasNext()){
                echo $paginator->next();
            }
            ?>
            <?= $this->Paginator->last() ?>
        </ul>

        <p><?= $this->Paginator->counter(__('Página {{page}} del {{pages}}, mostrando {{current}} registro(s) de {{count}} en total')) ?></p>
    </div>
</div>
