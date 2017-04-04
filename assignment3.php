<?php
	include 'ParentClass.php';
	include 'ChildClass.php';

	$cs01 = new ParentClass("CS 0004", "INTRODUCTION TO COMPUTER PROGRAMMING-BASIC");
	$cs02 = new ChildClass("CS 0007", "INTRODUCTION TO COMPUTER PROGRAMMING");
	$cs03 = new ChildClass("CS 0008", "INTRODUCTION TO COMPUTER PROGRAMMING WITH PYTHON");
	$cs04 = new ParentClass("CS 0134", "WEB SITE DESIGN & DEVELOPMENT");
	$cs05 = new ChildClass("CS 0155", "DATA WITCHCRAFT");
	$cs06 = new ChildClass("CS 0334", "INTERMEDIATE WEB SITE DESIGN & DEVELOPMENT");
	$cs07 = new ParentClass("CS 0401", "INTERMEDIATE PROGRAMMING USING JAVA");
	$cs08 = new ParentClass("CS 0441", "DISCRETE STRUCTURES FOR COMPUTER SCIENCE ");
	$cs09 = new ChildClass("CS 0445", "DATA STRUCTURES");
	$cs10 = new ChildClass("CS 0447", "COMPUTER ORGANIZATION AND ASSEMBLY LANGUAGE");
	$cs11 = new ChildClass("CS 0449", "INTRODUCTION TO SYSTEMS SOFTWARE");
	$cs12 = new ChildClass("CS 0590", "SOCIAL IMPLICATIONS OF COMPUTING TECHNOLOGY");
	$cs13 = new ChildClass("CS 1501", "ALGORITHM IMPLEMENTATION");
	$cs14 = new ChildClass("CS 1502", "FORMAL METHODS IN COMPUTER SCIENCE");
	$cs15 = new ParentClass("CS 1511", "INTRODUCTION TO THEORY OF COMPUTATION");
	$cs16 = new ParentClass("CS 1520", "PROGRAMMING LANGUAGES FOR WEB APPLICATIONS");
	$cs17 = new ChildClass("CS 1530", "SOFTWARE ENGINEERING");
	$cs18 = new ChildClass("CS 1538", "INTRODUCTION TO SIMULATION");
	$cs19 = new ParentClass("CS 1541", "INTRODUCTION TO COMPUTER ARCHITECTURE");
	$cs20 = new ChildClass("CS 1550", "INTRODUCTION TO OPERATING SYSTEMS");
	$cs21 = new ChildClass("CS 1555", "DATABASE MANAGEMENT SYSTEMS");
	$cs22 = new ChildClass("CS 1622", "INTRODUCTION TO COMPILER DESIGN");
	$cs23 = new ParentClass("CS 1631", "SOFTWARE DESIGN METHODOLOGY");
	$cs24 = new ChildClass("CS 1635", "INTERFACE DESIGN METHODOLOGY");
	$cs25 = new ChildClass("CS 1640", "BIOINFORMATICS SOFTWARE DESIGN");
	$cs26 = new ChildClass("CS 1645", "INTRODUCTION TO HIGH PERFORMANCE COMPUTING SYSTEMS");
	$cs27 = new ChildClass("CS 1656", "INTRODUCTION TO DATA SCIENCE");
	$cs28 = new ParentClass("CS 1666", "PRINCIPLES OF COMPUTER GAME DESIGN & IMPLEMENTATION");
	$cs29 = new ChildClass("CS 1675", "INTRODUCTION TO MACHINE LEARNING");
	$cs30 = new ChildClass("CS 1699", "SPEC TOPICS IN COMPUTER SCIENCE");
?>

<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8"><meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Assignment 3</title>
		<link rel="stylesheet" href="assignment3.css">
	</head>
	<body>
		<h3 class="title3">A s s i g n m e n t  3 &nbsp;&nbsp;&nbsp; - &nbsp;&nbsp;&nbsp; A h m e d &nbsp;&nbsp;&nbsp;&nbsp; A b d e l s a l a m</h3>
		<h1 class="title1">U n i v e r s i t y &nbsp;&nbsp;&nbsp; o f &nbsp;&nbsp;&nbsp; P i t t s b u r g h</h1>
		<h2 class="title2">S c h o o l &nbsp;&nbsp;&nbsp; o f &nbsp;&nbsp;&nbsp; C o m p u t e r &nbsp;&nbsp;&nbsp; S c i e n c e</h2>
		<section>
			<h3>Here is a list of the Undergraduate Classes:</h3>
			<ul>
				<li><?= $cs01->__toString(); ?></li>
				<li><?= $cs02->__toString(); ?></li>
				<li><?= $cs03->__toString(); ?></li>
				<li><?= $cs04->__toString(); ?></li>
				<li><?= $cs05->__toString(); ?></li>
				<li><?= $cs06->__toString(); ?></li>
				<li><?= $cs07->__toString(); ?></li>
				<li><?= $cs08->__toString(); ?></li>
				<li><?= $cs09->__toString(); ?></li>
				<li><?= $cs10->__toString(); ?></li>
				<li><?= $cs11->__toString(); ?></li>
				<li><?= $cs12->__toString(); ?></li>
				<li><?= $cs13->__toString(); ?></li>
				<li><?= $cs14->__toString(); ?></li>
				<li><?= $cs15->__toString(); ?></li>
				<li><?= $cs16->__toString(); ?></li>
				<li><?= $cs17->__toString(); ?></li>
				<li><?= $cs18->__toString(); ?></li>
				<li><?= $cs19->__toString(); ?></li>
				<li><?= $cs20->__toString(); ?></li>
				<li><?= $cs21->__toString(); ?></li>
				<li><?= $cs22->__toString(); ?></li>
				<li><?= $cs23->__toString(); ?></li>
				<li><?= $cs24->__toString(); ?></li>
				<li><?= $cs25->__toString(); ?></li>
				<li><?= $cs26->__toString(); ?></li>
				<li><?= $cs27->__toString(); ?></li>
				<li><?= $cs28->__toString(); ?></li>
				<li><?= $cs29->__toString(); ?></li>
				<li><?= $cs30->__toString(); ?></li>
			</ul>
			
		</section>
	</body>
</html>