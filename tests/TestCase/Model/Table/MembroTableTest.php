<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MembroTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MembroTable Test Case
 */
class MembroTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MembroTable
     */
    public $Membro;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.membro'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Membro') ? [] : ['className' => MembroTable::class];
        $this->Membro = TableRegistry::get('Membro', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Membro);

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
