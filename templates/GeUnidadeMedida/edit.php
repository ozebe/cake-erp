<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeUnidadeMedida $geUnidadeMedida
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $geUnidadeMedida->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $geUnidadeMedida->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ge Unidade Medida'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geUnidadeMedida form content">
            <?= $this->Form->create($geUnidadeMedida) ?>
            <fieldset>
                <legend><?= __('Edit Ge Unidade Medida') ?></legend>
                <?php
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
