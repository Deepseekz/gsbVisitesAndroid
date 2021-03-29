<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RencontresFixture
 */
class RencontresFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'lieu' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'dateRencontre' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        'equipe_id' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'club_id' => ['type' => 'integer', 'length' => 10, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_rencontres_clubs' => ['type' => 'foreign', 'columns' => ['club_id'], 'references' => ['clubs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_rencontres_equipes' => ['type' => 'foreign', 'columns' => ['equipe_id'], 'references' => ['equipes', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'lieu' => 'Lorem ipsum dolor sit amet',
                'dateRencontre' => '2021-03-29',
                'equipe_id' => 1,
                'club_id' => 1
            ],
        ];
        parent::init();
    }
}
