<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelAcesso $gaNivelAcesso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $gaNivelAcesso->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $gaNivelAcesso->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Ga Nivel Acesso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gaNivelAcesso form content">
            <?= $this->Form->create($gaNivelAcesso) ?>
            <fieldset>
                <legend><?= __('Edit Ga Nivel Acesso') ?></legend>
                <?php
                    echo $this->Form->control('sigla');
                    echo $this->Form->control('descricao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
