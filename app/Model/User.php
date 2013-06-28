<?php
App::uses('AppModel', 'Model');

class User extends AppModel {
    public $name = 'User';
    public $displayField = 'first_name';
    public $order ='first_name ASC';
     
    public $hasMany = array(
        'PoolGamesWon' => array(
            'className'    => 'PoolGame',
            'foreignKey' => 'winner',
        ),
    );
}