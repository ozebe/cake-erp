<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeSubGrupoProd $geSubGrupoProd
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ge Sub Grupo Prod'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geSubGrupoProd form content">
            <?= $this->Form->create($geSubGrupoProd) ?>
            <fieldset>
                <legend><?= __('Add Ge Sub Grupo Prod') ?></legend>
                <?php
                    echo $this->Form->control('id_ge_grupo_prod');
                    echo $this->Form->control('codigo');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('criado');
                    echo $this->Form->control('editado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
