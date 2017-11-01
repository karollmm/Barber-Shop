<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Barbershop Entity
 *
 * @property int $id
 * @property string $name
 * @property string $cnpj
 * @property string $cpf
 * @property string $phone
 * @property string $cep
 * @property string $state
 * @property string $city
 * @property string $street
 * @property int $number
 * @property string $complement
 * @property int $service_id
 *
 * @property \App\Model\Entity\Service $service
 * @property \App\Model\Entity\Schedule[] $schedules
 */
class Barbershop extends Entity
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
        'cnpj' => true,
        'cpf' => true,
        'phone' => true,
        'cep' => true,
        'state' => true,
        'city' => true,
        'street' => true,
        'number' => true,
        'complement' => true,
        'service_id' => true,
        'service' => true,
        'schedules' => true
    ];
}
