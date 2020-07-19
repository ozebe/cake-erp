<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RhAreaProfissao $rhAreaProfissao
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Editar unidade de medida') ?></b></h5>
    <div class="card-panel">
        <div class="column-responsive column-80">
            <div class="rhAreaProfissao form content">
                <?= $this->Form->create($rhAreaProfissao) ?>
                <?php

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">notes</i>';
                echo $this->Form->text('descricao', array("id" =>"descricao", "data-length" => "255"));
                echo '<label for="descricao">';echo $this->Form->label("descricao", "Descrição");echo '</label>';
                echo '</div>';
                ?>

                <?= $this->Form->button(__('Salvar'),['class' => 'waves-effect waves-light btn', 'escape' => false]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<!-- Botão flutuante com opção de ir para o index e apagar, para utilizar no edit-->
<div class="fixed-action-btn horizontal">
    <a class="btn-floating waves-effect waves-light btn-large orange darken-1">
        <i class="large material-icons">build</i>
    </a>
    <ul>
        <li> <!-- botão flutuante de excluir-->
            <?= $this->Form->postLink('<i class="material-icons" style="color: white">delete</i>',
                ['action' => 'delete', $rhAreaProfissao->id],
                ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light red']

            );?>
        </li>

        <li> <!-- botão flutuante de listar-->
            <?= $this->Html->link('<i class="material-icons" style="color: white">list</i>',
                ['action' => 'index'],
                ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light green darken-1']
            );?>
        </li>
    </ul>
</div>


