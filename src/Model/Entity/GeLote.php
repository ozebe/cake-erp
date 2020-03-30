<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * GeLote Entity
 *
 * @property int $id
 * @property string $num_lote
 * @property string|null $descricao
 * @property \Cake\I18n\FrozenDate $data_val
 * @property \Cake\I18n\FrozenTime $criado
 * @property \Cake\I18n\FrozenTime|null $editado
 */
class GeLote extends Entity
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
        'num_lote' => true,
        'descricao' => true,
        'data_val' => true,
        'criado' => true,
        'editado' => true,
    ];
}
