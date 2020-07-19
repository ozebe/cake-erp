<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RhAreaProfissao $rhAreaProfissao
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Visualizar área de profissão') ?></b></h5>
    <div class="column-responsive column-80">
        <div class="rhAreaProfissao view content">
            <table class="striped">
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rhAreaProfissao->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descrição') ?></th>
                    <td><?= h($rhAreaProfissao->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($rhAreaProfissao->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($rhAreaProfissao->editado) ?></td>
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
                <?= $this->Form->postLink('<i class="material-icons" style="color: white">delete</i>',
                    ['action' => 'delete', $rhAreaProfissao->id],
                    ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light red']

                );?>
            </li>

            <li> <!-- botão flutuante de editar-->
                <?= $this->Html->link('<i class="material-icons" style="color: white">edit</i>',
                    ['action' => 'edit', $rhAreaProfissao->id],
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


