<?php
App::uses('AppModel', 'Model');

class Team extends AppModel {
    public $name = 'Team';
    public $order ='name ASC';
     
    public $hasMany = array(
        'User' => array(
            'className'    => 'User',
            'foreignKey' => 'team_id',
        ),
    );
}