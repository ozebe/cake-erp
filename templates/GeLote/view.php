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
            <?= $this->Html->link(__('Edit Ge Lote'), ['action' => 'edit', $geLote->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ge Lote'), ['action' => 'delete', $geLote->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geLote->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ge Lote'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ge Lote'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geLote view content">
            <h3><?= h($geLote->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Num Lote') ?></th>
                    <td><?= h($geLote->num_lote) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($geLote->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($geLote->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data Val') ?></th>
                    <td><?= h($geLote->data_val) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($geLote->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($geLote->editado) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
