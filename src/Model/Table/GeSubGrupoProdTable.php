<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeSubGrupoProd Model
 *
 * @method \App\Model\Entity\GeSubGrupoProd get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeSubGrupoProd newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeSubGrupoProd[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeSubGrupoProd|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeSubGrupoProd saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeSubGrupoProd patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeSubGrupoProd[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeSubGrupoProd findOrCreate($search, callable $callback = null, $options = [])
 */
class GeSubGrupoProdTable extends Table
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

        $this->setTable('ge_sub_grupo_prod');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('GeGrupoProd')
            ->setForeignKey('id_ge_grupo_prod');

        $this->hasMany('GeProduto')->setForeignKey('id_ge_sub_grupo_prod');

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
            ->integer('id_ge_grupo_prod')
            ->requirePresence('id_ge_grupo_prod', 'create')
            ->notEmptyString('id_ge_grupo_prod');

        $validator
            ->scalar('codigo')
            ->maxLength('codigo', 255)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo')
            ->add('codigo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'Já existe um cadastro com esse código!']);

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
