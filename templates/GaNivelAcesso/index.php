<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelAcesso[]|\Cake\Collection\CollectionInterface $gaNivelAcesso
 */
?>
<div class="gaNivelAcesso index content">
    <?= $this->Html->link(__('New Ga Nivel Acesso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ga Nivel Acesso') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('sigla') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gaNivelAcesso as $gaNivelAcesso): ?>
                <tr>
                    <td><?= $this->Number->format($gaNivelAcesso->id) ?></td>
                    <td><?= h($gaNivelAcesso->sigla) ?></td>
                    <td><?= h($gaNivelAcesso->descricao) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gaNivelAcesso->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gaNivelAcesso->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gaNivelAcesso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gaNivelAcesso->id)]) ?>
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
