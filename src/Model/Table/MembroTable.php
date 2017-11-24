<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Membro Model
 *
 * @method \App\Model\Entity\Membro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Membro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Membro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Membro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Membro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Membro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Membro findOrCreate($search, callable $callback = null, $options = [])
 */
class MembroTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('membro');
        $this->setDisplayField('matricula');
        $this->setPrimaryKey('matricula');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->scalar('matricula')
            ->allowEmpty('matricula', 'create');

        $validator
            ->scalar('cep')
            ->allowEmpty('cep');

        $validator
            ->scalar('cidade_uf')
            ->allowEmpty('cidade_uf');

        $validator
            ->scalar('datanasc')
            ->allowEmpty('datanasc');

        $validator
            ->scalar('descricao')
            ->allowEmpty('descricao');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('emailresp1')
            ->allowEmpty('emailresp1');

        $validator
            ->scalar('emailresp2')
            ->allowEmpty('emailresp2');

        $validator
            ->scalar('endereco')
            ->allowEmpty('endereco');

        $validator
            ->scalar('funcao')
            ->allowEmpty('funcao');

        $validator
            ->scalar('insignia')
            ->allowEmpty('insignia');

        $validator
            ->scalar('nome')
            ->allowEmpty('nome');

        $validator
            ->scalar('nomeresp1')
            ->allowEmpty('nomeresp1');

        $validator
            ->scalar('nomeresp2')
            ->allowEmpty('nomeresp2');

        $validator
            ->scalar('telefone')
            ->allowEmpty('telefone');

        $validator
            ->scalar('teleresp1')
            ->allowEmpty('teleresp1');

        $validator
            ->scalar('teleresp2')
            ->allowEmpty('teleresp2');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
