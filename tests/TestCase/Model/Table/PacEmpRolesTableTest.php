<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PacEmpRolesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PacEmpRolesTable Test Case
 */
class PacEmpRolesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\PacEmpRolesTable
     */
    public $PacEmpRoles;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::exists('PacEmpRoles') ? [] : ['className' => 'App\Model\Table\PacEmpRolesTable'];
        $this->PacEmpRoles = TableRegistry::get('PacEmpRoles', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PacEmpRoles);

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
