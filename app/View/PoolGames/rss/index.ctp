<?php
$this->set('channelData', array(
    'title' => __("Latest Pool Games"),
    'link' => $this->Html->url('/', true),
    'description' => __("Most recent pool games at the Custard Factory."),
    'language' => 'en-gb'
));

foreach ($pool_games as $game) {
    $postTime = strtotime($game['PoolGame']['created']);

    $postLink = array(
        'controller' => 'pool_games',
        'action' => 'view',
        $game['PoolGame']['id']
    );

    // Remove & escape any HTML to make sure the feed content will validate.
    $bodyText = h(strip_tags($game['Winner']['first_name'] . ' won'));

    echo  $this->Rss->item(array(), array(
        'title' => $game['Player1']['first_name'] . ' v ' . $game['Player2']['first_name'],
        'link' => $postLink,
        'guid' => array('url' => $postLink, 'isPermaLink' => 'true'),
        'description' => $bodyText,
        'pubDate' => $game['PoolGame']['created']
    ));
}