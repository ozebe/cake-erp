<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GaNivelUsuario Model
 *
 * @method \App\Model\Entity\GaNivelUsuario get($primaryKey, $options = [])
 * @method \App\Model\Entity\GaNivelUsuario newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GaNivelUsuario[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GaNivelUsuario|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GaNivelUsuario saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GaNivelUsuario patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GaNivelUsuario[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GaNivelUsuario findOrCreate($search, callable $callback = null, $options = [])
 */
class GaNivelUsuarioTable extends Table
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

        $this->setTable('ga_nivel_usuario');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('GaUsuario')
            ->setForeignKey('id_usuario')
            ->setJoinType('INNER');

        $this->belongsTo('GaNivelAcesso')
            ->setForeignKey('id_nivel_acesso')
            ->setJoinType('INNER');
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
            ->integer('id_usuario')
            ->requirePresence('id_usuario', 'create')
            ->notEmptyString('id_usuario');

        $validator
            ->integer('id_nivel_acesso')
            ->requirePresence('id_nivel_acesso', 'create')
            ->notEmptyString('id_nivel_acesso');

        return $validator;
    }
}
