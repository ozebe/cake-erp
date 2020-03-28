<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeGrupoProd[]|\Cake\Collection\CollectionInterface $geGrupoProd
 */
?>
<div class="geGrupoProd index content">
    <?= $this->Html->link(__('New Ge Grupo Prod'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ge Grupo Prod') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('criado') ?></th>
                    <th><?= $this->Paginator->sort('editado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($geGrupoProd as $geGrupoProd): ?>
                <tr>
                    <td><?= $this->Number->format($geGrupoProd->id) ?></td>
                    <td><?= h($geGrupoProd->codigo) ?></td>
                    <td><?= h($geGrupoProd->descricao) ?></td>
                    <td><?= h($geGrupoProd->criado) ?></td>
                    <td><?= h($geGrupoProd->editado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $geGrupoProd->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $geGrupoProd->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geGrupoProd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geGrupoProd->id)]) ?>
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
