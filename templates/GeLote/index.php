<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeLote[]|\Cake\Collection\CollectionInterface $geLote
 */
?>
<div class="geLote index content">
    <h5><b><?= __('Lotes de produtos') ?></b></h5>
    <div class="table-responsive">
        <table class="striped">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('num_lote','Número do lote') ?></th>
                <th><?= $this->Paginator->sort('data_val','data de validade') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($geLote as $geLote): ?>
                <tr>
                    <td><?= h($this->Number->format($geLote->id)) ?></td>
                    <td><?= h($geLote->num_lote) ?></td>
                    <td><?= h($geLote->data_val) ?></td>

                    <td class="actions">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>',
                            ['action' => 'view', $geLote->id],
                            ['escape' => false, 'class' => 'btn-floating btn-small waves-effect waves-light']
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
