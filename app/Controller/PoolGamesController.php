<?php
class PoolGamesController extends AppController {

  var $components = array('RequestHandler');
  var $helpers = array('Text');
  var $scaffold;

  function beforeRender() {
    parent::beforeRender();
  }

  function beforeFilter() {
    parent::beforeFilter();
  }

  public function index($view='') {
  
    if ($this->RequestHandler->isRss() ) {
        $pool_games = $this->PoolGame->find(
            'all',
            array('limit' => 20, 'order' => 'PoolGame.created DESC')
        );
        return $this->set(compact('pool_games'));
    }

    $this->set('view',$view);

    $conditions = array();
    if($view=='month') {
      $conditions[] = "DATE_FORMAT(PoolGame.created, '%M %Y') = DATE_FORMAT(CURDATE(), '%M %Y')";
    }

    $rankings = $this->PoolGame->find('all', array(
        'fields' => array(
          'Winner.first_name',
          'Winner.team_id',
          'COUNT(winner) wins',
          '(SELECT COUNT(*) FROM pool_games WHERE (player_1 = Winner.id OR player_2 = Winner.id)'
          . ( (count($conditions)>0) ? ' AND ' . $conditions[0] . ' ' : '' ) .
          ') total_played',
          '( COUNT(winner) / (SELECT COUNT(*) FROM pool_games WHERE (player_1 = Winner.id OR player_2 = Winner.id)'
          . ( (count($conditions)>0) ? ' AND ' . $conditions[0] . ' ' : '' ) .
          ')) win_ratio'
        ),
		'conditions' => $conditions,
    'group' => array(
          'winner',
        ),
        'order' => array(
          'win_ratio DESC',
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

  public function form($id='') {

    if(isset($this->data['PoolGame'])) {
//      var_dump($this->data);
      $data = $this->data;
      $data['PoolGame']['winner'] = $data['PoolGame'][('player_' . $data['PoolGame']['winner'])];
//      echo 'Winner is ' . $data['PoolGame']['winner'];
      $this->PoolGame->save($data);
      $this->redirect( array('action'=>'view',$this->PoolGame->id) );
    }

    if($id!='') {
      $poolGame = $this->PoolGame->findById($id);
      $this->set('poolGame', $poolGame);
//      var_dump($poolGame);
    }
    $this->set('players', $this->PoolGame->Player1->find('list'));
    $this->set('players_extra', $this->PoolGame->Player1->find('all',array(
          'fields'=>array('id','first_name','avatar')
          ,'conditions'=>array('disabled IS NULL')
        )));
  }

  public function view($id='') {

    if($id!='') {
      $poolGame = $this->PoolGame->findById($id);
      $this->set('poolGame', $poolGame);
    }

  }

}