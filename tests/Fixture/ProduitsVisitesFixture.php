<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProduitsVisitesFixture
 */
class ProduitsVisitesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 10, 'autoIncrement' => true, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null],
        'quantite' => ['type' => 'decimal', 'length' => 18, 'precision' => 0, 'null' => true, 'default' => null, 'comment' => null, 'unsigned' => null],
        'produit_id' => ['type' => 'integer', 'length' => 10, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        'visite_id' => ['type' => 'integer', 'length' => 10, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'unsigned' => null, 'autoIncrement' => null],
        '_indexes' => [
            'IX_Produits_Visites' => ['type' => 'index', 'columns' => ['produit_id', 'visite_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'FK_Produits_Visites_Produits' => ['type' => 'foreign', 'columns' => ['produit_id'], 'references' => ['produits', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'FK_Produits_Visites_Visites' => ['type' => 'foreign', 'columns' => ['visite_id'], 'references' => ['visites', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'quantite' => 1.5,
                'produit_id' => 1,
                'visite_id' => 1
            ],
        ];
        parent::init();
    }
}
