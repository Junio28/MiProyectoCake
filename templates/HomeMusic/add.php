<?php
        $this->assign('title', 'Formulario de Casa Musical'); 
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\HomeMusic $homeMusic
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="homeMusic form content">
            <?= $this->Form->create($homeMusic) ?>
            <fieldset>
                <legend><h1><?= __('Formulario de Casa Musical') ?></h1></legend>
                <?php
                    echo $this->Form->label('Nombre');
                    echo $this->Form->input('name', ['class' => 'form-control', 'placeholder'=>'Ingrese la Disquera']);
                ?>
            </fieldset>
            <hr>
            <?= $this->Form->button(__('Agregar'), ['class' => 'btn btn-primary form-control']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
