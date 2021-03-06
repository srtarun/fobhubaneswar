<?php require_once( 'couch/cms.php' ); ?>
<cms:template title=" <--> " />

<!DOCTYPE HTML>

<html>
	<head>
		<title>Foodies of Bhubaneswar</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<link href="E:\helios\assets\css\about.css" rel="stylesheet" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="no-sidebar">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header">

					<!-- Inner -->
						<div class="inner">
							<header>
								<h1><a href="index.html" id="logo">Recipes</a></h1>
							</header>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<ul>
								<li><a href="index.php"> Home </a> </li>
								<li>
									Contents
								
									<ul>
										<li><a href="contents_inbhubaneswar.php">Contents in Bhubaneswar</a></li>
										<li><a href="contents_aroundbhubaneswar.php">Contents around Bhubaneswar</a></li>

									</ul>
								</li>
								<li><a href="recipes.php">Recipes </a> </li>
								<li><a href="index.php#banner">Deals & Discounts</a> </li>
								<li><a href="events.php">Events </a> </li>
								<li><a href="index.php#banner1">About </a> </li>
								<li><a href="contact.html">Contact Us </a> </li>
								
							</ul>
						</nav>


				</div>
				<div class="container">
				<div class="wrapper style1">
				<article id="main" class="special">
				</article>

				<div class="row">
				<cms:pages masterpage='recipe_page.php'>


							<article class="4u 12u(mobile) special" style=" padding-top: 20px;">
								<a href="<cms:show k_page_link />" class="image featured"style=" margin-bottom: 25px;"><img src="<cms:show recipe_image/>" alt="" /></a>
								<header>
									<h3><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></h3>
								</header>
								<p style="text-align: center">
									<cms:show recipe_summary />
								</p>
							</article>
							</cms:pages>
							
						</div>

						</div>
						</div>
			</div>

			<!-- about -->		
		<section  id="banner1" >
    		<div class="container">
             	<div class="row text-center pad-row" >
             		<div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 ">
                	<i class="fa fa-quote-left fa-3x"></i>
					<h2> About us </h2>
					<cms:pages masterpage='index.php'>
               			<p id="about_text"> <br>
			   					<cms:show about_us />
                            </p>
                    </cms:pages>
                	</div>
                </div>
            </div>   
           
       </section>

			<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.onvisible.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
<?php COUCH::invoke(); ?>