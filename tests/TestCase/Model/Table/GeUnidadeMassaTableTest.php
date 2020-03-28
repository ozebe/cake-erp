<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeUnidadeMassaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeUnidadeMassaTable Test Case
 */
class GeUnidadeMassaTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeUnidadeMassaTable
     */
    protected $GeUnidadeMassa;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.GeUnidadeMassa',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeUnidadeMassa') ? [] : ['className' => GeUnidadeMassaTable::class];
        $this->GeUnidadeMassa = TableRegistry::getTableLocator()->get('GeUnidadeMassa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->GeUnidadeMassa);

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
