<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeProduto[]|\Cake\Collection\CollectionInterface $geProduto
 */
?>
<div class="geProduto index content">
    <h5><b><?= __('Produtos') ?></b></h5>
    <div class="table-responsive">
        <table class="striped">
            <thead>
            <tr>
                <th><?= $this->Paginator->sort('codigo','Código') ?></th>
                <th><?= $this->Paginator->sort('descricao','Descrição') ?></th>
                <th><?= $this->Paginator->sort('id_ge_grupo_prod','Subgrupo do Produto') ?></th>
                <th><?= $this->Paginator->sort('valor_venda','Valor de venda') ?></th>
                <th class="actions"><?= __('Ações') ?></th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($geProduto as $geProduto): ?>
                <tr>
                    <td><?= h($geProduto->codigo) ?></td>
                    <td><?=$this->Text->truncate($geProduto->descricao, 22, ['ellipsis' => '...', 'exact' => true]);?></td>
                    <td><?= h($geProduto->ge_sub_grupo_prod->descricao)?></td>
                    <td><?= h($this->Number->currency($geProduto->valor_venda, 'BRL')) ?></td>

                    <td class="actions">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>',
                            ['action' => 'view', $geProduto->id],
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
