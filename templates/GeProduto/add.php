<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeProduto $geProduto
 * @var \App\Model\Entity\GeProduto $unidadeMedida
 * @var \App\Model\Entity\GeProduto $unidadeMassa
 * @var \App\Model\Entity\GeProduto $subGrupo
 * @var \App\Model\Entity\GeProduto $estoque
 * @var \App\Model\Entity\GeProduto $lote
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Cadastro de produto') ?></b></h5>
    <div class="card-panel">
        <div class="column-responsive column-80">
            <div class="geSubGrupoProd form content">
                <?= $this->Form->create($geProduto) ?>


                <?php

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">short_text</i>';
                echo $this->Form->text('codigo', array("id" =>"codigo", "data-length" => "30"));
                echo '<label for="codigo">Código</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">notes</i>';
                echo $this->Form->text('descricao', array("id" =>"descricao", "data-length" => "255"));
                echo '<label for="descricao">Descrição</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">format_align_justify</i>';
                echo $this->Form->text('cod_barras', array("id" =>"codBarra", "data-length" => "255"));
                echo '<label for="codBarra">Cod barras</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">account_tree</i>';
                echo $this->Form->text('ncm', array("id" =>"ncm", "data-length" => "255"));
                echo '<label for="ncm">NCM</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">money</i>';
                echo $this->Form->text('valor_custo', array("id" =>"valCusto", "data-length" => "10", "class" => "money"));
                echo '<label for="valCusto">Valor de custo</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">money</i>';
                echo $this->Form->text('valor_venda', array("id" =>"valVenda", "data-length" => "10", "class" => "money"));
                echo '<label for="valVenda">Valor de venda</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">arrow_downward</i>';
                echo $this->Form->number('min_estoque', array("id" =>"minEstoque", "data-length" => "10", "min" => "0"));
                echo '<label for="minEstoque">Mínimo no estoque</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">arrow_upward</i>';
                echo $this->Form->number('max_estoque', array("id" =>"maxEstoque", "data-length" => "10", "min" => "0"));
                echo '<label for="maxEstoque">Máximo no estoque</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">archive</i>';
                echo $this->Form->number('estoque_atual', array("id" =>"estoqueAtual", "data-length" => "10", "min" => "0"));
                echo '<label for="estoqueAtual">Estoque atual</label>';
                echo '</div>';

                echo 'Ativo';
                echo '<div class= "switch">';
                echo '<label>';
                echo 'Não';
                echo $this->Form->checkbox('ativo');
                echo ' <span class="lever"></span>';
                echo 'Sim';
                echo '</label>';
                echo '<div>';


                echo '<br>';
                echo '<label>Unidade de medida</label>';
                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">straighten</i>';
                echo $this->Form->select('id_unid_medida', $unidadeMedida, ['empty' => '(Selecione)']);
                echo '</div>';
                echo '<br>';

                echo '<label>Subgrupo do produto</label>';
                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">bookmarks</i>';
                echo $this->Form->select('id_ge_sub_grupo_prod', $subGrupo, ['empty' => '(Selecione)']);
                echo '</div>';
                echo '<br>';

                echo '<h5><b>Campos opcionais</b></h5>';
                echo '<br>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">color_lens</i>';
                echo $this->Form->text('cor', array("id" =>"cor", "data-length" => "100"));
                echo '<label for="cor">Cor</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">texture</i>';
                echo $this->Form->text('material', array("id" =>"material", "data-length" => "100"));
                echo '<label for="material">Material</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">text_fields</i>';
                echo $this->Form->text('tamanho', array("id" =>"tamanho", "data-length" => "50"));
                echo '<label for="tamanho">Tamanho</label>';
                echo '</div>';

                echo '<label>Tensão(voltagem) do produto</label>';
                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">power</i>';
                echo $this->Form->select('tensao', ['110V', '220V', 'Outros'], ['empty' => '(Selecione)', 'required'=>false]);
                echo '</div>';


                echo '<label>Unidade de massa</label>';
                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">fitness_center</i>';
                echo $this->Form->select('id_unid_massa', $unidadeMassa, ['empty' => '(Selecione)']);
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">fitness_center</i>';
                echo $this->Form->number('peso_bruto', array("id" =>"pBruto", "data-length" => "11", "min" => "0"));
                echo '<label for="pBruto">Peso Bruto</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">fitness_center</i>';
                echo $this->Form->number('peso_liquido', array("id" =>"pLiquido", "data-length" => "11", "min" => "0"));
                echo '<label for="pLiquido">Peso Líquido</label>';
                echo '</div>';

                echo '<label>Estoque onde o produto encontra-se</label>';
                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">view_module</i>';
                echo $this->Form->select('id_ge_estoque', $estoque, ['empty' => '(Selecione)']);
                echo '</div>';

                echo '<label>Vincular lote ao produto</label>';
                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">reorder</i>';
                echo $this->Form->select('id_ge_lote', $lote, ['empty' => '(Selecione)']);
                echo '</div>';


                ?>
                <br>
                <?= $this->Form->button(__('Salvar'),['class' => 'waves-effect waves-light btn', 'escape' => false]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<!-- Botão flutuante listar-->
<div class="fixed-action-btn horizontal">
    <?= $this->Html->link('<i class="material-icons">list</i>',
        ['action' => 'index'],
        ['escape' => false, 'class' => 'btn-floating btn-large waves-effect waves-light']
    );?>
</div>

</div>
