<?php
App::uses('AppModel', 'Model');

class PoolGame extends AppModel {

    public $name = 'PoolGame';
    public $order ='PoolGame.created DESC';
    
    public $belongsTo = array(
        'Player1' => array(
            'className'    => 'User',
            'foreignKey'   => 'player_1',
        ),
        'Player2' => array(
            'className'    => 'User',
            'foreignKey'   => 'player_2',
        ),
        'Winner' => array(
            'className'    => 'User',
            'foreignKey'   => 'winner',
        ),
    );
}