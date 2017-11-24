<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmpresaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmpresaTable Test Case
 */
class EmpresaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmpresaTable
     */
    public $Empresa;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.empresa'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Empresa') ? [] : ['className' => EmpresaTable::class];
        $this->Empresa = TableRegistry::get('Empresa', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Empresa);

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

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
