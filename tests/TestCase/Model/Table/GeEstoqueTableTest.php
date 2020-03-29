<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GeEstoqueTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GeEstoqueTable Test Case
 */
class GeEstoqueTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GeEstoqueTable
     */
    protected $GeEstoque;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.GeEstoque',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GeEstoque') ? [] : ['className' => GeEstoqueTable::class];
        $this->GeEstoque = TableRegistry::getTableLocator()->get('GeEstoque', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->GeEstoque);

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
}
