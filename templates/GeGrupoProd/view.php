<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeGrupoProd $geGrupoProd
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ge Grupo Prod'), ['action' => 'edit', $geGrupoProd->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ge Grupo Prod'), ['action' => 'delete', $geGrupoProd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geGrupoProd->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ge Grupo Prod'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ge Grupo Prod'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geGrupoProd view content">
            <h3><?= h($geGrupoProd->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($geGrupoProd->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($geGrupoProd->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($geGrupoProd->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($geGrupoProd->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($geGrupoProd->editado) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
