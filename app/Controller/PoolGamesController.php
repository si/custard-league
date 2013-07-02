<?php
class PoolGamesController extends AppController {

	var $scaffold;

	
	    public function index() {
        //action logic goes here..
		 $conditions = array();
		$rankings = $this->PoolGame->find('all', array(
        //'conditions' => array('Article.status' => 'pending'),
		'fields' => array(
			'Winner.first_name',
			'COUNT(winner) wins',
		),
		'group' => array(
			'winner',
		),
		'order' => array(
			'wins DESC',
		),
    ));
    $this->set('rankings', $rankings);
	
		$this->set('poolGames', $this->PoolGame->find('all', array(
			'conditions'=>array(),
			'limit' => 10,
			'order' => array(
				'PoolGame.created DESC',
			),
		)));
	
    }
	
 }
?>
