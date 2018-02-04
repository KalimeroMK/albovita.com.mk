<?php require 'top-cache.php';?>
<?php session_start();
require_once 'conf/conf.php';
require_once 'function.php';

$language = $_POST['lang'];
if ($language === "mk") {
	$_SESSION['lang'] = "mk";
	require_once 'language/mk.php';
} else if ($language === "en") {
	$_SESSION['lang'] = "en";
	require_once 'language/en.php';
}
if (isset($_SESSION['lang']) && $_SESSION['lang'] === "en") {
	$_SESSION['lang'] = "en";
	require_once 'language/en.php';
} else {
	$_SESSION['lang'] = "mk";
	require_once 'language/mk.php';
}
?>
<!DOCTYPE html>
<!--[if IE 9]> <html lang="mk" class="ie9"> <![endif]-->
<!--[if gt IE 9]> <html lang="mk" class="ie"> <![endif]-->
<!--[if !IE]><!-->
<html lang="mk">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title>Albovita | Friend of your health </title>
	<meta name="description" content="ALBO VITA DOOEL SKOPJE is a company that produces Shitake mushrooms in Macedonia">
	<meta name="author" content="Zoran Shefot Bogoevki">
	<meta name="keywords"  content="Shiitake, Mushroom shiitake, cordyceps, shiitake mushroom, dried shiitake mushrooms, growing shiitake mushrooms, shiitake mushroom growing, mushroom shiitake, shiitake mushroom extract, shiitake extract, auricularia" />
	<meta property="og:image" content="http://albovita.com.mk/images/slika1.jpg" />
	<meta property="fb:app_id" content="1831061740509386" />
	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="/images/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/images/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/images/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/images/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/images/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/images/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/images/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/images/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicon-16x16.png">
	<link rel="manifest" href="/images/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/images/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<!-- Web Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=PT+Serif' rel='stylesheet' type='text/css'>
	<!-- Bootstrap core CSS -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<!-- Font Awesome CSS -->
	<link href="fonts/font-awesome/css/font-awesome.css" rel="stylesheet">
	<!-- Fontello CSS -->
	<link href="fonts/fontello/css/fontello.css" rel="stylesheet">
	<!-- Plugins -->
	<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
	<link href="css/animations.css" rel="stylesheet">
	<link href="plugins/fullpage/jquery.fullpage.min.css" rel="stylesheet">
	<link href="plugins/owlcarousel2/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="plugins/owlcarousel2/assets/owl.theme.default.min.css" rel="stylesheet">
	<link href="plugins/hover/hover-min.css" rel="stylesheet">		
	<link href="css/style.css" rel="stylesheet" >
	<link href="css/typography-scheme-2.css" rel="stylesheet" >
	<link href="css/skins/gold.css" data-style="styles-no-cookie" rel="stylesheet">
	<link href="style-switcher/style-switcher.css" rel="stylesheet">
	<!-- Custom css --> 
	<link href="css/custom.css" rel="stylesheet">
</head>
<body class="no-trans front-page transparent-header gradient-background-header full-page">
	<!-- scrollToTop -->
	<!-- ================ -->
	<div class="scrollToTop circle"><i class="icon-up-open-big"></i></div>
	<!-- page wrapper start -->
	<!-- ================ -->
	<div class="page-wrapper">
		<!-- header-container start -->
		<div class="header-container">
			<!-- header start -->

			<header class="header  fixed fixed-before full-width dark clearfix">
				<!-- header-second start -->
				<!-- ================ -->
				<div class="header-second clearfix">
					<!-- main-navigation start -->
										<div class="main-navigation animated">
						<!-- navbar start -->
						<!-- ================ -->
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<!-- Toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<!-- header-first start -->
									<!-- ================ -->
									<div class="header-first clearfix">
										<!-- logo -->
										<div id="logo" class="logo">
											<a href="/"><img id="logo_img" src="images/logo.png" alt="The Project"></a>
										</div>
										<!-- name-and-slogan -->
										<div class="site-slogan hidden-xs">
										</div>

									</div>
									<!-- header-first end -->
								</div>
								<!-- Collect the nav links, forms, and other content for toggling -->
								<div class="collapse navbar-collapse" id="navbar-collapse-1">
									<ul id="fullpage-menu" class="nav navbar-nav navbar-right">
										<li data-menuanchor="firstPage"><a href="#firstPage"><?php echo constant("INTRO_PAGE"); ?></a></li>
										<li data-menuanchor="secondPage"><a href="#secondPage"><?php echo constant("ABOUT_PAGE"); ?></a></li>
										<li data-menuanchor="thirdPage"><a href="#thirdPage"><?php echo constant("Characteristics_PAGE"); ?></a></li>
										<li data-menuanchor="fourthPage"><a href="#fourthPage"><?php echo constant("PLANS_PAGE"); ?></a></li>
										<li data-menuanchor="secondPage"><a href="#fifthPage"><?php echo constant("RECEPES_PAGE"); ?></a></li>
										<li data-menuanchor="fifthPage"><a href="#sixPage"><?php echo constant("CONTACT_PAGE"); ?></a></li>
										<li><form action="" method="post" /><input type="hidden" value="en" name="lang" /><input type="image" src="/images/icons/enflag.png" alt="English" /></form></li>
										<li><form action="" method="post" /><input type="hidden" value="mk" name="lang" /><input type="image" src="/images/icons/mkflag.png" alt="Македонски" /></form></li>
									</ul>
								</div>
							</div>
						</nav><!-- navbar end -->
					</div><!-- main-navigation end -->
				</div><!-- header-second end -->
			</header><!-- header end -->
		</div><!-- header-container end -->