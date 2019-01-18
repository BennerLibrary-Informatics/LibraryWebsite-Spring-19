<!DOCTYPE html>

<?php include_once $_SERVER['DOCUMENT_ROOT'].'/scripts/databaseConnection.php'; ?>
<?php include_once($_SERVER['DOCUMENT_ROOT']."/scripts/crumbs.php"); ?>

<html class="no-js" name="top_page" id="top_page">

<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TZLTHCS');</script>
	<!-- End Google Tag Manager -->
	<title><?php echo $page_title ?></title>
	<link rel="icon" type="image/png" href="/favicon1.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<!-- Meta -->
	<meta charset="UTF-8">
	<!-- <meta http-equiv="Content-type" content="text/html;charset=UTF-8" > -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=2.0" >
	<!-- <meta http-equiv="X-UA-Compatible" content="IE=8" > -->

	<!-- CSS -->
	<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic|PT+Serif+Caption' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/print.css">
	<?php echo $css ?>


	<!-- js -->
	<script type="text/javascript" src="/js/libraries/modernizr.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
  <script src='https://www.google.com/recaptcha/api.js'></script>
	<?php echo $js ?>
	<script>
		Modernizr.load([ //load some of our javascript only when needed.
			//Pollyfills
			{
				test: Modernizr.mq('only all'),
				nope: '/js/pollyfills/respond.js'
			},
			{
				test: window.matchMedia,
				nope: '/js/pollyfills/match-media.js'
			},
			{
				test: Modernizr.svg,
				yep: '/js/svg.js'
			},
			{
				load: '/js/libraries/enquire.js',
				complete: function() {
					registerMedia();
				}
			}
		]);
	</script>
	<script type='text/javascript'>
	    function test()
	    {
	       document.getElementById('refer').value=document.referrer;
	    }
		function menuForward(frm, nav)
		{
            url = frm.nav.options[frm.nav.selectedIndex].value;//'http://library.olivet.edu/';
	        //window.open(url,'_blank')     //Open the target url in a new window.
	        window.location.href = url;     //Open the target url in the current window.
		}
		function copyToClipboard(str)
		{
			const element = document.createElement('textarea');
			element.value = str;
			document.body.appendChild(element);
			element.select();
			document.execCommand('copy');
			document.body.removeChild(element);
		}
	</script>


</head>

<body onload="test()" class="<?php echo $body_class ?>" id="<?php echo $body_id ?>">
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TZLTHCS"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<div id="outer-container">
		<div id="main-nav">
			<ul>
				<li class="open">
	            	<a href="/about/index.php" class="touch">About</a>
	            	<ul>
		                <?php
		                    $path = $_SERVER['DOCUMENT_ROOT'];
		                    $path .= "/scripts/top-nav_drop-page/about.php";
		                    include($path);
		                ?>
	            	</ul>
	            </li>
	            <li>
					<a href="/contact/index.php" class="touch">Contact</a>
	            	<ul>
		                <?php
		                    $path = $_SERVER['DOCUMENT_ROOT'];
		                    $path .= "/scripts/top-nav_drop-page/contact.php";
		                    include($path);
		                ?>
	            	</ul>
				</li>
	            <li>
	            	<a href="/departments/index.php" class="touch">Departments</a>
					<ul>
		                <?php
		                    $path = $_SERVER['DOCUMENT_ROOT'];
		                    $path .= "/scripts/top-nav_drop-page/department.php";
		                    include($path);
		                ?>
					</ul>
	           	</li>
	            <li class="last">
	            	<a href="/campus-links/index.php">Campus Links</a>
	            	<ul>
		                <?php
		                    $path = $_SERVER['DOCUMENT_ROOT'];
		                    $path .= "/scripts/top-nav_drop-page/campus-links.php";
		                    include($path);
		                ?>
	            	</ul>
	            </li>
			</ul>
		<!-- end #main-nav --></div>

		<div id="inner-container">
			<div id="header">
				<a href="/index.php">
					<img class="svg" src="/img/logo.png" alt="Logo. Links to home page">
					<h1>Benner Library</h1>
					<h2 class="no-phone">Olivet Nazarene University</h2>
				</a>
				<a href="#" id="show-main-nav" class="touch no-desktop no-js-hide" title="show navigation pane">
				</a>
			<!-- end #header --></div>

<!-- <form target="_blank" name="querybox" action="https://i-share.carli.illinois.edu/onu/cgi-bin/Pwebrecon.cgi" method="get"> <input type="hidden" name="DB" value="local" /> <input type="hidden" name="CNT" value="20" /> <input class="formelem" onfocus="this.value='';" size="21" maxlength="100" value="BLISweb Quick Search" name="Search_Arg" /> <select class="formelem" name="Search_Code" style="width: 11em;"> <option value="FT*">Keyword Search</option> <option value="TALL">Start of Title</option>
<option value="CMD">Boolean Search</option> <option value="SUBJ_">Subject Heading</option> <option value="NAME_">Author</option> <option value="CALL_">Call Number</option> </select> <input class="formelem" type="submit" value="Search" /> </form>
 -->			<div id="crumbs-search">
				<div id="search">
					<label for="s.q" style="display: none;">Search Library Resources</label>
					<form method="get" action="https://olivet.summon.serialssolutions.com/search" target="_blank">
						<input type="text" class="search-field" name="s.q" autocomplete="off" placeholder="Search Library Resources">
						<input class="hidden1" name="hidden" value="1" type="hidden">
						<input class="hidden2" name="hidden" value="1" type="hidden">
						<input class="hidden3" name="hidden" value="1" type="hidden">
						<input class="submit" type="submit">
					</form>
					<div id="more-search">
						<input type="radio" name="search-type" id="st1" value="Summon" checked><label for="st1">Summon (All-At-Once)</label><br>
						<input type="radio" name="search-type" id="st2" value="Catalog"><label for="st2">Library Catalog</label><br>
						<input type="radio" name="search-type" id="st3" value="Site"><label for="st3">Library Site</label><br>
						<input type="radio" name="search-type" id="st4" value="Classic"><label for="st4">Classic Catalog</label><!--  <select class="formelem" name="Search_Code" style="width: 11em;"> <option value="FT*">Keyword Search</option> <option value="TALL">Start of Title</option><option value="CMD">Boolean Search</option> <option value="SUBJ_">Subject Heading</option> <option value="NAME_">Author</option> <option value="CALL_">Call Number</option> </select> -->
					</div>
				<!-- end #search--></div>

				<ul id="crumbs" class="no-phone">
					<?php
						if (!isset($home_only_crumb)) {
							$home_only_crumb = "";
						}
						if ($home_only_crumb=="home-only") {
							echo "<li><a href='/'>Home</a></li>";
							$home_only_crumb = "";
						} else {
							build_crumbs();
						} ?>
				</ul>
				<div class="cf"> </div>
			<!-- end #crumbs-search--></div>

			<div id="mid" class="cf">
				<?php
				   $path = $_SERVER['DOCUMENT_ROOT'];
				   $path .= "/scripts/sidebar.php";
				   include_once($path);
				?>
				<div id="content">
