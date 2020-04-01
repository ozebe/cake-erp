<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeLote $geLote
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Cadastro de lotes de produtos') ?></b></h5>
    <div class="card-panel">
        <div class="column-responsive column-80">
            <div class="geLote form content">
                <?= $this->Form->create($geLote) ?>
                <?php

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">short_text</i>';
                echo $this->Form->text('num_lote', array("id" =>"numlote", "data-length" => "255", "minlength" => "3"));
                echo '<label for="numlote">';echo $this->Form->label("numlote", "Número do lote");echo '</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">notes</i>';
                echo $this->Form->text('descricao', array("id" =>"descricao", "data-length" => "255"));
                echo '<label for="descricao">';echo $this->Form->label("descricao", "Descrição");echo '</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">date_range</i>';
                echo $this->Form->text('data_val', array("id" =>"data", "class" => "datepicker"));
                echo '<label for="data">';echo $this->Form->label("data", "Data de validade");echo '</label>';
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
        ['escape' => false, 'class' => 'btn-floating btn-large waves-effect waves-light']
    );?>
</div>

</div>
