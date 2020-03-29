<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaUsuario $gaUsuario
 */
?>
<div class="row">
            <h5 class="heading"><b><?= __('Visualizar usuário') ?></b></h5>
    <div class="column-responsive column-80">
        <div class="gaUsuario view content">
            <table class="striped">
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($gaUsuario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuário') ?></th>
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
                    <td>
                        <?php
                        if($gaUsuario->bloqueado){
                            echo '<span class="chip red lighten-5"><span class="red-text">Sim</span></span>';
                        } else{
                            echo '<span class="chip green lighten-5"><span class="green-text">Não</span></span>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td>
                        <?php
                        if($gaUsuario->ativo){
                            echo '<span class="chip green lighten-5"><span class="green-text">Sim</span></span>';
                        } else{
                            echo '<span class="chip red lighten-5"><span class="red-text">Não</span></span>';
                        }
                        ?>
                    </td>
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
                <?= $this->Form->postLink('<i class="material-icons" style="color: white;">delete</i>',
                    ['action' => 'delete', $gaUsuario->id],
                    ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light red']

                );?>
            </li>

            <li> <!-- botão flutuante de editar-->
                <?= $this->Html->link('<i class="material-icons" style="color: white;">edit</i>',
                    ['action' => 'edit', $gaUsuario->id],
                    ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light cyan darken-2']
                );?>
            </li>

            <li>
                <?= $this->Html->link('<i class="material-icons" style="color: white;">list</i>',
                    ['action' => 'index'],
                    ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light green darken-1']
                );?>
            </li>
        </ul>
    </div>


