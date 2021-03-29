<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Equipe Entity
 *
 * @property int $id
 * @property string|null $niveau
 *
 * @property \App\Model\Entity\Rencontre[] $rencontres
 */
class Equipe extends Entity
{
    protected function _getLabel() {
        return "{$this->id} - {$this->niveau}";
    }
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'niveau' => true,
        'rencontres' => true
    ];
}
