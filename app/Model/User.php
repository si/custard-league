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
        'PoolGamesPlayed' => array(
            'className'    => 'PoolGame',
            'foreignKey' => 'player_1',
        ),
        'FifaGamesPlayed' => array(
            'className'    => 'FifaGame',
            'foreignKey' => 'player_1',
        ),
    );

    public $belongsTo = array(
        'Team' => array(
            'className'    => 'Team',
            'foreignKey' => 'team_id',
        ),
    );

}