<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AtividadeTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AtividadeTable Test Case
 */
class AtividadeTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AtividadeTable
     */
    public $Atividade;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.atividade'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Atividade') ? [] : ['className' => AtividadeTable::class];
        $this->Atividade = TableRegistry::get('Atividade', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Atividade);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
