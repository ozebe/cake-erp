<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeSubGrupoProd $geSubGrupoProd
 * @var \App\Model\Entity\GeSubGrupoProd $grupo
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Cadastro de subgrupo de produto') ?></b></h5>
    <div class="card-panel">
        <div class="column-responsive column-80">
            <div class="geSubGrupoProd form content">
                <?= $this->Form->create($geSubGrupoProd) ?>


                <?php
                echo '<label>Grupo de produto</label>';
                echo $this->Form->select('id_ge_grupo_prod', $grupo);
                echo '<br>';
                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">short_text</i>';
                echo $this->Form->text('codigo', array("id" =>"codigo", "data-length" => "255"));
                echo '<label for="codigo">';echo $this->Form->label("codigo", "Código");echo '</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">notes</i>';
                echo $this->Form->text('descricao', array("id" =>"descricao", "data-length" => "255"));
                echo '<label for="descricao">';echo $this->Form->label("descricao", "Descrição");echo '</label>';
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
