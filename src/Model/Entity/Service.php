<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property string $detail
 *
 * @property \App\Model\Entity\Barbershop[] $barbershops
 * @property \App\Model\Entity\Schedule[] $schedules
 */
class Service extends Entity
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
        'price' => true,
        'detail' => true,
        'barbershops' => true,
        'schedules' => true
    ];
}
