<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeLote $geLote
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Visualizar lote de produto') ?></b></h5>
    <div class="column-responsive column-80">
        <div class="geLote view content">
            <table class="striped">
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($geLote->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Número do lote') ?></th>
                    <td><?= h($geLote->num_lote) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descrição') ?></th>
                    <td><?= h($geLote->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data de validade') ?></th>
                    <td><?= h($geLote->data_val) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($geLote->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($geLote->editado) ?></td>
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
                    ['action' => 'delete', $geLote->id],
                    ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light red']

                );?>
            </li>

            <li> <!-- botão flutuante de editar-->
                <?= $this->Html->link('<i class="material-icons" style="color: white">edit</i>',
                    ['action' => 'edit', $geLote->id],
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


