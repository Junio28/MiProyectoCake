<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Singer $singer
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="singer form content">
            <?= $this->Form->create($singer) ?>
            <fieldset>
                <legend><?= __('Formulario de Interpretes') ?></legend>
                <?php
                    echo $this->Form->control('name', ['label'=>'Nombre', 'placeholder'=>'Ingrese el nombre del artista','class'=>'form-control']);
                    echo $this->Form->control('nationality', ['label'=>'Nacionalidad', 'placeholder'=>'Ingrese la nacionalidad del Artista','class'=>'form-control']);
                ?>
            </fieldset>
            <hr>
            <?= $this->Form->button(__('Agregar'), ['class'=>'btn btn-primary form-control']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
