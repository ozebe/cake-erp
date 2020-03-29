<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeEstoque $geEstoque
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Edição de Estoque') ?></b></h5>
    <div class="card-panel">
        <div class="column-responsive column-80">
            <div class="geEstoque form content">
                <?= $this->Form->create($geEstoque) ?>
                <?php

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">notes</i>';
                echo $this->Form->text('descricao', array("id" =>"descricao", "data-length" => "255"));
                echo '<label for="descricao">';echo $this->Form->label("descricao", "Descrição");echo '</label>';
                echo '</div>';

                echo 'Ativo';
                echo '<div class= "switch">';
                echo '<label>';
                echo 'Não';
                echo $this->Form->checkbox('ativo');
                echo ' <span class="lever"></span>';
                echo 'Sim';
                echo '</label>';
                echo '<div>';

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
        ['escape' => false, 'class' => 'btn-floating btn-large waves-effect waves-light']
    );?>
</div>

</div>
