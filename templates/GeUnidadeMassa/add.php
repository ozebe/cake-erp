<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeUnidadeMassa $geUnidadeMassa
 */
?>
<div class="row">
    <h4 class="heading"><?= __('Cadastro de unidades de massa') ?></h4>
    <div class="card-panel">
        <div class="column-responsive column-80">
            <div class="geUnidadeMassa form content">
                <?= $this->Form->create($geUnidadeMassa) ?>
                <?php

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">notes</i>';
                echo $this->Form->text('descricao', array("id" =>"descricao", "data-length" => "255"));
                echo '<label for="descricao">';echo $this->Form->label("descricao", "Descrição");echo '</label>';
                echo '</div>';

                echo '<br>';
                ?>

                <?= $this->Form->button(__('Salvar'),['class' => 'waves-effect waves-light btn', 'escape' => false]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<!-- Botão flutuante listar-->
<div class="fixed-action-btn horizontal">
    <?= $this->Html->link('<i class="material-icons">list</i>',
        ['action' => 'index'],
        ['escape' => false, 'class' => 'btn-floating btn-large waves-effect waves-light green darken-1']
    );?>
</div>

</div>
