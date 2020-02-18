<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario[]|\Cake\Collection\CollectionInterface $gaNivelUsuario
 * @var \App\Model\Entity\GaNivelUsuario[]|\Cake\Collection\CollectionInterface $query
 */
?>
<div class="gaNivelUsuario index content">
    <?= $this->Html->link(__('Novo nivel de acesso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Usuarios e niveis de acesso') ?></h3>
    <div class="table-responsive">
    <table>
        <thead>
        <tr>
            <th><?= $this->Paginator->sort('Usuario') ?></th>
            <th><?= $this->Paginator->sort('Nível acesso') ?></th>
            <th class="actions"><?= __('Ações') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($query as $q): ?>
            <tr>
                <td><?= h($q->ga_usuario->usuario)?></td>
                <td><?= h($q->ga_nivel_acesso->descricao)?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $q->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $q->id]) ?>
                    <?= $this->Form->postLink(__('Excluir'), ['action' => 'delete', $q->id], ['confirm' => __('Are you sure you want to delete # {0}?', $q->id)]) ?>
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







</div>
