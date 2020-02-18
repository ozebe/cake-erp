<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaNivelUsuario $gaNivelUsuario
 * @var \App\Model\Entity\GaNivelUsuario $query
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editar nivel de acesso'), ['action' => 'edit', $gaNivelUsuario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Excluir nivel de acesso'), ['action' => 'delete', $gaNivelUsuario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gaNivelUsuario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Usuarios e niveis de acesso'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Cadastrar novo nivel de acesso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="gaNivelUsuario view content">
            <h3><?= h($gaNivelUsuario->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Usuario') ?></th>
                    <td><?= h($query->ga_usuario->usuario)?></td>
                </tr>
                <tr>
                    <th><?= __('Nivel Acesso') ?></th>
                    <td><?= h($query->ga_nivel_acesso->descricao)?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
