<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeEstoque Model
 *
 * @method \App\Model\Entity\GeEstoque get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeEstoque newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeEstoque[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeEstoque|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeEstoque saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeEstoque patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeEstoque[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeEstoque findOrCreate($search, callable $callback = null, $options = [])
 */
class GeEstoqueTable extends Table
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

        $this->setTable('ge_estoque');
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmptyString('descricao');

        $validator
            ->boolean('ativo')
            ->requirePresence('ativo', 'create')
            ->notEmptyString('ativo');


        return $validator;
    }
}
