<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipes Model
 *
 * @property \App\Model\Table\RencontresTable&\Cake\ORM\Association\HasMany $Rencontres
 *
 * @method \App\Model\Entity\Equipe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equipe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equipe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipe|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipe saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equipe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipe findOrCreate($search, callable $callback = null, $options = [])
 */
class EquipesTable extends Table
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

        $this->setTable('equipes');
        $this->setDisplayField('Label');
        $this->setPrimaryKey('id');

        $this->hasMany('Rencontres', [
            'foreignKey' => 'equipe_id'
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
            ->scalar('niveau')
            ->maxLength('niveau', 50)
            ->allowEmptyString('niveau');

        return $validator;
    }
}
