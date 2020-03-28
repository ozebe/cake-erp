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
            <?= $this->Html->link(__('Edit Ge Unidade Massa'), ['action' => 'edit', $geUnidadeMassa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ge Unidade Massa'), ['action' => 'delete', $geUnidadeMassa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geUnidadeMassa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ge Unidade Massa'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ge Unidade Massa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geUnidadeMassa view content">
            <h3><?= h($geUnidadeMassa->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($geUnidadeMassa->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($geUnidadeMassa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($geUnidadeMassa->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($geUnidadeMassa->editado) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
