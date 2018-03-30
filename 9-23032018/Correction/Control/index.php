<?php

	require "core.php";
	require "../Vue/head.php";

	echo 'index.php';
	$Tabletest=Model::load("tabletest");
	$Tabletest->read();
	require '../vue/index.php';
	require '../vue/bas.php';
?>
