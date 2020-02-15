<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario $gaNivelUsuario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ga Nivel Usuario'), ['action' => 'edit', $gaNivelUsuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ga Nivel Usuario'), ['action' => 'delete', $gaNivelUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gaNivelUsuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Ga Nivel Usuario'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ga Nivel Usuario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gaNivelUsuario view content">
            <h3><?= h($gaNivelUsuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($gaNivelUsuario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Usuario') ?></th>
                    <td><?= $this->Number->format($gaNivelUsuario->id_usuario) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Nivel Acesso') ?></th>
                    <td><?= $this->Number->format($gaNivelUsuario->id_nivel_acesso) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
