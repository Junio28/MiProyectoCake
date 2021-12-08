<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Singer $singer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('Eliminar'),
                ['action' => 'delete', $singer->id],
                ['confirm' => __('Estás seguro que deseas eliminar el registro # {0}?', $singer->id), 'class' => 'btn btn-danger']
            ) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="singer form content">
            <?= $this->Form->create($singer) ?>
            <fieldset>
                <legend><?= __('Editando el registro de ') ?> <?= h($singer->name) ?></legend>
                <?php
                    echo $this->Form->control('name',['class'=>'form-control', 'label'=>'Nombre','placeholder'=>'Ingrese el nombre del artista']);
                    echo $this->Form->control('nationality',['class'=>'form-control', 'label'=>'Nacionalidad','placeholder'=>'Ingrese la nacionalidad del artista']);
                ?>
            </fieldset>
            <hr>
            <?= $this->Form->button(__('Actualizar'), ['class'=> 'btn btn-warning form-control']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
