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
            <?= $this->Html->link(__('Edit Rh Area Profissao'), ['action' => 'edit', $rhAreaProfissao->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Rh Area Profissao'), ['action' => 'delete', $rhAreaProfissao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $rhAreaProfissao->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Rh Area Profissao'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Rh Area Profissao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="rhAreaProfissao view content">
            <h3><?= h($rhAreaProfissao->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($rhAreaProfissao->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($rhAreaProfissao->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($rhAreaProfissao->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($rhAreaProfissao->editado) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
