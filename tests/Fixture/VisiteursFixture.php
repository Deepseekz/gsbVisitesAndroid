<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * VisiteursFixture
 */
class VisiteursFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'matricule' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'username' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'password' => ['type' => 'string', 'length' => 256, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'nom' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'prenom' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'tel' => ['type' => 'string', 'length' => 12, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'mail' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'collate' => 'French_CI_AS', 'precision' => null, 'comment' => null, 'fixed' => null],
        'dateEmbauche' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'precision' => null, 'comment' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
                'matricule' => 'Lorem ipsum dolor sit amet',
                'username' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'nom' => 'Lorem ipsum dolor sit amet',
                'prenom' => 'Lorem ipsum dolor sit amet',
                'tel' => 'Lorem ipsu',
                'mail' => 'Lorem ipsum dolor sit amet',
                'dateEmbauche' => '2021-03-24'
            ],
        ];
        parent::init();
    }
}
