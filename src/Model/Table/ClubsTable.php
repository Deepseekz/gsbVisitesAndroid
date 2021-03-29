<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clubs Model
 *
 * @property \App\Model\Table\RencontresTable&\Cake\ORM\Association\HasMany $Rencontres
 *
 * @method \App\Model\Entity\Club get($primaryKey, $options = [])
 * @method \App\Model\Entity\Club newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Club[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Club|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Club saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Club patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Club[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Club findOrCreate($search, callable $callback = null, $options = [])
 */
class ClubsTable extends Table
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

        $this->setTable('clubs');
        $this->setDisplayField('libelle');
        $this->setPrimaryKey('id');

        $this->hasMany('Rencontres', [
            'foreignKey' => 'club_id'
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
            ->scalar('libelle')
            ->maxLength('libelle', 50)
            ->allowEmptyString('libelle');

        $validator
            ->scalar('adresse')
            ->maxLength('adresse', 50)
            ->allowEmptyString('adresse');

        return $validator;
    }
}
