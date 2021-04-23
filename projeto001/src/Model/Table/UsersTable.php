<?php

// src/Model/Table/UsersTable.php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('users');

        //$this->setDisplayField('id');
        //$this->setPrimaryKey('id');
        
        $this->addBehavior('Timestamp');
    }
    public function validationDefault(Validator $validator): Validator  
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator  
            ->scalar('nome')
            ->maxLength('nome', 200)
            //->requirePresence('nome', 'create')
            ->notEmpty('nome', 'Este campo é obrigatório');

            $validator  
            ->scalar('email')
            ->maxLength('email', 200)
            //->requirePresence('email', 'create')
            ->notEmpty('email', 'Este campo é obrigatório');

        return $validator;
    }
}
