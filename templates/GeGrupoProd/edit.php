<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeGrupoProd $geGrupoProd
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $geGrupoProd->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $geGrupoProd->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ge Grupo Prod'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geGrupoProd form content">
            <?= $this->Form->create($geGrupoProd) ?>
            <fieldset>
                <legend><?= __('Edit Ge Grupo Prod') ?></legend>
                <?php
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
