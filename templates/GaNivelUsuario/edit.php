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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gaNivelUsuario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gaNivelUsuario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ga Nivel Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gaNivelUsuario form content">
            <?= $this->Form->create($gaNivelUsuario) ?>
            <fieldset>
                <legend><?= __('Edit Ga Nivel Usuario') ?></legend>
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
