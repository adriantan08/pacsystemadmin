<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacEmployeesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacEmployeesTable Test Case
 */
class PacEmployeesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacEmployeesTable
     */
    public $PacEmployees;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.pac_employees',
        'app.pac_emp_roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('PacEmployees') ? [] : ['className' => 'App\Model\Table\PacEmployeesTable'];
        $this->PacEmployees = TableRegistry::get('PacEmployees', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PacEmployees);

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
