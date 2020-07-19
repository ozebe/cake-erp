<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RhAreaProfissaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RhAreaProfissaoTable Test Case
 */
class RhAreaProfissaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RhAreaProfissaoTable
     */
    protected $RhAreaProfissao;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.RhAreaProfissao',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('RhAreaProfissao') ? [] : ['className' => RhAreaProfissaoTable::class];
        $this->RhAreaProfissao = TableRegistry::getTableLocator()->get('RhAreaProfissao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->RhAreaProfissao);

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
