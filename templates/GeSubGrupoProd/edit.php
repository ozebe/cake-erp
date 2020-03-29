<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeSubGrupoProd $geSubGrupoProd
 * @var \App\Model\Entity\GeSubGrupoProd $grupo
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Editar subgrupo de produto') ?></b></h5>
    <div class="card-panel">
        <div class="column-responsive column-80">
            <div class="geSubGrupoProd form content">
                <?= $this->Form->create($geSubGrupoProd) ?>


                <?php
                echo '<label>Grupo de produto</label>';
                echo $this->Form->select('id_ge_grupo_prod', $grupo);

                echo $this->Form->control('codigo');
                echo $this->Form->control('descricao');
                ?>

                <?= $this->Form->button(__('Salvar'),['class' => 'waves-effect waves-light btn', 'escape' => false]) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>

    <!-- Botão flutuante com opção de ir para o index e apagar, para utilizar no edit-->
    <div class="fixed-action-btn horizontal">
        <a class="btn-floating waves-effect waves-light btn-large orange darken-1">
            <i class="large material-icons">build</i>
        </a>
        <ul>
            <li> <!-- botão flutuante de excluir-->
                <?= $this->Form->postLink('<i class="material-icons" style="color: white">delete</i>',
                    ['action' => 'delete', $geSubGrupoProd->id],
                    ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light red']

                );?>
            </li>

            <li> <!-- botão flutuante de listar-->
                <?= $this->Html->link('<i class="material-icons" style="color: white">list</i>',
                    ['action' => 'index'],
                    ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light green darken-1']
                );?>
            </li>
        </ul>
    </div>
