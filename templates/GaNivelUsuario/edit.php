<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario $gaNivelUsuario
 * @var \App\Model\Entity\GaNivelUsuario $nivel
 * @var \App\Model\Entity\GaNivelUsuario $usuario
 */
?>
<div class="row">
    <h4 class="heading"><?= __('Editar nível de acesso') ?></h4>
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

            <?= $this->Form->button(__('Salvar'),['class' => 'waves-effect waves-light btn', 'escape' => false]) ?>
            <?= $this->Form->end() ?>
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
                ['action' => 'delete', $gaNivelUsuario->id],
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
