<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album[]|\Cake\Collection\CollectionInterface $album
 */
?>
<div class="album index content">
    <?= $this->Html->link(__('Registrar Nuevo'), ['action' => 'add'], ['class' => 'btn btn-primary form-control']) ?>
    <hr>
    <h3><?= __('Album') ?></h3>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('NOMBRE') ?></th>
                    <th><?= $this->Paginator->sort('FECHA DE LANZAMIENTO') ?></th>
                    <th><?= $this->Paginator->sort('CASA MUSICAL') ?></th>
                    <th class="actions"><?= __('ACCIONES') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($album as $album): ?>
                <tr>
                    <td><?= $this->Number->format($album->id) ?></td>
                    <td><?= h($album->name) ?></td>
                    <td><?= h($album->release_date) ?></td>
                    <td><?= $album->has('home_music') ? $this->Html->link($album->home_music->name, ['controller' => 'HomeMusic', 'action' => 'view', $album->home_music->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('VER MAS'), ['action' => 'view', $album->id], ['class' => 'btn btn-info']) ?>
                        <?= $this->Html->link(__('EDITAR'), ['action' => 'edit', $album->id], ['class' => 'btn btn-warning']) ?>
                        <?= $this->Form->postLink(__('ELIMINAR'), ['action' => 'delete', $album->id], ['confirm' => __('Estás seguro que deseas eliminar el registro # {0}?', $album->id), 'class' => 'btn btn-danger']) ?>
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
