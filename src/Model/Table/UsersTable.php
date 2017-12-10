<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\FilesTable|\Cake\ORM\Association\BelongsTo $Files
 * @property \App\Model\Table\SchedulesTable|\Cake\ORM\Association\HasMany $Schedules
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Files')
            ->setForeignKey('file_users_id') // nome da coluna da chave estrangeira
            ->setProperty('file_users_id'); //nome da propriedade que será criada no modelo

            $this->hasMany('Schedules', [
                'foreignKey' => 'user_id'
            ]);
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
        ->scalar('cpf')
        ->requirePresence('cpf', 'create')
        ->notEmpty('cpf');

        $validator
        ->email('email')
        ->requirePresence('email', 'create')
        ->notEmpty('email');

        $validator
        ->scalar('phone')
        ->requirePresence('phone', 'create')
        ->notEmpty('phone');

        $validator
        ->scalar('file_users_id')
        ->allowEmpty('file_users_id');

        $validator
        ->date('date_of_birth')
        ->requirePresence('date_of_birth', 'create')
        ->notEmpty('date_of_birth');

        $validator
        ->scalar('username')
        ->requirePresence('username', 'create')
        ->notEmpty('username');

        $validator
        ->scalar('password')
        ->requirePresence('password', 'create')
        ->notEmpty('password');

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
        $rules->add($rules->isUnique(['username']));
        return $rules;
    }
}
