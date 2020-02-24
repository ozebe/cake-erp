<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario $gaNivelUsuario
 * @var \App\Model\Entity\GaNivelUsuario $query
 */
?>
<div class="row">
            <h4 class="heading"><?= __('Visualizar nível por usuário') ?></h4>
    <div class="column-responsive column-80">
        <div class="gaNivelUsuario view content">
            <table class="striped">
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($query->ga_usuario->usuario)?></td>
                </tr>
                <tr>
                    <th><?= __('Nivel Acesso') ?></th>
                    <td><?= h($query->ga_nivel_acesso->descricao)?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

<!-- Botão flutuante com opção de editar e apagar, para utilizar na view-->
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

        <li> <!-- botão flutuante de editar-->
            <?= $this->Html->link('<i class="material-icons">edit</i>',
                ['action' => 'edit', $gaNivelUsuario->id],
                ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light cyan darken-2']
            );?>
        </li>

        <li>
            <?= $this->Html->link('<i class="material-icons">list</i>',
                ['action' => 'index'],
                ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light green darken-1']
            );?>
        </li>
    </ul>
</div>
