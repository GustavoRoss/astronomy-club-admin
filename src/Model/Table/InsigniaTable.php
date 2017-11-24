<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Insignia Model
 *
 * @method \App\Model\Entity\Insignium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Insignium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Insignium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Insignium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Insignium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Insignium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Insignium findOrCreate($search, callable $callback = null, $options = [])
 */
class InsigniaTable extends Table
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

        $this->setTable('insignia');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('nome');
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
            ->scalar('nome')
            ->allowEmpty('nome', 'create');

        $validator
            ->allowEmpty('qtdmax');

        $validator
            ->allowEmpty('qtdmin');

        return $validator;
    }
}
