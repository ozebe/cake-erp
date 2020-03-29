<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GaUsuario Model
 *
 * @method \App\Model\Entity\GaUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\GaUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GaUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GaUsuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GaUsuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GaUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GaUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GaUsuario findOrCreate($search, callable $callback = null, $options = [])
 */
class GaUsuarioTable extends Table
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

        $this->setTable('ga_usuario');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('GaNivelUsuario', [
            'dependent' => true,
            'cascadeCallbacks' => true,
        ])
            ->setForeignKey('id_usuario');

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
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmptyString('nome');

        $validator
            ->scalar('usuario')
            ->maxLength('usuario', 255)
            ->requirePresence('usuario', 'create')
            ->notEmptyString('usuario')
            ->add('usuario', 'unique', ['rule' => 'validateUnique', 'provider' => 'table', 'message' => 'Já existe um cadastro com o mesmo usuário!']);

        $validator
            ->scalar('senha')
            ->maxLength('senha', 255)
            ->requirePresence('senha', 'create')
            ->notEmptyString('senha');

        $validator
            ->boolean('bloqueado')
            ->requirePresence('bloqueado', 'create')
            ->notEmptyString('bloqueado');

        $validator
            ->boolean('ativo')
            ->requirePresence('ativo', 'create')
            ->notEmptyString('ativo');

        $validator
            ->integer('tentativas')
            ->allowEmptyString('tentativas');


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
        $rules->add($rules->isUnique(['usuario']));

        return $rules;
    }
}
