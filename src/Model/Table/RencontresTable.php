<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Rencontres Model
 *
 * @property \App\Model\Table\EquipesTable&\Cake\ORM\Association\BelongsTo $Equipes
 * @property \App\Model\Table\ClubsTable&\Cake\ORM\Association\BelongsTo $Clubs
 * @property \App\Model\Table\JoueursTable&\Cake\ORM\Association\BelongsToMany $Joueurs
 *
 * @method \App\Model\Entity\Rencontre get($primaryKey, $options = [])
 * @method \App\Model\Entity\Rencontre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Rencontre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Rencontre|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rencontre saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Rencontre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Rencontre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Rencontre findOrCreate($search, callable $callback = null, $options = [])
 */
class RencontresTable extends Table
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

        $this->setTable('rencontres');
        $this->setDisplayField('Label');
        $this->setPrimaryKey('id');

        $this->belongsTo('Equipes', [
            'foreignKey' => 'equipe_id'
        ]);
        $this->belongsTo('Clubs', [
            'foreignKey' => 'club_id'
        ]);
        $this->belongsToMany('Joueurs', [
            'foreignKey' => 'rencontre_id',
            'targetForeignKey' => 'joueur_id',
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
            ->scalar('lieu')
            ->maxLength('lieu', 50)
            ->allowEmptyString('lieu');

        $validator
            ->date('dateRencontre')
            ->allowEmptyDate('dateRencontre');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['equipe_id'], 'Equipes'));
        $rules->add($rules->existsIn(['club_id'], 'Clubs'));

        return $rules;
    }
}
