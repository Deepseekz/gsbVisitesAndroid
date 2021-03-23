<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Visiteur Entity
 *
 * @property int $id
 * @property string|null $matricule
 * @property string|null $username
 * @property string|null $passeword
 * @property string|null $nom
 * @property string|null $prenom
 * @property string|null $tel
 * @property string|null $mail
 * @property \Cake\I18n\FrozenDate|null $dateEmbauche
 *
 * @property \App\Model\Entity\Visite[] $visites
 */
class Visiteur extends Entity
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
        'matricule' => true,
        'username' => true,
        'passeword' => true,
        'nom' => true,
        'prenom' => true,
        'tel' => true,
        'mail' => true,
        'dateEmbauche' => true,
        'visites' => true
    ];
}