<?php 
	require "core.php";
	echo 'index.php';
	$Tabletest=Model::load("tabletest");
	$Tabletest->read();
	require '../vue/index.php'
?>
