<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Rencontre Entity
 *
 * @property int $id
 * @property string|null $lieu
 * @property \Cake\I18n\FrozenDate|null $dateRencontre
 * @property int|null $equipe_id
 * @property int|null $club_id
 *
 * @property \App\Model\Entity\Equipe $equipe
 * @property \App\Model\Entity\Club $club
 * @property \App\Model\Entity\Joueur[] $joueurs
 */
class Rencontre extends Entity
{
    protected function _getLabel() {
        return "{$this->lieu} - {$this->dateRencontre} - {$this->id}";
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
        'lieu' => true,
        'dateRencontre' => true,
        'equipe_id' => true,
        'club_id' => true,
        'equipe' => true,
        'club' => true,
        'joueurs' => true
    ];
}
