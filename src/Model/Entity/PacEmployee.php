<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PacEmployee Entity.
 *
 * @property int $id
 * @property string $emp_firstname
 * @property string $emp_lastname
 * @property string $emp_email
 * @property int $emp_role_id
 * @property \App\Model\Entity\PacEmpRole $pac_emp_role
 * @property string $emp_status
 * @property string $emp_username
 * @property string $emp_password
 */
class PacEmployee extends Entity
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
        '*' => true,
        'id' => false,
    ];
}
