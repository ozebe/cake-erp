<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GeProduto $geProduto
 */
?>
<div class="row">
    <h5 class="heading"><b><?= __('Visualizar produto') ?></b></h5>
    <div class="column-responsive column-80">
        <div class="geProduto view content">
            <table class="striped">
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($geProduto->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Código') ?></th>
                    <td><?= h($geProduto->codigo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Descrição') ?></th>
                    <td><?= h($geProduto->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Subgrupo do produto') ?></th>
                    <td><?= h($geProduto->ge_sub_grupo_prod->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor de custo') ?></th>
                    <td><?= h($this->Number->currency($geProduto->valor_custo, 'BRL')) ?></td>
                </tr>
                <tr>
                    <th><?= __('Valor de venda') ?></th>
                    <td><?= h($this->Number->currency($geProduto->valor_venda, 'BRL')) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estoque padrão') ?></th>
                    <?php if(is_null($geProduto->ge_estoque)){
                        echo '<td>Sem estoque vinculado</td>';
                    }else{
                        echo '<td>';echo h($geProduto->ge_estoque->descricao); echo '</td>';
                    } ?>
                </tr>
                <tr>
                    <th><?= __('Código de barras') ?></th>
                    <td><?= h($geProduto->cod_barras) ?></td>
                </tr>
                <tr>
                    <th><?= __('NCM') ?></th>
                    <td><?= h($geProduto->ncm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Num lote padrão') ?></th>
                    <?php if(is_null($geProduto->ge_lote)){
                        echo '<td>Sem lote vinculado</td>';
                    }else{
                        echo '<td>';echo h($geProduto->ge_lote->num_lote); echo '</td>';
                    } ?>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td>
                        <?php
                        if($geProduto->ativo){
                            echo '<span class="chip green lighten-5"><span class="green-text">Sim</span></span>';
                        } else{
                            echo '<span class="chip red lighten-5"><span class="red-text">Não</span></span>';
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <th><?= __('Estoque Atual') ?></th>
                    <td><?= $this->Number->format($geProduto->estoque_atual, ['after' =>' ' . $geProduto->ge_unidade_medida->descricao]) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estoque mínimo') ?></th>
                    <td><?= $this->Number->format($geProduto->min_estoque, ['after' =>' ' . $geProduto->ge_unidade_medida->descricao]) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estoque máximo') ?></th>
                    <?php if(is_null($geProduto->max_estoque)){
                        echo '<td>Sem valor máximo</td>';
                        }else{
                        echo '<td>';echo $this->Number->format($geProduto->max_estoque, ['after' =>' ' . $geProduto->ge_unidade_medida->descricao]); echo '</td>';
                    } ?>
                </tr>
                <tr>
                    <th><?= __('Unidade de medida') ?></th>
                    <td><?= h($geProduto->ge_unidade_medida->descricao) ?></td>
                </tr>

                <?php if(is_null($geProduto->ge_unidade_massa)){
                    echo '<tr>';
                        echo '<th>';echo __('Unidade de massa');echo '</th>';
                        echo '<td>Sem unidade de massa vinculada</td>';
                    echo '</tr>';
                }else{
                echo '<tr>';
                    echo '<th>';echo __('Peso Bruto');echo '</th>';
                    echo '<td>';echo $this->Number->format($geProduto->peso_bruto, ['after' =>' ' . $geProduto->ge_unidade_massa->descricao]); echo '</td>';
                echo '</tr>';

                echo '<tr>';
                    echo '<th>';echo __('Peso Liquido');echo '</th>';
                    echo '<td>';echo $this->Number->format($geProduto->peso_liquido, ['after' =>' ' . $geProduto->ge_unidade_massa->descricao]); echo '</td>';
                echo '</tr>';

                echo '<tr>';
                    echo '<th>';echo __('Unidade de massa');echo '</th>';
                    echo '<td>';echo h($geProduto->ge_unidade_massa->descricao); echo '</td>';
                echo '</tr>';
                } ?>
                <tr>
                    <th><?= __('Cor') ?></th>
                    <td><?= h($geProduto->cor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Material') ?></th>
                    <td><?= h($geProduto->material) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tamanho') ?></th>
                    <td><?= h($geProduto->tamanho) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tensão') ?></th>
                    <td><?= h($geProduto->tensao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Criado') ?></th>
                    <td><?= h($geProduto->criado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Editado') ?></th>
                    <td><?= h($geProduto->editado) ?></td>
                </tr>
            </table>
        </div>
    </div>
    <!-- Botão flutuante com opção de editar e apagar, para utilizar na view-->
    <div class="fixed-action-btn horizontal">
        <a class="btn-floating waves-effect waves-light btn-large orange darken-1">
            <i class="large material-icons">build</i>
        </a>
        <ul>
            <li> <!-- botão flutuante de excluir-->
                <?= $this->Form->postLink('<i class="material-icons" style="color: white">delete</i>',
                    ['action' => 'delete', $geProduto->id],
                    ['confirm' => 'Deseja realmente excluir?', 'escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light red']

                );?>
            </li>

            <li> <!-- botão flutuante de editar-->
                <?= $this->Html->link('<i class="material-icons" style="color: white">edit</i>',
                    ['action' => 'edit', $geProduto->id],
                    ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light cyan darken-2']
                );?>
            </li>

            <li>
                <?= $this->Html->link('<i class="material-icons" style="color: white">list</i>',
                    ['action' => 'index'],
                    ['escape' => false, 'class' => 'btn-floating btn-medium waves-effect waves-light green darken-1']
                );?>
            </li>
        </ul>
    </div>


