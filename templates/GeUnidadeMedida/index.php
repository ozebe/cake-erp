<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeUnidadeMedida[]|\Cake\Collection\CollectionInterface $geUnidadeMedida
 */
?>
<div class="geUnidadeMedida index content">
    <?= $this->Html->link(__('New Ge Unidade Medida'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ge Unidade Medida') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('criado') ?></th>
                    <th><?= $this->Paginator->sort('editado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($geUnidadeMedida as $geUnidadeMedida): ?>
                <tr>
                    <td><?= $this->Number->format($geUnidadeMedida->id) ?></td>
                    <td><?= h($geUnidadeMedida->descricao) ?></td>
                    <td><?= h($geUnidadeMedida->criado) ?></td>
                    <td><?= h($geUnidadeMedida->editado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $geUnidadeMedida->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $geUnidadeMedida->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geUnidadeMedida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geUnidadeMedida->id)]) ?>
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
