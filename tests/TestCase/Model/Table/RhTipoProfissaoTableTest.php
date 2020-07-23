<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RhTipoProfissaoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RhTipoProfissaoTable Test Case
 */
class RhTipoProfissaoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RhTipoProfissaoTable
     */
    protected $RhTipoProfissao;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.RhTipoProfissao',
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
        $config = TableRegistry::getTableLocator()->exists('RhTipoProfissao') ? [] : ['className' => RhTipoProfissaoTable::class];
        $this->RhTipoProfissao = TableRegistry::getTableLocator()->get('RhTipoProfissao', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->RhTipoProfissao);

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
