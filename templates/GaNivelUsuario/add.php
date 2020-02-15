<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario $gaNivelUsuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ga Nivel Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gaNivelUsuario form content">
            <?= $this->Form->create($gaNivelUsuario) ?>
            <fieldset>
                <legend><?= __('Add Ga Nivel Usuario') ?></legend>
                <?php
                    echo $this->Form->control('id_usuario');
                    echo $this->Form->control('id_nivel_acesso');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
