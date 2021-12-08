<?php
        $this->assign('title', 'Formulario de Albumes'); 
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 * @var \Cake\Collection\CollectionInterface|string[] $homeMusic
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="album form content">
            <?= $this->Form->create($album) ?>
            <fieldset>
                <legend><?= __('Formulario de Albumes') ?></legend>
                <?php
                    echo $this->Form->control('name', ['label'=>'Nombre','class'=>'form-control', 'placeholder'=>'Ingrese cualquier Album']);
                    echo $this->Form->control('release_date', ['label'=>'Fecha de Lanzamiento','class'=>'form-control']);
                    echo $this->Form->control('home_music_id', ['label'=>'Seleccion Casa Musical','options' => $homeMusic,'class'=>'form-control']);
                ?>
            </fieldset>
            <hr>
            <?= $this->Form->button(__('Agregar'),['class'=>'btn btn-primary form-control']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
