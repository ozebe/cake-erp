<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaUsuario $gaUsuario
 */
?>
<div class="row">
            <h4 class="heading"><?= __('Visualizar usuário') ?></h4>
    <div class="column-responsive column-80">
        <div class="gaUsuario view content">
            <table class="striped">
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($gaUsuario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($gaUsuario->usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gaUsuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tentativas') ?></th>
                    <td><?= $this->Number->format($gaUsuario->tentativas) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($gaUsuario->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($gaUsuario->editado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bloqueado') ?></th>
                    <td><?= $gaUsuario->bloqueado ? __('Sim') : __('Não'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= $gaUsuario->ativo ? __('Sim') : __('Não'); ?></td>
                </tr>
            </table>
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
                    ['action' => 'delete', $gaUsuario->id],
                    ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light red']

                );?>
            </li>

            <li> <!-- botão flutuante de editar-->
                <?= $this->Html->link('<i class="material-icons">edit</i>',
                    ['action' => 'edit', $gaUsuario->id],
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


