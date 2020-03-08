<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaUsuario[]|\Cake\Collection\CollectionInterface $gaUsuario
 */
?>
<div class="gaUsuario index content">
    <h4><?= __('Usuários do sistema') ?></h4>
    <div class="table-responsive">
        <table class="striped">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('usuario') ?></th>
                    <th><?= $this->Paginator->sort('bloqueado') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($gaUsuario as $gaUsuario): ?>
                <tr>
                    <td><?= h($gaUsuario->nome) ?></td>
                    <td><?= h($gaUsuario->usuario) ?></td>
                    <?php
                    if($gaUsuario->bloqueado){
                       echo '<td><span class="chip red lighten-5"><span class="red-text">Sim</span></span></td>';
                    } else{
                        echo '<td><span class="chip green lighten-5"><span class="green-text">Não</span></span></td>';
                    }
                    if($gaUsuario->ativo){
                        echo '<td><span class="chip green lighten-5"><span class="green-text">Sim</span></span></td>';
                    } else{
                        echo '<td><span class="chip red lighten-5"><span class="red-text">Não</span></span></td>';
                    }
                    ?>

                    <td class="actions">
                        <?= $this->Html->link('<i class="material-icons">visibility</i>',
                            ['action' => 'view', $gaUsuario->id],
                            ['escape' => false, 'class' => 'btn-floating btn-small waves-effect waves-light green darken-1']
                        );?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- paginação -->
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<i class="material-icons">fast_rewind</i>',
                ['escape' => false]
            );?>
            <?= $this->Paginator->prev('<i class="material-icons">chevron_left</i>',
                ['escape' => false]
            );?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next('<i class="material-icons">chevron_right</i>',
                ['escape' => false]
            );?>
            <?= $this->Paginator->last('<i class="material-icons">fast_forward</i>',
                ['escape' => false]
            );?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} no total')) ?></p>
    </div>
</div>

<!-- Botão flutuante novo-->
<div class="fixed-action-btn horizontal">
    <?= $this->Html->link('<i class="material-icons">add</i>',
        ['action' => 'add'],
        ['escape' => false, 'class' => 'btn-floating btn-large waves-effect waves-light green darken-4']
    );?>
</div>
