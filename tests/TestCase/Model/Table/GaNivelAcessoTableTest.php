<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaNivelAcessoTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaNivelAcessoTable Test Case
 */
class GaNivelAcessoTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GaNivelAcessoTable
     */
    protected $GaNivelAcesso;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.GaNivelAcesso',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GaNivelAcesso') ? [] : ['className' => GaNivelAcessoTable::class];
        $this->GaNivelAcesso = TableRegistry::getTableLocator()->get('GaNivelAcesso', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->GaNivelAcesso);

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
