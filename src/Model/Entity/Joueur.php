<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Joueur Entity
 *
 * @property int $id
 * @property string|null $nom
 * @property string|null $prenom
 * @property string|null $licence
 *
 * @property \App\Model\Entity\Rencontre[] $rencontres
 */
class Joueur extends Entity
{
    protected function _getLabel() {
        return "{$this->prenom} - {$this->nom} - {$this->licence}";
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
        'nom' => true,
        'prenom' => true,
        'licence' => true,
        'rencontres' => true
    ];
    
    
}
