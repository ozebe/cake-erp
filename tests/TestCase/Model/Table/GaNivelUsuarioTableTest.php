<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\GaNivelUsuarioTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\GaNivelUsuarioTable Test Case
 */
class GaNivelUsuarioTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\GaNivelUsuarioTable
     */
    protected $GaNivelUsuario;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.GaNivelUsuario',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('GaNivelUsuario') ? [] : ['className' => GaNivelUsuarioTable::class];
        $this->GaNivelUsuario = TableRegistry::getTableLocator()->get('GaNivelUsuario', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->GaNivelUsuario);

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
