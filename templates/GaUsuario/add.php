<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaUsuario $gaUsuario
 */
?>
<div class="row">
            <h4 class="heading"><?= __('Cadastro de usuário') ?></h4>
    <div class="card-panel">
    <div class="column-responsive column-80">
        <div class="gaUsuario form content">
            <?= $this->Form->create($gaUsuario) ?>
            <?php

            echo '<div class="input-field">';
            echo $this->Form->text('nome', array("id" =>"nome"));
            echo '<label for="nome">';echo $this->Form->label("nome", "Nome");echo '</label>';
            echo '</div>';

            echo '<div class="input-field">';
            echo $this->Form->text('usuario', array("id" =>"usuario"));
            echo '<label for="usuario">';echo $this->Form->label("usuario", "Usuário");echo '</label>';
            echo '</div>';

            echo '<div class="input-field">';
            echo $this->Form->password('senha', array("id" =>"senha"));
            echo '<label for="senha">';echo $this->Form->label("senha", "Senha");echo '</label>';
            echo '</div>';

            echo '<br>';
            echo 'Bloqueado';
            echo '<div class= "switch">';
            echo '<label>';
            echo 'Não';
            echo $this->Form->checkbox('bloqueado');
            echo ' <span class="lever"></span>';
            echo 'Sim';
            echo '</label>';
            echo '<div>';

            echo '<br>';
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
        ['escape' => false, 'class' => 'btn-floating btn-large waves-effect waves-light green darken-1']
    );?>
</div>

</div>
