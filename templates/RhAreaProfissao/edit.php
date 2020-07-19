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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rhAreaProfissao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rhAreaProfissao->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rh Area Profissao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rhAreaProfissao form content">
            <?= $this->Form->create($rhAreaProfissao) ?>
            <fieldset>
                <legend><?= __('Edit Rh Area Profissao') ?></legend>
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
