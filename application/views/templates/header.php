<!DOCTYPE html>
<html>
	<head>
		<title><?=$title?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
		<script src="<?php echo base_url(); ?>assets/js/jquery-2.0.3.js"></script>
		<script src="<?php echo base_url(); ?>assets/js/weather.js"></script>
	</head>
	<body>
		<header class="dark">
			<div class="container center">
				<h1>Kisah dari Desa Whiteland</h1>
				<div class="align-right">
					<span id="cuaca" class="small">Cuaca</span><br>
					<span class="small"><?php echo date("d/m/Y"); ?></span>
				</div>
			</div>
		</header>
		
		<nav class="darker">
			<div class="container center align-right clear">
				<ul class="inline">
					<li class="inline"><a href="<?php echo base_url();?>index.php/kisah/">kisah</a></li>
					<li class="inline"><a href="<?php echo base_url();?>index.php/jurnal/">jurnal</a></li>
					<li class="inline"><a href="<?php echo base_url();?>index.php/penulis/">penulis</a></li>
				</ul>
			</div>
		</nav>
		
		<section class="inner-content">
			<div class="container center<?php if($title == 'Penulis | Kisah dari Desa Whiteland'):?> reader<?php endif; ?>">
