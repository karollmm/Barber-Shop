<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * User Entity
 *
 * @property int $id
 * @property string $name
 * @property string $cpf
 * @property string $email
 * @property string $phone
 * @property \Cake\I18n\FrozenDate $date_of_birth
 * @property string $username
 * @property string $password
 *
 * @property \App\Model\Entity\File $file_users_id
 * @property \App\Model\Entity\Schedule[] $schedules
 */
class User extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'cpf' => true,
        'email' => true,
        'phone' => true,
        'date_of_birth' => true,
        'username' => true,
        'password' => true,
        'file_users_id' => true,
        'schedules' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password){
       return (new DefaultPasswordHasher)->hash($password);
   }

}
