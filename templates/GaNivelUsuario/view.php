<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario $gaNivelUsuario
 * @var \App\Model\Entity\GaNivelUsuario $query
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Visualizar nível por usuário') ?></b></h5>
    <div class="column-responsive column-80">
        <div class="gaNivelUsuario view content">
            <table class="striped">
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($query->ga_usuario->usuario)?></td>
                </tr>
                <tr>
                    <th><?= __('Nivel de Acesso') ?></th>
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
            <?= $this->Form->postLink('<i class="material-icons" style="color: white">delete</i>',
                ['action' => 'delete', $gaNivelUsuario->id],
                ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light red']

            );?>
        </li>

        <li> <!-- botão flutuante de editar-->
            <?= $this->Html->link('<i class="material-icons" style="color: white">edit</i>',
                ['action' => 'edit', $gaNivelUsuario->id],
                ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light cyan darken-2']
            );?>
        </li>

        <li>
            <?= $this->Html->link('<i class="material-icons" style="color: white">list</i>',
                ['action' => 'index'],
                ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light green darken-1']
            );?>
        </li>
    </ul>
</div>
