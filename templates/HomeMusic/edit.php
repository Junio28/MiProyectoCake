<?php
            $this->assign('title', 'Editar registro de Casa Musical'); 
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeMusic $homeMusic
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <?= $this->Form->postLink(
                __('Elminar'),
                ['action' => 'delete', $homeMusic->id],
                ['confirm' => __('Estás seguro que deseas eliminar el registro # {0}?', $homeMusic->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Home Music'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="homeMusic form content">
            <?= $this->Form->create($homeMusic) ?>
            <fieldset>
                <legend><?= __('Editar Registro de ') ?><?= h($homeMusic->name) ?></legend>
                <?php
                    echo $this->Form->label('Nombre');
                    echo $this->Form->input('name', ['class' => 'form-control', 'placeholder'=> 'Ingrese la disquera']);
                ?>
            </fieldset>
            <hr>
            <?= $this->Form->button(__('Actualizar'), ['class' => 'btn btn-warning form-control']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
