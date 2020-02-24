<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario $gaNivelUsuario
 * @var \App\Model\Entity\GaNivelUsuario $nivel
 * @var \App\Model\Entity\GaNivelUsuario $usuario
 */
?>
<div class="row">
            <h4 class="heading"><?= __('Cadastro de nível por usuário') ?></h4>
    <div class="card-panel">
    <div class="column-responsive column-80">
        <div class="gaNivelUsuario form content">
            <?= $this->Form->create($gaNivelUsuario) ?>


                <?php
                echo '<label>Usuário</label>';
                echo $this->Form->select('id_usuario', $usuario);
                echo '<br>';
                echo '<label>Nível de acesso</label>';
                echo $this->Form->select('id_nivel_acesso', $nivel);
                ?>
            <br>
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
