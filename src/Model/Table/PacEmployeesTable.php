<?php
namespace App\Model\Table;

use App\Model\Entity\PacEmployee;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PacEmployees Model
 *
 * @property \Cake\ORM\Association\BelongsTo $PacEmpRoles
 */
class PacEmployeesTable extends Table
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

        $this->table('pac_employees');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('PacEmpRoles', [
            'foreignKey' => 'emp_role_id',
            'joinType' => 'INNER'
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
            ->requirePresence('emp_firstname', 'create')
            ->notEmpty('emp_firstname');

        $validator
            ->requirePresence('emp_lastname', 'create')
            ->notEmpty('emp_lastname');

        $validator
            ->requirePresence('emp_email', 'create')
            ->notEmpty('emp_email');

        $validator
            ->requirePresence('emp_status', 'create')
            ->notEmpty('emp_status');

        $validator
            ->allowEmpty('emp_username');

        $validator
            ->allowEmpty('emp_password');

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
        $rules->add($rules->existsIn(['emp_role_id'], 'PacEmpRoles'));
        return $rules;
    }
}
