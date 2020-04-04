<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeProduto $geProduto
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ge Produto'), ['action' => 'edit', $geProduto->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ge Produto'), ['action' => 'delete', $geProduto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geProduto->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ge Produto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ge Produto'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geProduto view content">
            <h3><?= h($geProduto->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($geProduto->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($geProduto->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cod Barras') ?></th>
                    <td><?= h($geProduto->cod_barras) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ncm') ?></th>
                    <td><?= h($geProduto->ncm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cor') ?></th>
                    <td><?= h($geProduto->cor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Material') ?></th>
                    <td><?= h($geProduto->material) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tamanho') ?></th>
                    <td><?= h($geProduto->tamanho) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tensao') ?></th>
                    <td><?= h($geProduto->tensao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($geProduto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Unid Medida') ?></th>
                    <td><?= $this->Number->format($geProduto->id_unid_medida) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Unid Massa') ?></th>
                    <td><?= $this->Number->format($geProduto->id_unid_massa) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Ge Sub Grupo Prod') ?></th>
                    <td><?= $this->Number->format($geProduto->id_ge_sub_grupo_prod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Ge Estoque') ?></th>
                    <td><?= $this->Number->format($geProduto->id_ge_estoque) ?></td>
                </tr>
                <tr>
                    <th><?= __('Peso Bruto') ?></th>
                    <td><?= $this->Number->format($geProduto->peso_bruto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Peso Liquido') ?></th>
                    <td><?= $this->Number->format($geProduto->peso_liquido) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Ge Lote') ?></th>
                    <td><?= $this->Number->format($geProduto->id_ge_lote) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Custo') ?></th>
                    <td><?= $this->Number->format($geProduto->valor_custo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor Venda') ?></th>
                    <td><?= $this->Number->format($geProduto->valor_venda) ?></td>
                </tr>
                <tr>
                    <th><?= __('Min Estoque') ?></th>
                    <td><?= $this->Number->format($geProduto->min_estoque) ?></td>
                </tr>
                <tr>
                    <th><?= __('Max Estoque') ?></th>
                    <td><?= $this->Number->format($geProduto->max_estoque) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estoque Atual') ?></th>
                    <td><?= $this->Number->format($geProduto->estoque_atual) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($geProduto->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($geProduto->editado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= $geProduto->ativo ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
