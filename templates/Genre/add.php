<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Genre $genre
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="genre form content">
            <?= $this->Form->create($genre) ?>
            <fieldset>
                <legend><?= __('Formulario de Generos Musicales') ?></legend>
                <?php
                    echo $this->Form->control('name', ['label'=>'Nombre', 'class'=>'form-control', 'placeholder'=>'Ingrese el nombre de Genero Musical']);
                ?>
            </fieldset>
            <hr>
            <?= $this->Form->button(__('Agregar'), ['class' => 'btn btn-primary form-control']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
