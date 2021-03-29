<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JoueursRencontresTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JoueursRencontresTable Test Case
 */
class JoueursRencontresTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JoueursRencontresTable
     */
    public $JoueursRencontres;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.JoueursRencontres',
        'app.Joueurs',
        'app.Rencontres'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('JoueursRencontres') ? [] : ['className' => JoueursRencontresTable::class];
        $this->JoueursRencontres = TableRegistry::getTableLocator()->get('JoueursRencontres', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->JoueursRencontres);

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
