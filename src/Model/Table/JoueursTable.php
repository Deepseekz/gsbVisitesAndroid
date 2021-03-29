<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Joueurs Model
 *
 * @property \App\Model\Table\RencontresTable&\Cake\ORM\Association\BelongsToMany $Rencontres
 *
 * @method \App\Model\Entity\Joueur get($primaryKey, $options = [])
 * @method \App\Model\Entity\Joueur newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Joueur[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Joueur|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Joueur saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Joueur patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Joueur[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Joueur findOrCreate($search, callable $callback = null, $options = [])
 */
class JoueursTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('joueurs');
        $this->setDisplayField('Label');
        $this->setPrimaryKey('id');

        $this->belongsToMany('Rencontres', [
            'foreignKey' => 'joueur_id',
            'targetForeignKey' => 'rencontre_id',
            'joinTable' => 'joueurs_rencontres'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nom')
            ->maxLength('nom', 50)
            ->allowEmptyString('nom');

        $validator
            ->scalar('prenom')
            ->maxLength('prenom', 50)
            ->allowEmptyString('prenom');

        $validator
            ->scalar('licence')
            ->maxLength('licence', 50)
            ->allowEmptyString('licence');

        return $validator;
    }
}
