<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GaNivelUsuarioFixture
 */
class GaNivelUsuarioFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ga_nivel_usuario';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'id_usuario' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_nivel_acesso' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ga_nivel_usuario_id_nivel_acesso_fkey' => ['type' => 'foreign', 'columns' => ['id_nivel_acesso'], 'references' => ['ga_nivel_acesso', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'ga_nivel_usuario_id_usuario_fkey' => ['type' => 'foreign', 'columns' => ['id_usuario'], 'references' => ['ga_usuario', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'id_usuario' => 1,
                'id_nivel_acesso' => 1,
            ],
        ];
        parent::init();
    }
}
