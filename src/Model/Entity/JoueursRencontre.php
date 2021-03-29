<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * JoueursRencontre Entity
 *
 * @property int $id
 * @property int|null $joueur_id
 * @property int|null $rencontre_id
 *
 * @property \App\Model\Entity\Joueur $joueur
 * @property \App\Model\Entity\Rencontre $rencontre
 */
class JoueursRencontre extends Entity
{
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
        'joueur_id' => true,
        'rencontre_id' => true,
        'joueur' => true,
        'rencontre' => true
    ];
}
