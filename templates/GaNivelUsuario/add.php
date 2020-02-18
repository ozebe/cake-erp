<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario $gaNivelUsuario
 * @var \App\Model\Entity\GaNivelUsuario $nivel
 * @var \App\Model\Entity\GaNivelUsuario $usuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Usuarios e niveis de acesso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gaNivelUsuario form content">
            <?= $this->Form->create($gaNivelUsuario) ?>
            <fieldset>
                <legend><?= __('Adicionar acesso á usuário') ?></legend>
                <?php
                echo $this->Form->select('id_usuario', $usuario);
                echo $this->Form->select('id_nivel_acesso', $nivel);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
