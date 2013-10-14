<?php
App::uses('AppModel', 'Model');

class FifaGame extends AppModel {

    public $name = 'FifaGame';
    public $order ='FifaGame.created DESC';
    
    public $belongsTo = array(
        'Player1' => array(
            'className'    => 'User',
            'foreignKey'   => 'player_1',
        ),
        'Player2' => array(
            'className'    => 'User',
            'foreignKey'   => 'player_2',
        ),
    );
}