<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RhTipoProfissao[]|\Cake\Collection\CollectionInterface $rhTipoProfissao
 */
?>
<div class="rhTipoProfissao index content">
    <?= $this->Html->link(__('New Rh Tipo Profissao'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Rh Tipo Profissao') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('rh_area_prof_id') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('criado') ?></th>
                    <th><?= $this->Paginator->sort('editado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rhTipoProfissao as $rhTipoProfissao): ?>
                <tr>
                    <td><?= $this->Number->format($rhTipoProfissao->id) ?></td>
                    <td><?= $rhTipoProfissao->has('rh_area_profissao') ? $this->Html->link($rhTipoProfissao->rh_area_profissao->id, ['controller' => 'RhAreaProfissao', 'action' => 'view', $rhTipoProfissao->rh_area_profissao->id]) : '' ?></td>
                    <td><?= h($rhTipoProfissao->descricao) ?></td>
                    <td><?= h($rhTipoProfissao->criado) ?></td>
                    <td><?= h($rhTipoProfissao->editado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $rhTipoProfissao->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $rhTipoProfissao->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $rhTipoProfissao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rhTipoProfissao->id)]) ?>
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
