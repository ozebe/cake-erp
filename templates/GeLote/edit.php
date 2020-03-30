<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeLote $geLote
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $geLote->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $geLote->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ge Lote'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geLote form content">
            <?= $this->Form->create($geLote) ?>
            <fieldset>
                <legend><?= __('Edit Ge Lote') ?></legend>
                <?php
                    echo $this->Form->control('num_lote');
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('data_val');
                    echo $this->Form->control('criado');
                    echo $this->Form->control('editado');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
