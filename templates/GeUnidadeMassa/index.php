<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeUnidadeMassa[]|\Cake\Collection\CollectionInterface $geUnidadeMassa
 */
?>
<div class="geUnidadeMassa index content">
    <?= $this->Html->link(__('New Ge Unidade Massa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ge Unidade Massa') ?></h3>
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
                <?php foreach ($geUnidadeMassa as $geUnidadeMassa): ?>
                <tr>
                    <td><?= $this->Number->format($geUnidadeMassa->id) ?></td>
                    <td><?= h($geUnidadeMassa->descricao) ?></td>
                    <td><?= h($geUnidadeMassa->criado) ?></td>
                    <td><?= h($geUnidadeMassa->editado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $geUnidadeMassa->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $geUnidadeMassa->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geUnidadeMassa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geUnidadeMassa->id)]) ?>
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
