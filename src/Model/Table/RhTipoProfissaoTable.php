<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * RhTipoProfissao Model
 *
 * @property \App\Model\Table\RhAreaProfissaoTable&\Cake\ORM\Association\BelongsTo $RhAreaProfissao
 *
 * @method \App\Model\Entity\RhTipoProfissao get($primaryKey, $options = [])
 * @method \App\Model\Entity\RhTipoProfissao newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\RhTipoProfissao[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\RhTipoProfissao|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RhTipoProfissao saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\RhTipoProfissao patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\RhTipoProfissao[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\RhTipoProfissao findOrCreate($search, callable $callback = null, $options = [])
 */
class RhTipoProfissaoTable extends Table
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

        $this->setTable('rh_tipo_profissao');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('RhAreaProfissao')
            ->setForeignKey('rh_area_prof_id');

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
        $rules->add($rules->existsIn(['rh_area_prof_id'], 'RhAreaProfissao'));

        return $rules;
    }
}
