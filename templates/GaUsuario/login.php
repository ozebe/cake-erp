<?php
/**
 * @var \App\View\AppView $this
 */

?>
<div class="row">
    <div class="column-responsive">
        <div class="gaUsuario form content">
            <?= $this->Flash->render('auth') ?>
            <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __('Por favor informe seu usuário e senha') ?></legend>
                <?php
                echo $this->Form->control('usuario');
                echo $this->Form->password('senha');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Login')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

