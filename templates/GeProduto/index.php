<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeProduto[]|\Cake\Collection\CollectionInterface $geProduto
 */
?>
<div class="geProduto index content">
    <?= $this->Html->link(__('New Ge Produto'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Ge Produto') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('codigo') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('id_unid_medida') ?></th>
                    <th><?= $this->Paginator->sort('id_unid_massa') ?></th>
                    <th><?= $this->Paginator->sort('id_ge_sub_grupo_prod') ?></th>
                    <th><?= $this->Paginator->sort('id_ge_estoque') ?></th>
                    <th><?= $this->Paginator->sort('cod_barras') ?></th>
                    <th><?= $this->Paginator->sort('ncm') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('peso_bruto') ?></th>
                    <th><?= $this->Paginator->sort('peso_liquido') ?></th>
                    <th><?= $this->Paginator->sort('id_ge_lote') ?></th>
                    <th><?= $this->Paginator->sort('valor_custo') ?></th>
                    <th><?= $this->Paginator->sort('valor_venda') ?></th>
                    <th><?= $this->Paginator->sort('min_estoque') ?></th>
                    <th><?= $this->Paginator->sort('max_estoque') ?></th>
                    <th><?= $this->Paginator->sort('estoque_atual') ?></th>
                    <th><?= $this->Paginator->sort('cor') ?></th>
                    <th><?= $this->Paginator->sort('material') ?></th>
                    <th><?= $this->Paginator->sort('tamanho') ?></th>
                    <th><?= $this->Paginator->sort('tensao') ?></th>
                    <th><?= $this->Paginator->sort('criado') ?></th>
                    <th><?= $this->Paginator->sort('editado') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($geProduto as $geProduto): ?>
                <tr>
                    <td><?= $this->Number->format($geProduto->id) ?></td>
                    <td><?= h($geProduto->codigo) ?></td>
                    <td><?= h($geProduto->descricao) ?></td>
                    <td><?= $this->Number->format($geProduto->id_unid_medida) ?></td>
                    <td><?= $this->Number->format($geProduto->id_unid_massa) ?></td>
                    <td><?= $this->Number->format($geProduto->id_ge_sub_grupo_prod) ?></td>
                    <td><?= $this->Number->format($geProduto->id_ge_estoque) ?></td>
                    <td><?= h($geProduto->cod_barras) ?></td>
                    <td><?= h($geProduto->ncm) ?></td>
                    <td><?= h($geProduto->ativo) ?></td>
                    <td><?= $this->Number->format($geProduto->peso_bruto) ?></td>
                    <td><?= $this->Number->format($geProduto->peso_liquido) ?></td>
                    <td><?= $this->Number->format($geProduto->id_ge_lote) ?></td>
                    <td><?= $this->Number->format($geProduto->valor_custo) ?></td>
                    <td><?= $this->Number->format($geProduto->valor_venda) ?></td>
                    <td><?= $this->Number->format($geProduto->min_estoque) ?></td>
                    <td><?= $this->Number->format($geProduto->max_estoque) ?></td>
                    <td><?= $this->Number->format($geProduto->estoque_atual) ?></td>
                    <td><?= h($geProduto->cor) ?></td>
                    <td><?= h($geProduto->material) ?></td>
                    <td><?= h($geProduto->tamanho) ?></td>
                    <td><?= h($geProduto->tensao) ?></td>
                    <td><?= h($geProduto->criado) ?></td>
                    <td><?= h($geProduto->editado) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $geProduto->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $geProduto->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $geProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geProduto->id)]) ?>
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
