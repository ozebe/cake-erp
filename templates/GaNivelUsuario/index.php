<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario[]|\Cake\Collection\CollectionInterface $gaNivelUsuario
 * @var \App\Model\Entity\GaNivelUsuario[]|\Cake\Collection\CollectionInterface $query
 */
?>
<div class="gaNivelUsuario index content">
    <h5><b><?= __('Usuarios e niveis de acesso') ?></b></h5>
    <div class="table-responsive">
    <table class="striped">
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
                    <?= $this->Html->link('<i class="material-icons">visibility</i>',
                        ['action' => 'view', $q->id],
                        ['escape' => false, 'class' => 'btn-floating btn-small waves-effect waves-light']
                    );?>

                    <?= $this->Form->postLink('<i class="material-icons" style="color: white;">delete</i>',
                        ['action' => 'delete', $q->id],
                        ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-small waves-effect waves-light red']

                    );?>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>

    <!-- paginação -->
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<i class="material-icons">fast_rewind</i>',
                ['escape' => false]
            );?>
            <?= $this->Paginator->prev('<i class="material-icons">chevron_left</i>',
                ['escape' => false]
            );?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('<i class="material-icons">chevron_right</i>',
                ['escape' => false]
            );?>
            <?= $this->Paginator->last('<i class="material-icons">fast_forward</i>',
                ['escape' => false]
            );?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')) ?></p>
    </div>
</div>

<!-- Botão flutuante novo-->
<div class="fixed-action-btn horizontal">
    <?= $this->Html->link('<i class="material-icons">add</i>',
        ['action' => 'add'],
        ['escape' => false, 'class' => 'btn-floating btn-large waves-effect waves-light']
    );?>
</div>
