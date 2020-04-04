<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * GeProduto Model
 *
 * @method \App\Model\Entity\GeProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\GeProduto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\GeProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\GeProduto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\GeProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\GeProduto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\GeProduto findOrCreate($search, callable $callback = null, $options = [])
 */
class GeProdutoTable extends Table
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

        $this->setTable('ge_produto');
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
            ->scalar('codigo')
            ->maxLength('codigo', 30)
            ->requirePresence('codigo', 'create')
            ->notEmptyString('codigo')
            ->add('codigo', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->allowEmptyString('descricao');

        $validator
            ->integer('id_unid_medida')
            ->requirePresence('id_unid_medida', 'create')
            ->notEmptyString('id_unid_medida');

        $validator
            ->integer('id_unid_massa')
            ->allowEmptyString('id_unid_massa');

        $validator
            ->integer('id_ge_sub_grupo_prod')
            ->requirePresence('id_ge_sub_grupo_prod', 'create')
            ->notEmptyString('id_ge_sub_grupo_prod');

        $validator
            ->integer('id_ge_estoque')
            ->allowEmptyString('id_ge_estoque');

        $validator
            ->scalar('cod_barras')
            ->maxLength('cod_barras', 255)
            ->allowEmptyString('cod_barras');

        $validator
            ->scalar('ncm')
            ->maxLength('ncm', 255)
            ->allowEmptyString('ncm');

        $validator
            ->boolean('ativo')
            ->requirePresence('ativo', 'create')
            ->notEmptyString('ativo');

        $validator
            ->decimal('peso_bruto')
            ->allowEmptyString('peso_bruto');

        $validator
            ->decimal('peso_liquido')
            ->allowEmptyString('peso_liquido');

        $validator
            ->integer('id_ge_lote')
            ->allowEmptyString('id_ge_lote');

        $validator
            ->decimal('valor_custo')
            ->allowEmptyString('valor_custo');

        $validator
            ->decimal('valor_venda')
            ->allowEmptyString('valor_venda');

        $validator
            ->decimal('min_estoque')
            ->requirePresence('min_estoque', 'create')
            ->notEmptyString('min_estoque');

        $validator
            ->decimal('max_estoque')
            ->allowEmptyString('max_estoque');

        $validator
            ->decimal('estoque_atual')
            ->allowEmptyString('estoque_atual');

        $validator
            ->scalar('cor')
            ->maxLength('cor', 100)
            ->allowEmptyString('cor');

        $validator
            ->scalar('material')
            ->maxLength('material', 100)
            ->allowEmptyString('material');

        $validator
            ->scalar('tamanho')
            ->maxLength('tamanho', 50)
            ->allowEmptyString('tamanho');

        $validator
            ->scalar('tensao')
            ->maxLength('tensao', 6)
            ->allowEmptyString('tensao');

        $validator
            ->dateTime('criado')
            ->requirePresence('criado', 'create')
            ->notEmptyDateTime('criado');

        $validator
            ->dateTime('editado')
            ->allowEmptyDateTime('editado');

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
