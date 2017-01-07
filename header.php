<!doctype php>
<php lang="en">
<head>
<meta charset="utf-8">

<title>Cocktail Robot</title>

<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging whena phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<!-- LOAD THE LATEST VERSION OF JQUERY-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".nav-button").click(function () {
            $(".nav-button,.primary-nav").toggleClass("open");
            });    
        });
    </script>
<!--google font-->
<link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>


<!----- STYLE SHEETS ----->
<link href="css/reset.css" rel="stylesheet">
<!-- phone-default -->
<link href="css/phone-default.css" rel="stylesheet">
<!-- enhance-tablet -->
<link href="css/tablet.css" rel="stylesheet">
<!-- enhance-desktop -->
<link href="css/desktop.css" rel="stylesheet">
<!-- moble menu -->
<link href="css/mobilemenu.css" rel="stylesheet">



    <link rel="stylesheet" href="styles/main.css">

    <script defer src="scripts/jquery-3.1.0.min.js"></script>
    <script defer src="scripts/app.js"></script>

    <script>
        window.appConfig = {
            serverUrl: '127.0.0.1'
        }
    </script>
<!--[if lt IE 9]>
	<script src="http://php5shim.googlecode.com/svn/trunk/php5.js"></script>
	<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
<![endif]-->
     
</head>
<body>
<div id="thover" style="visibility: hidden"></div>	
<div id="headerWrapper">
	<header class="clearfix">

        <img src="images/logo.jpg" alt="logo"/>
    <hgroup>
    <h1 class="title">Cocktail Robot</h1>
    <h2></h2>
    </hgroup>
    </header>
</div> <!--end of headerWrapper-->

    
    <!-- page navigation links here -->
<div id="navWrapper">
    <nav>
    <ul class="primary-nav clearfix">

        <li><a href="index.php">Cocktails</a></li>
    	<li class="parent"><a href="#">Liquors</a>
            <ul>
                <li><a href="tequila.php">Tequila</a></li>
                <li><a href="gin.php">Gin</a></li>
                <li><a href="schnapps.php">Peach Schnapps</a></li>
                <li><a href="vodka.php">Vodka</a></li>
                <li><a href="whiterum.php">White Rum</a></li>
            </ul>
        </li>

    	<li><a href="custom.php">Customize</a></li>

    	<!--<li><a href="favorites.php">Favorites</a></li>-->

    </ul>
    <button class="nav-button">Toggle Navigation</button>
    </nav>
    </div> <!--end of navWrapper-->

