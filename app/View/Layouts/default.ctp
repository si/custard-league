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

	<title><?php echo $title_for_layout; ?> - ASOS</title>
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
	<link rel="stylesheet" href="/css/modern.css">
	<link href="/css/modern-responsive.css" rel="stylesheet">

	<!-- <link rel="stylesheet" href="css/style.css"> -->

	<script src="/js/libs/modernizr-2.6.2.min.js"></script>
</head>

<?php
echo $this->fetch('meta');
echo $this->fetch('css');
echo $this->fetch('script');
?>
<body class="metrouicss">


<div class="page">
<div class="nav-bar">
    <div class="nav-bar-inner padding10">
        <span class="pull-menu"></span>

        <a href="/"><span class="element brand">
            ASOS Hacks <small>0.1</small>
        </span></a>

        <div class="divider"></div>

        <ul class="menu">
            <li><a href="/">Home</a></li>
            <li data-role="dropdown">
                <a href="#">Pool League</a>
                <ul class="dropdown-menu">
                    <li><a href="/pool_games/">Dashboard</a></li>
                    <li><a href="/pool_games/add">New Game</a></li>
                    <li class="divider"></li>
                    <li><a href="/pool_rules/">Rules</a></li>
                </ul>
            </li>
            <li data-role="dropdown"><a href="#">Users</a>
                <ul class="dropdown-menu">
                    <li><a href="/users/">List</a></li>
                    <li><a href="/users/add">New User</a></li>
                </ul>
            </li>

            <li><a href="https://github.com/olton/Metro-UI-CSS">MetroUI</a></li>
        </ul>

    </div>
</div>
</div>

    <div class="page">
		<?php echo $this->fetch('content'); ?>
    </div>



	<!-- Grab Google CDN's jQuery, fall back to local if offline -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="/js/libs/jquery-1.9.1.min.js"><\/script>')</script>
    <script type="text/javascript" src="/js/dropdown.js"></script>
    <script type="text/javascript" src="/js/accordion.js"></script>
    <script type="text/javascript" src="/js/buttonset.js"></script>
    <script type="text/javascript" src="/js/carousel.js"></script>
    <script type="text/javascript" src="/js/input-control.js"></script>
    <script type="text/javascript" src="/js/pagecontrol.js"></script>
    <script type="text/javascript" src="/js/rating.js"></script>
    <script type="text/javascript" src="/js/slider.js"></script>
    <script type="text/javascript" src="/js/tile-slider.js"></script>
    <script type="text/javascript" src="/js/tile-drag.js"></script>
    <script type="text/javascript" src="/js/calendar.js"></script>

    <script type="text/javascript" src="/js/app.js"></script>



  <!-- Change UA-XXXXX-X to be your site's ID -->
  <!--<script>
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->

  </body>
</html>