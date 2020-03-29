<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeSubGrupoProd[]|\Cake\Collection\CollectionInterface $geSubGrupoProd
 */
?>
<div class="geSubGrupoProd index content">
    <?= $this->Html->link(__('New Ge Sub Grupo Prod'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ge Sub Grupo Prod') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_ge_grupo_prod') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('criado') ?></th>
                    <th><?= $this->Paginator->sort('editado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($geSubGrupoProd as $geSubGrupoProd): ?>
                <tr>
                    <td><?= $this->Number->format($geSubGrupoProd->id) ?></td>
                    <td><?= $this->Number->format($geSubGrupoProd->id_ge_grupo_prod) ?></td>
                    <td><?= h($geSubGrupoProd->codigo) ?></td>
                    <td><?= h($geSubGrupoProd->descricao) ?></td>
                    <td><?= h($geSubGrupoProd->criado) ?></td>
                    <td><?= h($geSubGrupoProd->editado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $geSubGrupoProd->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $geSubGrupoProd->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geSubGrupoProd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geSubGrupoProd->id)]) ?>
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
