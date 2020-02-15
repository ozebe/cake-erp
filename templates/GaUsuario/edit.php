<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaUsuario $gaUsuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gaUsuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gaUsuario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ga Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gaUsuario form content">
            <?= $this->Form->create($gaUsuario) ?>
            <fieldset>
                <legend><?= __('Edit Ga Usuario') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('usuario');
                    echo $this->Form->control('senha');
                    echo $this->Form->control('bloqueado');
                    echo $this->Form->control('ativo');
                    echo $this->Form->control('tentativas');
                    echo $this->Form->control('criado');
                    echo $this->Form->control('editado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
