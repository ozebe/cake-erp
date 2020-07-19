<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RhAreaProfissao $rhAreaProfissao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Rh Area Profissao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rhAreaProfissao form content">
            <?= $this->Form->create($rhAreaProfissao) ?>
            <fieldset>
                <legend><?= __('Add Rh Area Profissao') ?></legend>
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
