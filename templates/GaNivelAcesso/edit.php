<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelAcesso $gaNivelAcesso
 */
?>
<div class="row">
            <h4 class="heading"><?= __('Editar nível de acesso') ?></h4>
    <div class="card-panel">
    <div class="column-responsive column-80">
        <div class="gaNivelAcesso form content">
            <?= $this->Form->create($gaNivelAcesso) ?>
                <?php

            echo '<div class="input-field">';
            echo '<i class="material-icons prefix">short_text</i>';
            echo $this->Form->text('sigla', array("id" =>"sigla", "data-length" => "3"));
            echo '<label for="sigla">';echo $this->Form->label("sigla", "Sigla");echo '</label>';
            echo '</div>';

            echo '<div class="input-field">';
            echo '<i class="material-icons prefix">notes</i>';
            echo $this->Form->text('descricao', array("id" =>"descricao","data-length" => "255"));
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
<!-- Botão flutuante com opção de ir para o index e apagar, para utilizar no edit-->
<div class="fixed-action-btn horizontal">
    <a class="btn-floating waves-effect waves-light btn-large orange darken-1">
        <i class="large material-icons">build</i>
    </a>
    <ul>
        <li> <!-- botão flutuante de excluir-->
            <?= $this->Form->postLink('<i class="material-icons">delete</i>',
                ['action' => 'delete', $gaNivelAcesso->id],
                ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light red']

            );?>
        </li>

        <li> <!-- botão flutuante de listar-->
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light green darken-1']
            );?>
        </li>
    </ul>
</div>
