<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\BarbershopsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\BarbershopsTable Test Case
 */
class BarbershopsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\BarbershopsTable
     */
    public $Barbershops;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.barbershops',
        'app.services',
        'app.schedules',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Barbershops') ? [] : ['className' => BarbershopsTable::class];
        $this->Barbershops = TableRegistry::get('Barbershops', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Barbershops);

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
