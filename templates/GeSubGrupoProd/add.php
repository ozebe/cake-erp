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
                echo $this->Form->control('codigo');
                echo $this->Form->control('descricao');
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
