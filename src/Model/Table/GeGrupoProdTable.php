<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeGrupoProd Model
 *
 * @method \App\Model\Entity\GeGrupoProd get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeGrupoProd newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeGrupoProd[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeGrupoProd|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeGrupoProd saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeGrupoProd patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeGrupoProd[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeGrupoProd findOrCreate($search, callable $callback = null, $options = [])
 */
class GeGrupoProdTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('ge_grupo_prod');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'criado' => 'new',
                    'editado' => 'always',
                ]
            ]
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 255)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo')
            ->add('codigo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->isUnique(['codigo']));

        return $rules;
    }
}
