<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RhTipoProfissao $rhTipoProfissao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $rhTipoProfissao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $rhTipoProfissao->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Rh Tipo Profissao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rhTipoProfissao form content">
            <?= $this->Form->create($rhTipoProfissao) ?>
            <fieldset>
                <legend><?= __('Edit Rh Tipo Profissao') ?></legend>
                <?php
                    echo $this->Form->control('rh_area_prof_id', ['options' => $rhAreaProfissao]);
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
