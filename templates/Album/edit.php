<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 * @var string[]|\Cake\Collection\CollectionInterface $homeMusic
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $album->id],
                ['confirm' => __('Estas seguro que deseas elminar el registro # {0}?', $album->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="album form content">
            <?= $this->Form->create($album) ?>
            <fieldset>
                <legend><?= __('Editar Album ') ?><?= h($album->name) ?></legend>
                <?php
                    echo $this->Form->control('name', ['label'=>'Nombre','class'=>'form-control', 'placeholder'=>'Ingrese cualquier Album']);
                    echo $this->Form->control('release_date', ['label'=>'Fecha de Lanzamiento','class'=>'form-control']);
                    echo $this->Form->control('home_music_id', ['options' => $homeMusic, 'label'=>'Seleccion Casa Musical', 'class'=>'form-control']);
                ?>
            </fieldset>
            <hr>
            <?= $this->Form->button(__('Actualizar'),['class'=>'btn btn-warning form-control']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
