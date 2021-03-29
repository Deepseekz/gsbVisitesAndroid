<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * JoueursRencontres Model
 *
 * @property \App\Model\Table\JoueursTable&\Cake\ORM\Association\BelongsTo $Joueurs
 * @property \App\Model\Table\RencontresTable&\Cake\ORM\Association\BelongsTo $Rencontres
 *
 * @method \App\Model\Entity\JoueursRencontre get($primaryKey, $options = [])
 * @method \App\Model\Entity\JoueursRencontre newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\JoueursRencontre[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\JoueursRencontre|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JoueursRencontre saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\JoueursRencontre patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\JoueursRencontre[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\JoueursRencontre findOrCreate($search, callable $callback = null, $options = [])
 */
class JoueursRencontresTable extends Table
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

        $this->setTable('joueurs_rencontres');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Joueurs', [
            'foreignKey' => 'joueur_id'
        ]);
        $this->belongsTo('Rencontres', [
            'foreignKey' => 'rencontre_id'
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
        $rules->add($rules->existsIn(['joueur_id'], 'Joueurs'));
        $rules->add($rules->existsIn(['rencontre_id'], 'Rencontres'));

        return $rules;
    }
}
