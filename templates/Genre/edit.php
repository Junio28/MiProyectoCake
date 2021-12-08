<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genre $genre
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $genre->id],
                ['confirm' => __('Estás seguro que deseas eliminar el registro # {0}?', $genre->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="genre form content">
            <?= $this->Form->create($genre) ?>
            <fieldset>
                <legend><?= __('Editar registro de ') ?><?= h($genre->name) ?></legend>
                <?php
                    echo $this->Form->control('name', ['label'=>'Nombre', 'class'=>'form-control', 'placeholder'=>'Ingrese el nombre de Genero Musical']);
                ?>
            </fieldset>
            <hr>
            <?= $this->Form->button(__('Actualizar'), ['class' => 'btn btn-warning form-control']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
