<?php
class DartGamesController extends AppController {

	var $scaffold;
	
	function beforeRender() {
    parent::beforeRender();
  }

	function beforeFilter() {
    parent::beforeFilter();
  }

	public function index() {

		$conditions = array();

		$rankings = $this->DartGame->find('all', array(
		'fields' => array(
			'Winner.first_name',
			'Winner.team_id',
			'COUNT(winner) wins',
			'(SELECT COUNT(*) FROM dart_games WHERE player_1 = Winner.id OR player_2 = Winner.id) total_played',
			'(COUNT(winner)/(SELECT COUNT(*) FROM dart_games WHERE player_1 = Winner.id OR player_2 = Winner.id)) win_ratio'
		),
/*
		'where' => array(
		  'created > CURDATE()-14',
		),

*/		'group' => array(
			'winner',
		),
		'order' => array(
			'win_ratio DESC',
		),
		));

		$this->set('rankings', $rankings);

		$this->set('dartGames', $this->DartGame->find('all', array(
			'conditions'=>array(),
			'limit' => 10,
			'order' => array(
				'DartGame.created DESC',
			),
		)));

	}


  public function form($id='') {

    if(isset($this->data['DartGame'])) {
//      var_dump($this->data);
      $data = $this->data;
      $data['DartGame']['winner'] = $data['DartGame'][('player_' . $data['DartGame']['winner'])];
//      echo 'Winner is ' . $data['DartGame']['winner'];
      $this->DartGame->save($data);
      $this->redirect( array('action'=>'view',$this->DartGame->id) );
    }

    if($id!='') {
      $DartGame = $this->DartGame->findById($id);
      $this->set('DartGame', $DartGame);
//      var_dump($DartGame);
    }
    $this->set('players', $this->DartGame->Player1->find('list'));
    $this->set('players_extra', $this->DartGame->Player1->find('all',array(
          'fields'=>array('id','first_name','avatar')
          ,'conditions'=>array('disabled IS NULL')
        )));
  }

}