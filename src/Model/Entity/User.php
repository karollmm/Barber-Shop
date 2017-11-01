<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $email
 * @property string $telefone
 * @property \Cake\I18n\FrozenTime $data_de_nascimento
 * @property string $idade
 * @property string $login
 * @property string $password
 *
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
        'nome' => true,
        'cpf' => true,
        'email' => true,
        'telefone' => true,
        'data_de_nascimento' => true,
        'idade' => true,
        'login' => true,
        'password' => true,
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
}
