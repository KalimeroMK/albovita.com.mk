<?php require 'header.php';?>

<div class="fullpage-site-with-menu">

	<!-- section start -->
	<!-- ================ -->
	<section id="section-1" class="section dark-translucent-bg" style="background-image: url(images/slika1.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="text-center">
						<h1 class="title large object-non-visible" data-animation-effect="zoomIn" data-effect-delay="300">SHITAKE - Lentinula edodes</span></h1>
						<div class="separator with-icon"><i class="fa fa-book bordered"></i></div>
						<p class="object-non-visible" data-animation-effect="fadeInDown" data-effect-delay="200"><?php echo constant("Sitake"); ?>
						</p>
						<a href="#secondPage" class="btn btn-lg moving smooth-scroll"><i class="icon-down-open-big"></i><i class="icon-down-open-big"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- section end -->

	<!-- section start -->
	<!-- ================ -->
	<section id="section-2" class="section dark-translucent-bg" style="background-image: url(images/slika3.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 pv-20">
					<h2 class="title text-center"><?php echo constant("ABOUT_PAGE");?></h2>
					<div class="separator with-icon"><i class="fa fa-book bordered"></i></div>
					<h3>Since 2013</h3>
					<p><?php echo constant("dooel");?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- section end -->

	<!-- section start -->
	<!-- ================ -->
	<section id="section-3" class="section dark-translucent-bg" style="background-image: url(images/slika2.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="title text-center"><?php echo constant("svojstva");?></h2>
					<div class="separator with-icon"><i class="fa fa-book bordered"></i></div>
				</div>
			</div>
			<!-- Tab panes -->
			<div class="tab-content clear-style">
				<div class="tab-pane active" id="pill-1">
					<div class="row">
						<div class="col-md-4">
							<div class="image-box text-center style-2 mb-20">

								<div class="body padding-horizontal-clear">
									<h4 class="title"><?php echo constant("antikancer");?></h4>
									<p class="small mb-10"><?php echo constant("svojstvo1");?></p>

								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="image-box text-center style-2 mb-20">

								<div class="body padding-horizontal-clear">
									<h4 class="title"><?php echo constant("ANTIVIRUS");?></h4>
									<p class="small mb-10"><?php echo constant('svojstvo3');?></p>
								</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="image-box text-center style-2 mb-20">

								<div class="body padding-horizontal-clear">
									<h4 class="title"><?php echo constant('ANTILIPID');?></h4>
									<p class="small mb-10"><?php echo constant('svojstvo2');?></p>

								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- pills end -->
		</div>
	</section>
	<!-- section end -->

	<section id="section-4" class="section dark-translucent-bg" style="background-image: url(images/slika4.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="testimonial">
						<h3 class="title"><?php echo constant('PLANS');?></h3>
						<span><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i></span>
						<div class="testimonial-body">
							<blockquote>
								<p><?php echo constant('PRODUCTION');?></p>
							</blockquote>
							
						</div>
					</div>
				</div>
				<div class="col-sm-6">
					<div class="testimonial">
						<h3 class="title"><?php echo constant('OFFER');?></h3>
						<span><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star text-default"></i><i class="fa fa-star-half-o text-default"></i></span>
						<div class="testimonial-body">
							<blockquote>
								<p><?php echo constant('PONUDA');?></p>
							</blockquote>
							
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<section id="section-5" class="section dark-translucent-bg" style="background-image: url(images/slika6.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="title text-center"><?php echo constant('TRPEZA');?></h2>
					<div class="separator with-icon"><i class="fa fa-book bordered"></i></div>
				</div>
			</div>
			<!-- Tab panes -->
			<div class="tab-content clear-style">
				<div class="tab-pane active" id="pill-1">
					<div class="row">
						<?php
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

						$results = mysqli_query($con, "SELECT * FROM tekst WHERE lang = '".$_SESSION['lang']."' ORDER BY id DESC LIMIT 1 ");
						while ($row = mysqli_fetch_array($results)) {
							$id = $row['id'];
							$description = $row['rte'];
							$title = $row['name'];
							$image = $row['slika_large'];
							$date = $row['date'];

							echo '
							<div class="col-md-12">
								<div class="image-box text-center style-2 mb-20">

									<div class="body padding-horizontal-clear">
										<h4 class="title">'.$title.'</h4>';
										$description = truncate($description, $length = '2500', $kopche, '', 'true');
										echo'<p class="small mb-10">'.$description.'</p>

									</div>
								</div>
							</div>';

						}
						?>
						
					</div>
				</div>
			</div>
			<!-- pills end -->
		</div>
	</section>
	<!-- section end -->

	<!-- section start -->
	<!-- ================ -->
	<section id="section-6" class="section dark-translucent-bg" style="background-image: url(images/slika5.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-8 text-center col-md-offset-2 pv-20">
					<h2 class="text-center"><?php echo constant('Contact Us');?></h2>
					<div class="separator with-icon"><i class="fa fa-phone bordered"></i></div>
					<p class="lead text-center"><?php echo constant('Contact USINFO');?></p>
					<ul class="list-inline mb-20 text-center">
						<li><i class="text-default fa fa-map-marker pr-5"></i>Prizrenska 8/2 Skopje</li>
						<li><a href="tel: 00 1234567890" class="link-dark"><i class="text-default fa fa-phone pl-10 pr-5"></i>+389 25113275</a></li>
						<li><a href="mailto:info@theproject.com" class="link-dark"><i class="text-default fa fa-envelope-o pl-10 pr-5"></i>info@albavita.com.mk</a></li>
					</ul>
					<div class="separator"></div>
					<ul class="social-links circle animated-effect-1 margin-clear text-center space-bottom">
						<li class="facebook"><a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></li>
						<li class="twitter"><a target="_blank" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a></li>
						<li class="googleplus"><a target="_blank" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a></li>
						<li class="linkedin"><a target="_blank" href="http://www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
						<li class="xing"><a target="_blank" href="http://www.xing.com"><i class="fa fa-xing"></i></a></li>
					</ul>
					<form action="http://maps.google.com/maps" method="get" target="_blank">
						<input type="hidden" name="daddr" value="Prizrenska 8/2 Skopje" />
						<input type="submit" class="btn btn-lg btn-default" value="Get directions" />
					</form>
				</div>
			</div>
		</div>
	</section>
	<!-- section end -->
</div>

<?php require 'footer.php';?>
