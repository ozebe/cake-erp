<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GaNivelAcesso Model
 *
 * @method \App\Model\Entity\GaNivelAcesso get($primaryKey, $options = [])
 * @method \App\Model\Entity\GaNivelAcesso newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GaNivelAcesso[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GaNivelAcesso|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GaNivelAcesso saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GaNivelAcesso patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GaNivelAcesso[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GaNivelAcesso findOrCreate($search, callable $callback = null, $options = [])
 */
class GaNivelAcessoTable extends Table
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

        $this->setTable('ga_nivel_acesso');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('sigla')
            ->maxLength('sigla', 3)
            ->requirePresence('sigla', 'create')
            ->notEmptyString('sigla')
            ->add('sigla', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

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
        $rules->add($rules->isUnique(['sigla']));

        return $rules;
    }
}
