<!DOCTYPE html>
<html>

<?php
$soustitre = "Me trouver";
require "head.php" ;
?>
<body>
	<nav class="navbar navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="Page1.php">Mon Portfolio</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="Page1.php">Home</a></li>
				<li class="active"><a href="Page2.php">Me contacter</a></li>
                <li><a href="Page3.php">Resultat</a></li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<header id="header" class="col-lg-10 offset-3">
				<h1>Me trouver</h1>
			</header>	
		</div>
	</div>
	<div class="container">
		<div class="row">
			<section class="col-lg-10">
				<div class="row">
					<article class="col-lg-8">
						
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2542.0927628423865!2d4.4572167159460605!3d50.420743297385734!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c2261bd787a80f%3A0x68cd1e16a7f40621!2sColl%C3%A8ge+Technique+des+Aum%C3%B4niers+du+Travail!5e0!3m2!1sfr!2sbe!4v1510522584240" width="600" height="450"   allowfullscreen></iframe>
						
					</article>
					<article class="col-sm-4">
						<h2>Adresse</h2>
						<img class="img-responsive" src="http://www.shantee.net/wp-content/uploads/2016/06/google-maps.jpg" alt="">
						<p>Collège Technique "Aumôniers du Travail" <br>
							Enseignement de Promotion Sociale <br>
							Grand rue 185 <br>
							6000 Charleroi
						</p>
					</article>
					<article class="col-sm-4">
						<h2>Me contacter</h2>
						<img class="img-responsive" src="images/logo-atc.png" alt="">
						<p class="glyphicon glyphicon-earphone">071/285.905</p>
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