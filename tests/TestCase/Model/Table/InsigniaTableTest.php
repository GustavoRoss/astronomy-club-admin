<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\InsigniaTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\InsigniaTable Test Case
 */
class InsigniaTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\InsigniaTable
     */
    public $Insignia;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.insignia'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Insignia') ? [] : ['className' => InsigniaTable::class];
        $this->Insignia = TableRegistry::get('Insignia', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Insignia);

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
