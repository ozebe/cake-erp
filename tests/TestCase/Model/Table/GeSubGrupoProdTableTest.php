<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeSubGrupoProdTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeSubGrupoProdTable Test Case
 */
class GeSubGrupoProdTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeSubGrupoProdTable
     */
    protected $GeSubGrupoProd;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.GeSubGrupoProd',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeSubGrupoProd') ? [] : ['className' => GeSubGrupoProdTable::class];
        $this->GeSubGrupoProd = TableRegistry::getTableLocator()->get('GeSubGrupoProd', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->GeSubGrupoProd);

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
