<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RhAreaProfissao Model
 *
 * @method \App\Model\Entity\RhAreaProfissao get($primaryKey, $options = [])
 * @method \App\Model\Entity\RhAreaProfissao newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RhAreaProfissao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RhAreaProfissao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RhAreaProfissao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RhAreaProfissao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RhAreaProfissao[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RhAreaProfissao findOrCreate($search, callable $callback = null, $options = [])
 */
class RhAreaProfissaoTable extends Table
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

        $this->setTable('rh_area_profissao');
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
            ->notEmptyString('descricao')
            ->add('descricao', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'Já existe um cadastro com essa descrição!']);



        return $validator;
    }
}
