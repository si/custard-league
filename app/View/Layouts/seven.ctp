<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="no-js ie9" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en" itemscope itemtype="http://schema.org/Product"> <!--<![endif]-->
<head>
	<meta charset="utf-8">

	<!-- Use the .htaccess and remove these lines to avoid edge case issues.
			 More info: h5bp.com/b/378 -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php echo $title_for_layout; ?> - Custard League</title>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="humans.txt">

	<link rel="shortcut icon" href="favicon.png" type="image/x-icon" />

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id" content="" />
	<meta property="og:image" content="" />
	<meta property="og:description" content=""/>
	<meta property="og:title" content=""/>

	<!-- Google+ Metadata /-->
	<meta itemprop="name" content="">
	<meta itemprop="description" content="">
	<meta itemprop="image" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

	<!-- We highly recommend you use SASS and write your custom styles in sass/_custom.scss.
			 However, there is a blank style.css in the css directory should you prefer -->
  <link href="http://fonts.googleapis.com/css?family=Bangers|Open+Sans:800|Gentium+Book+Basic:400,400italic,700" rel="stylesheet">
	<link rel="stylesheet" href="/css/seven.css" >

	<script src="/js/libs/modernizr-2.6.2.min.js"></script>
</head>

<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
<body>

<div class="container">

    <header>
        <a href="/" class="logo">
            Custard League 
            <small class="version">0.2</small>
        </a>

        <nav>
        <ul class="menu">
            <li class="home"><a href="/">Home</a></li>
            <li class="pool">
                <a href="/pool_games/">Pool League</a>
                <ul>
                    <li><a href="/pool_games/">Dashboard</a></li>
                    <li><a href="/pool_games/add">New Game</a></li>
                    <li><a href="/pool_rules/">Rules</a></li>
                </ul>
            </li>
            <li class="fifa">
                <a href="/fifa_games/">FIFA League</a>
                <ul>
                    <li><a href="/fifa_games/add">New Game</a></li>
                    <li><a href="/fifa_games/">Latest</a></li>
                    <li><a href="/fifa_games/league">League</a></li>
                </ul>
            </li>
            <li class="users"><a href="#">Users</a>
                <ul>
                    <li><a href="/users/">List</a></li>
                    <li><a href="/users/add">New User</a></li>
                </ul>
            </li>

        </ul>
        </nav>

    </header>

    <main class="content">
		<?php echo $this->fetch('content'); ?>
    </main>

    <footer>

        <p>Built in-house by ASOS Birmingham</p>
        
    </footer>

</div>

	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/js/libs/jquery-1.9.1.min.js"><\/script>')</script>

    <script type="text/javascript" src="/js/app.js"></script>

  </body>
</html>