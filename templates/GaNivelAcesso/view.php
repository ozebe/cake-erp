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
            <?= $this->Html->link(__('Edit Ga Nivel Acesso'), ['action' => 'edit', $gaNivelAcesso->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ga Nivel Acesso'), ['action' => 'delete', $gaNivelAcesso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gaNivelAcesso->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ga Nivel Acesso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ga Nivel Acesso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gaNivelAcesso view content">
            <h3><?= h($gaNivelAcesso->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Sigla') ?></th>
                    <td><?= h($gaNivelAcesso->sigla) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($gaNivelAcesso->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gaNivelAcesso->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
