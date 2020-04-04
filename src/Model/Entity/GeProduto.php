<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeProduto Entity
 *
 * @property int $id
 * @property string $codigo
 * @property string|null $descricao
 * @property int $id_unid_medida
 * @property int|null $id_unid_massa
 * @property int $id_ge_sub_grupo_prod
 * @property int|null $id_ge_estoque
 * @property string|null $cod_barras
 * @property string|null $ncm
 * @property bool $ativo
 * @property string|null $peso_bruto
 * @property string|null $peso_liquido
 * @property int|null $id_ge_lote
 * @property string|null $valor_custo
 * @property string|null $valor_venda
 * @property string $min_estoque
 * @property string|null $max_estoque
 * @property string|null $estoque_atual
 * @property string|null $cor
 * @property string|null $material
 * @property string|null $tamanho
 * @property string|null $tensao
 * @property \Cake\I18n\FrozenTime $criado
 * @property \Cake\I18n\FrozenTime|null $editado
 */
class GeProduto extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'codigo' => true,
        'descricao' => true,
        'id_unid_medida' => true,
        'id_unid_massa' => true,
        'id_ge_sub_grupo_prod' => true,
        'id_ge_estoque' => true,
        'cod_barras' => true,
        'ncm' => true,
        'ativo' => true,
        'peso_bruto' => true,
        'peso_liquido' => true,
        'id_ge_lote' => true,
        'valor_custo' => true,
        'valor_venda' => true,
        'min_estoque' => true,
        'max_estoque' => true,
        'estoque_atual' => true,
        'cor' => true,
        'material' => true,
        'tamanho' => true,
        'tensao' => true,
        'criado' => true,
        'editado' => true,
    ];
}
