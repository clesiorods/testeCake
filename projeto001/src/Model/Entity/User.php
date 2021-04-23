<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity 
{
    protected $_accessible = [
        'nome' => true,
        'email' => true,
        'created' => true,
        'modified' => true
    ];
}

?>