<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeSubGrupoProd Entity
 *
 * @property int $id
 * @property int $id_ge_grupo_prod
 * @property string $codigo
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenTime $criado
 * @property \Cake\I18n\FrozenTime|null $editado
 */
class GeSubGrupoProd extends Entity
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
        'id_ge_grupo_prod' => true,
        'codigo' => true,
        'descricao' => true,
        'criado' => true,
        'editado' => true,
    ];
}
