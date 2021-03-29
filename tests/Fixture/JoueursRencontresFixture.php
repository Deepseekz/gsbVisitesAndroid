<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * JoueursRencontresFixture
 */
class JoueursRencontresFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'joueur_id' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'rencontre_id' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_indexes' => [
            'IX_joueurs_rencontres' => ['type' => 'index', 'columns' => ['joueur_id', 'rencontre_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_joueurs_rencontres_joueurs' => ['type' => 'foreign', 'columns' => ['joueur_id'], 'references' => ['joueurs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_joueurs_rencontres_rencontres' => ['type' => 'foreign', 'columns' => ['rencontre_id'], 'references' => ['rencontres', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'joueur_id' => 1,
                'rencontre_id' => 1
            ],
        ];
        parent::init();
    }
}
