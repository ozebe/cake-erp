<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeUnidadeMedida Model
 *
 * @method \App\Model\Entity\GeUnidadeMedida get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeUnidadeMedida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeUnidadeMedida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeUnidadeMedida|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeUnidadeMedida saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeUnidadeMedida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeUnidadeMedida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeUnidadeMedida findOrCreate($search, callable $callback = null, $options = [])
 */
class GeUnidadeMedidaTable extends Table
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

        $this->setTable('ge_unidade_medida');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('GeProduto', [
        ])->setForeignKey('id_unid_medida');

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
            ->notEmptyString('descricao')
            ->add('descricao', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'Já existe um cadastro com essa descrição!']);


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
        $rules->add($rules->isUnique(['descricao']));

        return $rules;
    }
}
