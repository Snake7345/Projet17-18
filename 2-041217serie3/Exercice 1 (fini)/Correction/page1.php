<!DOCTYPE html>
<html>
<?php
$soustitre = "Page d'accueil";
require "head.php" ;
?>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="Page1.php">Mon Portfolio</a>
			</div>
			<ul class="nav navbar-nav">
				<li class="active"><a href="Page1.php">Home</a></li>
				<li><a href="Page2.php">Me contacter</a></li>
                <li><a href="page3.php">Resultat</a></li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<header id="header" class="col-lg-10 offset-3">
				<h1>Portfolio:</h1>
				<p>Exemples de portfolios</p>
			</header>	
		</div>
	</div>
	<div class="container">
		<div class="row">
			<section class="col-lg-10">
				<div class="row">
					<article class="col-sm-4">
						<img class="img-responsive" src="https://startbootstrap.com/assets/img/templates/creative.jpg" alt="">
						<h2>Creative</h2>
						<p>Theme créatif One Page</p>
						
					</article>
					<article class="col-sm-4">
						<img class="img-responsive" src="https://startbootstrap.com/assets/img/templates/agency.jpg" alt="">
						<h2>Agency</h2>
						<p>Thème professionel</p>
					</article>
					<article class="col-sm-4">
						<img class="img-responsive" src="https://startbootstrap.com/assets/img/templates/freelancer.jpg" alt="">
						<h2>Freelancer</h2>
						<p>Thème freelancer</p>
					</article>
					<article class="col-sm-4">
						<img class="img-responsive" src="https://startbootstrap.com/assets/img/templates/grayscale.jpg" alt="">
						<h2>Grayscale</h2>
						<p>Thème multifonctions</p>
					</article>
					
					
				</div>
			</section>
			<aside class="col-lg-2">
				<p>Contenu publicitaire</p>
			</aside>
		</div>
	</div>
</body>
</html>