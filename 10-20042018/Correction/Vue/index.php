<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<div>
		<p>
		<?php
			echo 'vue index.php';

			foreach($Tabletest->data as $k){
				echo $k->NOM .', '. $k->PRENOM .'<br>';
			}
		?>
		</p>
	</div>

</body>
</html>