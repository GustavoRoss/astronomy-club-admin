<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PresencaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PresencaTable Test Case
 */
class PresencaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PresencaTable
     */
    public $Presenca;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.presenca'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Presenca') ? [] : ['className' => PresencaTable::class];
        $this->Presenca = TableRegistry::get('Presenca', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Presenca);

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
