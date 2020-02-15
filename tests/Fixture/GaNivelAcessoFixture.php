<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GaNivelAcessoFixture
 */
class GaNivelAcessoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ga_nivel_acesso';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'sigla' => ['type' => 'string', 'length' => 3, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'descricao' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ga_nivel_acesso_sigla_key' => ['type' => 'unique', 'columns' => ['sigla'], 'length' => []],
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
                'sigla' => 'L',
                'descricao' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
