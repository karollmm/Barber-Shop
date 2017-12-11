<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Barbershops Model
 *
 * @property \App\Model\Table\FilesTable|\Cake\ORM\Association\BelongsTo $Files
 *
 * @method \App\Model\Entity\Barbershop get($primaryKey, $options = [])
 * @method \App\Model\Entity\Barbershop newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Barbershop[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Barbershop|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Barbershop patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Barbershop[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Barbershop findOrCreate($search, callable $callback = null, $options = [])
 */
class BarbershopsTable extends Table
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

        $this->setTable('barbershops');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Files')
            ->setForeignKey('file_barbershops_id') // nome da coluna da chave estrangeira
            ->setProperty('file_barbershops_id'); //nome da propriedade que será criada no modelo
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('cnpj')
            ->requirePresence('cnpj', 'create')
            ->notEmpty('cnpj');

        $validator
            ->scalar('phone')
            ->requirePresence('phone', 'create')
            ->notEmpty('phone');

        $validator
            ->scalar('cep')
            ->requirePresence('cep', 'create')
            ->notEmpty('cep');

        $validator
            ->scalar('state')
            ->requirePresence('state', 'create')
            ->notEmpty('state');

        $validator
            ->scalar('city')
            ->requirePresence('city', 'create')
            ->notEmpty('city');

        $validator
            ->scalar('street')
            ->requirePresence('street', 'create')
            ->notEmpty('street');

        $validator
            ->integer('number')
            ->requirePresence('number', 'create')
            ->notEmpty('number');

        $validator
            ->scalar('complement')
            ->requirePresence('complement', 'create')
            ->notEmpty('complement');

        $validator
            ->scalar('file_barbershops_id')
            ->requirePresence('file_barbershops_id', 'create')
            ->allowEmpty('file_barbershops_id');

        return $validator;
    }
    
}
