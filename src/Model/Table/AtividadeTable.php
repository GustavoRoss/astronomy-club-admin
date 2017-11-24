<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Atividade Model
 *
 * @method \App\Model\Entity\Atividade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Atividade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Atividade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Atividade|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Atividade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Atividade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Atividade findOrCreate($search, callable $callback = null, $options = [])
 */
class AtividadeTable extends Table
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

        $this->setTable('atividade');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('dataevento')
            ->allowEmpty('dataevento');

        $validator
            ->scalar('nome')
            ->allowEmpty('nome');

        return $validator;
    }
}
