<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeUnidadeMedida $geUnidadeMedida
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ge Unidade Medida'), ['action' => 'edit', $geUnidadeMedida->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ge Unidade Medida'), ['action' => 'delete', $geUnidadeMedida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geUnidadeMedida->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ge Unidade Medida'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ge Unidade Medida'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geUnidadeMedida view content">
            <h3><?= h($geUnidadeMedida->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($geUnidadeMedida->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($geUnidadeMedida->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($geUnidadeMedida->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($geUnidadeMedida->editado) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
