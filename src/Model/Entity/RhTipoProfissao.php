<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RhTipoProfissao Entity
 *
 * @property int $id
 * @property int $rh_area_prof_id
 * @property string $descricao
 * @property \Cake\I18n\FrozenTime $criado
 * @property \Cake\I18n\FrozenTime|null $editado
 *
 * @property \App\Model\Entity\RhAreaProfissao $rh_area_profissao
 */
class RhTipoProfissao extends Entity
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
        'rh_area_prof_id' => true,
        'descricao' => true,
        'criado' => true,
        'editado' => true,
        'rh_area_profissao' => true,
    ];
}
