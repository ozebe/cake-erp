<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario[]|\Cake\Collection\CollectionInterface $gaNivelUsuario
 */
?>
<div class="gaNivelUsuario index content">
    <?= $this->Html->link(__('New Ga Nivel Usuario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ga Nivel Usuario') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('id_usuario') ?></th>
                    <th><?= $this->Paginator->sort('id_nivel_acesso') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gaNivelUsuario as $gaNivelUsuario): ?>
                <tr>
                    <td><?= $this->Number->format($gaNivelUsuario->id) ?></td>
                    <td><?= $this->Number->format($gaNivelUsuario->id_usuario) ?></td>
                    <td><?= $this->Number->format($gaNivelUsuario->id_nivel_acesso) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $gaNivelUsuario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gaNivelUsuario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gaNivelUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gaNivelUsuario->id)]) ?>
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
