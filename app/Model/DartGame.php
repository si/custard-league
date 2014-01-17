<?php
App::uses('AppModel', 'Model');

class DartGame extends AppModel {

    public $name = 'DartGame';
    public $order ='DartGame.created DESC';
    
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