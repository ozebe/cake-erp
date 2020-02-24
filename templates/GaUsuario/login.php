<?php
/**
 * @var \App\View\AppView $this
 */

?>
<div class="row">
    <div class="card-panel">
    <div class="column-responsive">
        <div class="gaUsuario form content">
            <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>

                <?php

            echo '<div class="input-field">';
            echo $this->Form->text('usuario', array("id" =>"usuario"));
            echo '<label for="usuario">';echo $this->Form->label("usuario", "Usuário");echo '</label>';
            echo '</div>';

            echo '<div class="input-field">';
            echo $this->Form->password('senha', array("id" =>"senha"));
            echo '<label for="senha">';echo $this->Form->label("senha", "Senha");echo '</label>';
            echo '</div>';

            echo '<br>';
                ?>
            <?= $this->Form->button(__('Login'),['class' => 'waves-effect waves-light btn', 'escape' => false]) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
    </div>
</div>

