<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaUsuario[]|\Cake\Collection\CollectionInterface $gaUsuario
 */
?>
<div class="gaUsuario index content">
    <?= $this->Html->link(__('New Ga Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ga Usuario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('usuario') ?></th>
                    <th><?= $this->Paginator->sort('bloqueado') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('tentativas') ?></th>
                    <th><?= $this->Paginator->sort('criado') ?></th>
                    <th><?= $this->Paginator->sort('editado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gaUsuario as $gaUsuario): ?>
                <tr>
                    <td><?= $this->Number->format($gaUsuario->id) ?></td>
                    <td><?= h($gaUsuario->nome) ?></td>
                    <td><?= h($gaUsuario->usuario) ?></td>
                    <td><?= h($gaUsuario->bloqueado) ?></td>
                    <td><?= h($gaUsuario->ativo) ?></td>
                    <td><?= $this->Number->format($gaUsuario->tentativas) ?></td>
                    <td><?= h($gaUsuario->criado) ?></td>
                    <td><?= h($gaUsuario->editado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gaUsuario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gaUsuario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gaUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gaUsuario->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
