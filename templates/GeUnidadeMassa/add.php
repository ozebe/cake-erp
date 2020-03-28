<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeUnidadeMassa $geUnidadeMassa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Ge Unidade Massa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geUnidadeMassa form content">
            <?= $this->Form->create($geUnidadeMassa) ?>
            <fieldset>
                <legend><?= __('Add Ge Unidade Massa') ?></legend>
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
