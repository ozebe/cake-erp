<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeEstoque $geEstoque
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ge Estoque'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geEstoque form content">
            <?= $this->Form->create($geEstoque) ?>
            <fieldset>
                <legend><?= __('Add Ge Estoque') ?></legend>
                <?php
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('ativo');
                    echo $this->Form->control('criado');
                    echo $this->Form->control('editado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>