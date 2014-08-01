<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/home.css">
	</head>
	<body>
		<div class="wrapper"></div>
		<div id="container" class="align-center">
			<div id="title">
				<h1>Selamat datang, Petualang.</h1>
				<!-- <p>Jelajahi Desa Whiteland yang indah dan mengagumkan.</p> -->
			</div>
			<div id="menu">
				<div id="kisah" class="menu-item relative">
					<h2>kisah</h2>
					<a href="<?php echo base_url(); ?>index.php/kisah/"><span class="link"></span></a>
				</div>
				<div id="jurnal" class="menu-item relative">
					<h2>jurnal</h2>
					<a href="<?php echo base_url(); ?>index.php/jurnal/"><span class="link"></span></a>
				</div>
				<div id="penulis" class="menu-item relative">
					<h2>penulis</h2>
					<a href="<?php echo base_url(); ?>index.php/penulis/"><span class="link"></span></a>
				</div>
			</div>
			<small><a href="<?php echo base_url(); ?>index.php/admin/" id="admin">login sebagai admin</a></small>
		</div> <!-- container -->
	</body>
</html>