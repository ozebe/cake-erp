<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;
/**
 * GaUsuario Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $usuario
 * @property string $senha
 * @property bool $bloqueado
 * @property bool $ativo
 * @property int|null $tentativas
 * @property \Cake\I18n\FrozenTime $criado
 * @property \Cake\I18n\FrozenTime|null $editado
 */
class GaUsuario extends Entity
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
        'nome' => true,
        'usuario' => true,
        'senha' => true,
        'bloqueado' => true,
        'ativo' => true,
        'tentativas' => true,
        'criado' => true,
        'editado' => true,
    ];

    // faz o Hash da senha, observe que o nome da função precisa ser o mesmo nome do campo senha
    protected function _setSenha(string $password)
    {
        $hasher = new DefaultPasswordHasher();
        return $hasher->hash($password);
    }
}
