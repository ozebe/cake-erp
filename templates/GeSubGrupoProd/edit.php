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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $geSubGrupoProd->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $geSubGrupoProd->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ge Sub Grupo Prod'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geSubGrupoProd form content">
            <?= $this->Form->create($geSubGrupoProd) ?>
            <fieldset>
                <legend><?= __('Edit Ge Sub Grupo Prod') ?></legend>
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
