<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RhAreaProfissao[]|\Cake\Collection\CollectionInterface $rhAreaProfissao
 */
?>
<div class="rhAreaProfissao index content">
    <?= $this->Html->link(__('New Rh Area Profissao'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rh Area Profissao') ?></h3>
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
                <?php foreach ($rhAreaProfissao as $rhAreaProfissao): ?>
                <tr>
                    <td><?= $this->Number->format($rhAreaProfissao->id) ?></td>
                    <td><?= h($rhAreaProfissao->descricao) ?></td>
                    <td><?= h($rhAreaProfissao->criado) ?></td>
                    <td><?= h($rhAreaProfissao->editado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rhAreaProfissao->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rhAreaProfissao->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rhAreaProfissao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rhAreaProfissao->id)]) ?>
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
