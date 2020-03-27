<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeUnidadeMedidaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeUnidadeMedidaTable Test Case
 */
class GeUnidadeMedidaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeUnidadeMedidaTable
     */
    protected $GeUnidadeMedida;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.GeUnidadeMedida',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeUnidadeMedida') ? [] : ['className' => GeUnidadeMedidaTable::class];
        $this->GeUnidadeMedida = TableRegistry::getTableLocator()->get('GeUnidadeMedida', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->GeUnidadeMedida);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
