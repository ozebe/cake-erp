<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeGrupoProdTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeGrupoProdTable Test Case
 */
class GeGrupoProdTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeGrupoProdTable
     */
    protected $GeGrupoProd;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.GeGrupoProd',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeGrupoProd') ? [] : ['className' => GeGrupoProdTable::class];
        $this->GeGrupoProd = TableRegistry::getTableLocator()->get('GeGrupoProd', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->GeGrupoProd);

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
