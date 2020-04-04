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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $geProduto->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $geProduto->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ge Produto'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geProduto form content">
            <?= $this->Form->create($geProduto) ?>
            <fieldset>
                <legend><?= __('Edit Ge Produto') ?></legend>
                <?php
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('id_unid_medida');
                    echo $this->Form->control('id_unid_massa');
                    echo $this->Form->control('id_ge_sub_grupo_prod');
                    echo $this->Form->control('id_ge_estoque');
                    echo $this->Form->control('cod_barras');
                    echo $this->Form->control('ncm');
                    echo $this->Form->control('ativo');
                    echo $this->Form->control('peso_bruto');
                    echo $this->Form->control('peso_liquido');
                    echo $this->Form->control('id_ge_lote');
                    echo $this->Form->control('valor_custo');
                    echo $this->Form->control('valor_venda');
                    echo $this->Form->control('min_estoque');
                    echo $this->Form->control('max_estoque');
                    echo $this->Form->control('estoque_atual');
                    echo $this->Form->control('cor');
                    echo $this->Form->control('material');
                    echo $this->Form->control('tamanho');
                    echo $this->Form->control('tensao');
                    echo $this->Form->control('criado');
                    echo $this->Form->control('editado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
