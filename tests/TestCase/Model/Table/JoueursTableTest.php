<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\JoueursTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\JoueursTable Test Case
 */
class JoueursTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\JoueursTable
     */
    public $Joueurs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
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
        $config = TableRegistry::getTableLocator()->exists('Joueurs') ? [] : ['className' => JoueursTable::class];
        $this->Joueurs = TableRegistry::getTableLocator()->get('Joueurs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Joueurs);

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
