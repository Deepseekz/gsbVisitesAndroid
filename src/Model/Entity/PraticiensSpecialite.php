<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PraticiensSpecialite Entity
 *
 * @property int $id
 * @property string|null $diplome
 * @property float|null $coefPres
 * @property int $practicien_id
 * @property int $specialite_id
 *
 * @property \App\Model\Entity\Praticien $praticien
 * @property \App\Model\Entity\Specialite $specialite
 */
class PraticiensSpecialite extends Entity
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
        'diplome' => true,
        'coefPres' => true,
        'practicien_id' => true,
        'specialite_id' => true,
        'praticien' => true,
        'specialite' => true
    ];
}
