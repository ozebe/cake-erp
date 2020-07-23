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
            <?= $this->Html->link(__('Edit Rh Tipo Profissao'), ['action' => 'edit', $rhTipoProfissao->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rh Tipo Profissao'), ['action' => 'delete', $rhTipoProfissao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rhTipoProfissao->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rh Tipo Profissao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rh Tipo Profissao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rhTipoProfissao view content">
            <h3><?= h($rhTipoProfissao->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Rh Area Profissao') ?></th>
                    <td><?= $rhTipoProfissao->has('rh_area_profissao') ? $this->Html->link($rhTipoProfissao->rh_area_profissao->id, ['controller' => 'RhAreaProfissao', 'action' => 'view', $rhTipoProfissao->rh_area_profissao->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($rhTipoProfissao->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rhTipoProfissao->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($rhTipoProfissao->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($rhTipoProfissao->editado) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
