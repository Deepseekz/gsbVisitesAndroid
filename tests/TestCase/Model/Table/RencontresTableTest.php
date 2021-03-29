<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\RencontresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\RencontresTable Test Case
 */
class RencontresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\RencontresTable
     */
    public $Rencontres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Rencontres',
        'app.Equipes',
        'app.Clubs',
        'app.Joueurs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Rencontres') ? [] : ['className' => RencontresTable::class];
        $this->Rencontres = TableRegistry::getTableLocator()->get('Rencontres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Rencontres);

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
