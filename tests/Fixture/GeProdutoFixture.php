<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GeProdutoFixture
 */
class GeProdutoFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'ge_produto';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null],
        'codigo' => ['type' => 'string', 'length' => 30, 'default' => null, 'null' => false, 'collate' => null, 'comment' => null, 'precision' => null],
        'descricao' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'id_unid_medida' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_unid_massa' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_ge_sub_grupo_prod' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_ge_estoque' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'cod_barras' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'ncm' => ['type' => 'string', 'length' => 255, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'ativo' => ['type' => 'boolean', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => null],
        'peso_bruto' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 3, 'unsigned' => null],
        'peso_liquido' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 3, 'unsigned' => null],
        'id_ge_lote' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'valor_custo' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'valor_venda' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'min_estoque' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 3, 'unsigned' => null],
        'max_estoque' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 3, 'unsigned' => null],
        'estoque_atual' => ['type' => 'decimal', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 2, 'unsigned' => null],
        'cor' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'material' => ['type' => 'string', 'length' => 100, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'tamanho' => ['type' => 'string', 'length' => 50, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'tensao' => ['type' => 'string', 'length' => 6, 'default' => null, 'null' => true, 'collate' => null, 'comment' => null, 'precision' => null],
        'criado' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => false, 'comment' => null, 'precision' => 6],
        'editado' => ['type' => 'timestampfractional', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => 6],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ge_produto_codigo_key' => ['type' => 'unique', 'columns' => ['codigo'], 'length' => []],
            'ge_produto_id_ge_estoque_fkey' => ['type' => 'foreign', 'columns' => ['id_ge_estoque'], 'references' => ['ge_estoque', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'ge_produto_id_ge_lote_fkey' => ['type' => 'foreign', 'columns' => ['id_ge_lote'], 'references' => ['ge_lote', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'ge_produto_id_ge_sub_grupo_prod_fkey' => ['type' => 'foreign', 'columns' => ['id_ge_sub_grupo_prod'], 'references' => ['ge_sub_grupo_prod', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'ge_produto_id_unid_massa_fkey' => ['type' => 'foreign', 'columns' => ['id_unid_massa'], 'references' => ['ge_unidade_massa', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'ge_produto_id_unid_medida_fkey' => ['type' => 'foreign', 'columns' => ['id_unid_medida'], 'references' => ['ge_unidade_medida', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'codigo' => 'Lorem ipsum dolor sit amet',
                'descricao' => 'Lorem ipsum dolor sit amet',
                'id_unid_medida' => 1,
                'id_unid_massa' => 1,
                'id_ge_sub_grupo_prod' => 1,
                'id_ge_estoque' => 1,
                'cod_barras' => 'Lorem ipsum dolor sit amet',
                'ncm' => 'Lorem ipsum dolor sit amet',
                'ativo' => 1,
                'peso_bruto' => 1.5,
                'peso_liquido' => 1.5,
                'id_ge_lote' => 1,
                'valor_custo' => 1.5,
                'valor_venda' => 1.5,
                'min_estoque' => 1.5,
                'max_estoque' => 1.5,
                'estoque_atual' => 1.5,
                'cor' => 'Lorem ipsum dolor sit amet',
                'material' => 'Lorem ipsum dolor sit amet',
                'tamanho' => 'Lorem ipsum dolor sit amet',
                'tensao' => 'Lore',
                'criado' => '',
                'editado' => '',
            ],
        ];
        parent::init();
    }
}
