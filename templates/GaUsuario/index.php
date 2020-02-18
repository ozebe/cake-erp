<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaUsuario[]|\Cake\Collection\CollectionInterface $gaUsuario
 */
?>
<div class="gaUsuario index content">
    <?= $this->Html->link(__('Novo usuário'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuários do sistema') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('usuario') ?></th>
                    <th><?= $this->Paginator->sort('bloqueado') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gaUsuario as $gaUsuario): ?>
                <tr>
                    <td><?= $this->Number->format($gaUsuario->id) ?></td>
                    <td><?= h($gaUsuario->nome) ?></td>
                    <td><?= h($gaUsuario->usuario) ?></td>
                    <td><?= h (boolval($gaUsuario->bloqueado) ? 'Sim' : 'Não') ?></td>
                    <td><?= h (boolval($gaUsuario->ativo) ? 'Sim' : 'Não') ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $gaUsuario->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $gaUsuario->id]) ?>
                        <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $gaUsuario->id], ['confirm' => __('Tem certeza que deseja excluir # {0}?', $gaUsuario->usuario)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')) ?></p>
    </div>
</div>
