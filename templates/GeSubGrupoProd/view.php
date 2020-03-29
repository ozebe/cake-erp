<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeSubGrupoProd $geSubGrupoProd
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ge Sub Grupo Prod'), ['action' => 'edit', $geSubGrupoProd->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ge Sub Grupo Prod'), ['action' => 'delete', $geSubGrupoProd->id], ['confirm' => __('Are you sure you want to delete # {0}?', $geSubGrupoProd->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ge Sub Grupo Prod'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ge Sub Grupo Prod'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="geSubGrupoProd view content">
            <h3><?= h($geSubGrupoProd->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Codigo') ?></th>
                    <td><?= h($geSubGrupoProd->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($geSubGrupoProd->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($geSubGrupoProd->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Ge Grupo Prod') ?></th>
                    <td><?= $this->Number->format($geSubGrupoProd->id_ge_grupo_prod) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($geSubGrupoProd->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($geSubGrupoProd->editado) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
