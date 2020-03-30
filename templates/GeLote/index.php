<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeLote[]|\Cake\Collection\CollectionInterface $geLote
 */
?>
<div class="geLote index content">
    <?= $this->Html->link(__('New Ge Lote'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ge Lote') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('num_lote') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('data_val') ?></th>
                    <th><?= $this->Paginator->sort('criado') ?></th>
                    <th><?= $this->Paginator->sort('editado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($geLote as $geLote): ?>
                <tr>
                    <td><?= $this->Number->format($geLote->id) ?></td>
                    <td><?= h($geLote->num_lote) ?></td>
                    <td><?= h($geLote->descricao) ?></td>
                    <td><?= h($geLote->data_val) ?></td>
                    <td><?= h($geLote->criado) ?></td>
                    <td><?= h($geLote->editado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $geLote->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $geLote->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geLote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geLote->id)]) ?>
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
