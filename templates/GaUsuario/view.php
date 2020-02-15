<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaUsuario $gaUsuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ga Usuario'), ['action' => 'edit', $gaUsuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ga Usuario'), ['action' => 'delete', $gaUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gaUsuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ga Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ga Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gaUsuario view content">
            <h3><?= h($gaUsuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($gaUsuario->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($gaUsuario->usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Senha') ?></th>
                    <td><?= h($gaUsuario->senha) ?></td>
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
                    <td><?= $gaUsuario->bloqueado ? __('Yes') : __('No'); ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= $gaUsuario->ativo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
