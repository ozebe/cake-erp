<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GaUsuario $gaUsuario
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Editar usuário') ?></b></h5>
    <div class="card-panel">
    <div class="column-responsive column-80">
        <div class="gaUsuario form content">
            <?= $this->Form->create($gaUsuario) ?>
                <?php

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">face</i>';
                echo $this->Form->text('nome', array("id" =>"nome", "data-length" => "255"));
                echo '<label for="nome">';echo $this->Form->label("nome", "Nome");echo '</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">account_circle</i>';
                echo $this->Form->text('usuario', array("id" =>"usuario", "data-length" => "255"));
                echo '<label for="usuario">';echo $this->Form->label("usuario", "Usuário");echo '</label>';
                echo '</div>';

                echo '<div class="input-field">';
                echo '<i class="material-icons prefix">vpn_key</i>';
                echo $this->Form->password('senha', array("id" =>"senha"));
                echo '<label for="senha">';echo $this->Form->label("senha", "Senha");echo '</label>';
                echo '</div>';



                    echo 'Bloqueado';
                    echo '<div class= "switch">';
                        echo '<label>';
                            echo 'Não';
                                 echo $this->Form->checkbox('bloqueado');
                                 echo ' <span class="lever"></span>';
                            echo 'Sim';
                        echo '</label>';
                    echo '<div>';

                    echo '<br>';

                    echo 'Ativo';
                    echo '<div class= "switch">';
                        echo '<label>';
                            echo 'Não';
                                echo $this->Form->checkbox('ativo');
                                echo ' <span class="lever"></span>';
                            echo 'Sim';
                        echo '</label>';
                    echo '<div>';

                    echo $this->Form->control('tentativas');
                echo '<br>';
                ?>

            <?= $this->Form->button(__('Salvar'),['class' => 'waves-effect waves-light btn', 'escape' => false]) ?>
            <?= $this->Form->end() ?>
        </div>
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
            <?= $this->Form->postLink('<i class="material-icons" style="color: white;">delete</i>',
                ['action' => 'delete', $gaUsuario->id],
                ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light red']

            );?>
        </li>

        <li> <!-- botão flutuante de listar-->
            <?= $this->Html->link('<i class="material-icons" style="color: white;">list</i>',
                ['action' => 'index'],
                ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light green darken-1']
            );?>
        </li>
    </ul>
</div>


