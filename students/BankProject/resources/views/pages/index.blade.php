@extends('pages.layout')

@section('content')

<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="banner_bg">
				<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>	
								<div class="wthree_banner_info_grid">
									<h3>Excepteur sint occaecat non proident sunt amet offi.</h3>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3>Lorem ipsum dolor sit consectetur aute elit amet adipiscing.</h3>
								</div>
							</li>
							<li>
								<div class="wthree_banner_info_grid">
									<h3>Ut enim ad minima veniam, quis nostrum exercit dolor.</h3>
								</div>
							</li>
						</ul>
					</div>
				</section>
						<!-- flexSlider -->
							<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
							<script defer src="js/jquery.flexslider.js"></script>
							<script type="text/javascript">
							$(window).load(function(){
							  $('.flexslider').flexslider({
								animation: "slide",
								start: function(slider){
								  $('body').removeClass('loading');
								}
							  });
							});
						  </script>
						<!-- //flexSlider -->
			</div>
		</div>
		<div class="w3l_banner_info">
			<div class="container">
				<div class="col-md-4 w3l_banner_info_left">
					<div class="col-xs-4 w3l_banner_info_left_grid">
						<div class="w3l_banner_info_left_grid1">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-8 w3l_banner_info_left_grid_left">
						<h3><a href="single.html">sunt culpa qui</a></h3>
						<p>Duis aute irure dolor in aperiam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l_banner_info_left">
					<div class="col-xs-4 w3l_banner_info_left_grid">
						<div class="w3l_banner_info_left_grid1">
							<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-8 w3l_banner_info_left_grid_left">
						<h3><a href="single.html">irure dolor aute</a></h3>
						<p>Duis aute irure dolor in aperiam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 w3l_banner_info_left">
					<div class="col-xs-4 w3l_banner_info_left_grid">
						<div class="w3l_banner_info_left_grid1">
							<span class="glyphicon glyphicon-bullhorn" aria-hidden="true"></span>
						</div>
					</div>
					<div class="col-xs-8 w3l_banner_info_left_grid_left">
						<h3><a href="single.html">occae cupidit</a></h3>
						<p>Duis aute irure dolor in aperiam.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="w3ls_banner_bottom_grids">
				<div class="col-md-6 w3ls_banner_bottom_grid_left">
					<h3>Welcome to j</h3>
					<p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, 
						consectetur, adipisci velit, sed quia non numquam eius modi tempora 
						incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim 
						ad minima veniam, quis nostrum exercitationem ullam corporis suscipit 
						laboriosam, nisi ut aliquid ex ea commodi consequatur.</p>
					<div class="more">
						<a href="single.html" class="button--aylen button--round-l button--text-thick">Learn More...</a>
					</div>
				</div>
				<div class="col-md-6 w3ls_banner_bottom_grid_right">
					<div class="view view-seventh">
					   <img src="images/1.jpg" alt=" " class="img-responsive" />
						<div class="mask">
							<h3>officiis debitis rerum</h3>
							<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque 
								nihil impedit quo minus id quod maxime placeat facere possimus, omnis 
								voluptas assumenda est, omnis dolor repellendus.</p>
						</div>
                    </div>
                </div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- about -->
	<div class="about">
		<div class="container">
			<div class="wthree_about_grids">
				<div class="col-md-6 wthree_about_grid">
					<img src="images/2.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 wthree_about_grid">
					<h2>consectetur adipiscing elit, sed do eiusmod tempor</h2>
					<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis 
						suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem 
						vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae 
						consequatur.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->
<!-- blog -->
	<div class="blog">
		<div class="container">
			<h3>Latest Form Blog</h3>
			<p class="qui">Voluptate velit esse quam nihil</p>
			<div class="agile_blog_grids">
				<div class="col-md-4 agile_blog_grid">
					<div class="agile_blog_grid1">
						<a href="single.html"><img src="images/3.jpg" alt=" " class="img-responsive" /></a>
						<div class="agile_blog_grid1_pos">
							<p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</p>
						</div>
					</div>
					<h4><a href="single.html">qui voluptate cumque nihil</a></h4>
					<p class="ut">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
						doloremque laudantium, totam rem aperiam.</p>
					<div class="more m1">
						<a href="single.html" class="button--aylen button--round-l button--text-thick">Learn More...</a>
					</div>
				</div>
				<div class="col-md-4 agile_blog_grid">
					<div class="agile_blog_grid2">
						<div class="flicker-example" data-block-text="true">
							<ul>
								<li data-background="images/5.jpg"></li>
								<li data-background="images/4.jpg"></li>
								<li data-background="images/3.jpg"></li>
							</ul>
						</div>
					</div>
					<h4><a href="single.html">sit voluptatem accusantium</a></h4>
					<p class="ut">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
						doloremque laudantium, totam rem aperiam.</p>
					<div class="more m1">
						<a href="single.html" class="button--aylen button--round-l button--text-thick">Learn More...</a>
					</div>
				</div>
				<div class="col-md-4 agile_blog_grid">
					<div class="video-img">
						<img src="images/4.jpg" alt=" " class="img-responsive" />
						<a class="agileits_play_icon popup-with-zoom-anim" href="#small-dialog">
							<span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
						</a>
					</div>
					<div id="small-dialog" class="mfp-hide">
						<iframe src="https://player.vimeo.com/video/86841887?color=ffffff"></iframe>
					</div>
							<!-- pop-up-box -->    
								<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
								<script>
									$(document).ready(function() {
									$('.popup-with-zoom-anim').magnificPopup({
										type: 'inline',
										fixedContentPos: false,
										fixedBgPos: true,
										overflowY: 'auto',
										closeBtnInside: true,
										preloader: false,
										midClick: true,
										removalDelay: 300,
										mainClass: 'my-mfp-zoom-in'
									});
																									
									});
								</script>
							<!--//pop-up-box -->
					<h4><a href="single.html">natus error sit voluptatem</a></h4>
					<p class="ut">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
						doloremque laudantium, totam rem aperiam.</p>
					<div class="more m1">
						<a href="single.html" class="button--aylen button--round-l button--text-thick">Learn More...</a>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //blog -->
<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<h3>Connect With Us</h3>
			<p class="qui">Voluptate velit esse quam nihil</p>
			<form action="#" method="post">
				<input type="email" name="Email" value="Enter your email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email address';}" required="">
				<input type="submit" value=" ">
			</form>
			<div class="agileits_social_icons_grids">
				<ul class="agileits_social_icons">
				  <li class="icon icon--facebook">
					<a href="#">
					  <span class="icon__name">Facebook</span>
					</a>
				  </li>
				  <li class="icon icon--twitter">
					<a href="#">
					  <span class="icon__name">Twitter</span>
					</a>
				  </li>
				  <li class="icon icon--linkedin">
					<a href="#">
					  <span class="icon__name">Google+</span>
					</a>
				  </li>
				  <li class="icon icon--flickr">
					<a href="#">
					  <span class="icon__name">LinkedIn</span>
					</a>
				  </li>
				  <li class="icon icon--spotify">
					<a href="#">
					  <span class="icon__name">Vimeo</span>
					</a>
				  </li>
				</ul>
			</div>
		</div>
	</div>
<!-- //newsletter -->
@stop