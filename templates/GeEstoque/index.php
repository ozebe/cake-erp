<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeEstoque[]|\Cake\Collection\CollectionInterface $geEstoque
 */
?>
<div class="geEstoque index content">
    <?= $this->Html->link(__('New Ge Estoque'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ge Estoque') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('criado') ?></th>
                    <th><?= $this->Paginator->sort('editado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($geEstoque as $geEstoque): ?>
                <tr>
                    <td><?= $this->Number->format($geEstoque->id) ?></td>
                    <td><?= h($geEstoque->descricao) ?></td>
                    <td><?= h($geEstoque->ativo) ?></td>
                    <td><?= h($geEstoque->criado) ?></td>
                    <td><?= h($geEstoque->editado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $geEstoque->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $geEstoque->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geEstoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geEstoque->id)]) ?>
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
